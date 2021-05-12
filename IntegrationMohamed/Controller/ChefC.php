<?php
require_once '../lang.php';
require_once '../config.php';
require '../Model/Chef.php';

class ChefController
{
    public function ajouterChef()
    {
        if (
            isset($_POST['nom_chef']) &&
            isset($_POST['prenom_chef']) &&
            isset($_POST['date_naissance']) &&
            isset($_POST['nationalite'])
        ) {
            if (
                !empty($_POST['nom_chef']) &&
                !empty($_POST['prenom_chef']) &&
                !empty($_POST['date_naissance']) &&
                !empty($_POST['nationalite'])
            ) {
                $image = $this->uploadImg();
                $chef = new Chef();
                $chef->setNom($_POST['nom_chef']);
                $chef->setPrenom($_POST['prenom_chef']);
                $chef->setDate_naissance($_POST['date_naissance']);
                $chef->setNationalite($_POST['nationalite']);
                $pdo = config::getConnexion();
                try {
                    $query = $pdo->prepare(
                        'INSERT INTO chef (nom_chef, prenom_chef, date_naissance, nationalite, image) 
                                VALUES (:nom_chef, :prenom_chef, :date_naissance, :nationalite, :image)'
                    );
                    $query->execute([
                        'nom_chef' => $chef->getNom(),
                        'prenom_chef' => $chef->getPrenom(),
                        'date_naissance' => $chef->getDate_naissance(),
                        'nationalite' => $chef->getNationalite(),
                        'image' => $image
                    ]);
                    header('Location: ../view/afficherChef.php');
                    exit();

                } catch (PDOException $e) {
                    return $e->getMessage();
                }
            } else {
                return "one or more attributes are missing";
            }
        }
    }
    public function ajouterChefForm()
    {
        $chef = new Chef();
        return $chef->ajouterChefForm();
    }

	public function afficherChefs(){	
		$pdo = config::getConnexion();
		try {
			$query = $pdo->prepare(
				'SELECT * FROM chef' 
			);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_CLASS, "Chef");
			$table = '<table class="table"  id="dataTable">
					<thead class=" text-primary">
						<tr>
							<th>ID</th>
							<th>' . $GLOBALS['lang']["Nom"] . '</th>
							<th>' . $GLOBALS['lang']["Prenom"] . '</th>
							<th>' . $GLOBALS['lang']["Date_naissance"] . '</th>
							<th>' . $GLOBALS['lang']["Nationalite"] . '</th>
                            <th>' . $GLOBALS['lang']["Image"] . '</th>
                            <th></th>
                            <th></th>
						</tr>
					</thead>';
			foreach ($result as $chef) {
			    $table = $table . $chef->afficherChef();
			}
			$table = $table . "</table>";
            return $table;
		} catch (PDOException $e) {
            return $e->getMessage();
	    }
    }

    public function supprimerChef($id){
        $pdo = config::getConnexion();
        try {
            $query = $pdo->prepare(
                'DELETE FROM chef where id = :id'
            );
            $query->execute([
                'id' => $id
            ]);
            if($query->rowCount() == 0){
                return "id not found";
            }
            else{
              // header('Location: ../view/afficherChef.php');
              //  exit();
                return $GLOBALS['lang']['Msg'];
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function modifierChefForm()
    {
        $pdo = config::getConnexion();
        if (isset($_GET['id'])) {
            $chef_id = $_GET['id'];
            try {
                $query = $pdo->prepare(
                    'SELECT * FROM chef WHERE id = :id'
                );      
                $query->execute([
                    'id' => $chef_id
                ]);
                if($query->rowCount() == 0){
                    return "id not found";
                }
                else{
                    $query->setFetchMode(PDO::FETCH_CLASS, "Chef");
                    $chef = $query->fetch();
                    return $chef->modifierChefForm();
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        else{
            return "aucun id trouvé";
        }
    }

    public function modifierChef()
    {
        $pdo = config::getConnexion();
        if (isset($_POST['modifier'])) {
            if (
            isset($_POST['nom_chef']) &&
            isset($_POST['prenom_chef']) &&
            isset($_POST['date_naissance']) &&
            isset($_POST['nationalite'])
            ) {
            if (
                !empty($_POST['nom_chef']) &&
                !empty($_POST['prenom_chef']) &&
                !empty($_POST['date_naissance']) &&
                !empty($_POST['nationalite'])
                ) {
                    if($_FILES['fileToUpload']['size'] != 0 ){
                        $image = $this->uploadImg();
                    }
                    else{
                        $image = $_POST['vielle_image'];
                    }
                    $id = $_POST['id'];
                    $nom_chef = $_POST['nom_chef'];
                    $prenom_chef = $_POST['prenom_chef'];
                    $date_naissance = $_POST['date_naissance'];
                    $nationalite = $_POST['nationalite'];      
                    try {
                        $query = $pdo->prepare(
                            'UPDATE chef SET nom_chef = :nom_chef, prenom_chef = :prenom_chef, date_naissance = :date_naissance, nationalite = :nationalite, image = :image
                            where id = :id'
                        );
                        $query->execute([
                            'id' => $id,
                            'nom_chef' => $nom_chef,
                            'prenom_chef' => $prenom_chef,
                            'date_naissance' => $date_naissance,
                            'nationalite' => $nationalite,
                            'image' => $image
                        ]);
                        if($query->rowCount() == 0){
                            return "ID non trouvé ou rien n'est changé" . $image;
                        }
                        else{
                            header("Location: ../view/afficherChef.php");
                            exit();
                        }
                    } catch (PDOException $e) {
                        return $e->getMessage();
                    }
                }
                else{
                    return "Veuillez remplir tout les champs";
                }
            }
        }
    }

    public function afficherChefCarte(){
        $pdo = config::getConnexion();
        try {
            $query = $pdo->prepare(
                'SELECT * FROM chef' 
            );
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_CLASS, "Chef");
            $liste = '';
            foreach ($result as $chef) {
                $liste = $liste . $chef->afficherChefCarte();
            }
            return $liste;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function rechercherChefForm()
    {
        $chef = new Chef();
        return $chef->rechercherChefForm();
    }

    public function rechercherChef($nom)
    {
        $pdo = config::getConnexion();
        $nom = $_POST['rech'];
        if (isset($_POST['rechercher'])) {
            if (isset($nom)) {
                try {
                $query = $pdo->prepare(
                    'SELECT * FROM chef WHERE nom_chef LIKE "'.$nom.'%"'
                );
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_CLASS, "Chef");
                $table = '<table class="table" >
                        <thead class=" text-primary">
                            <tr>
                                <th>ID</th>
                                <th>' . $GLOBALS['lang']["Nom"] . '</th>
                                <th>' . $GLOBALS['lang']["Prenom"] . '</th>
                                <th>' . $GLOBALS['lang']["Date_naissance"] . '</th>
                                <th>' . $GLOBALS['lang']["Nationalite"] . '</th>
                                <th>' . $GLOBALS['lang']["Image"] . '</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>';
                foreach ($result as $chef) {
                    $table = $table . $chef->afficherChef();
                }
                $table = $table . "</table>";
                return $table;
                } catch (PDOException $e) {
                    return $e->getMessage();
                }
            }
        }
    }


    public function triDate(){
        $pdo = config::getConnexion();
        try {
        $query = $pdo->prepare(
            'SELECT * FROM chef ORDER BY date_naissance desc'
        );
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, "Chef");
        $liste = '';
        foreach ($result as $chef) {
            $liste = $liste . $chef->afficherChefCarte();
        }
        return $liste;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function uploadImg(){
        $target_dir = "../uploads/";
        $random = rand(0,9999);
        $target_file = $target_dir . $random . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_FILES["fileToUpload"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
          } else {
            $uploadOk = 0;
          }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
          $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
          $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                return $target_file;
            }
        }
        return "erreur";
    }
}

?>
