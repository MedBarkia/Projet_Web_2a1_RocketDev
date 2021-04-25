<?php
require '../connection.php';
require '../model/Recette.php';
require_once '../model/Chef.php';

class RecetteController
{
    public function ajouterRecette()
    {
        if (               
            isset($_POST['id_chef']) &&
            isset($_POST['nom_recette']) &&
            isset($_POST['type_recette']) &&
            isset($_POST['duree_recette']) &&
            isset($_POST['difficulte_recette']) &&
            isset($_POST['nbr_personnes']) &&
            isset($_POST['ingredients']) &&
            isset($_POST['preparation']) 
        ) {
            if (           
                !empty($_POST['id_chef']) &&
                !empty($_POST['nom_recette']) &&
                !empty($_POST['type_recette']) &&
                !empty($_POST['duree_recette']) &&
                !empty($_POST['difficulte_recette']) &&
                !empty($_POST['nbr_personnes']) &&
                !empty($_POST['ingredients']) &&
                !empty($_POST['preparation']) 
            ) {
                $image = $this->uploadImg();
                $recette = new Recette();
                $recette->setId_chef($_POST['id_chef']);
                $recette->setNom_recette($_POST['nom_recette']);
                $recette->setType($_POST['type_recette']);
                $recette->setDuree($_POST['duree_recette']);
                $recette->setDifficulte($_POST['difficulte_recette']);
                $recette->setNbr_personnes($_POST['nbr_personnes']);
                $recette->setIngredients($_POST['ingredients']);
                $recette->setPreparation($_POST['preparation']);

                $pdo = connection::getConnexion();
                try {
                    $query = $pdo->prepare(
                        'INSERT INTO recette (id_chef, nom_recette, type, duree, difficulte, nbr_personnes, ingredients, preparation, image) 
                                VALUES (:id_chef, :nom_recette, :type, :duree, :difficulte, :nbr_personnes, :ingredients, :preparation, :image)'
                    );
                    $query->execute([
                        'id_chef' => $recette->getId_chef(),
                        'nom_recette' => $recette->getNom_recette(),
                        'type' => $recette->getType(),
                        'duree' => $recette->getDuree(),
                        'difficulte' => $recette->getDifficulte(),
                        'nbr_personnes' => $recette->getNbr_personnes(),
                        'ingredients' => $recette->getIngredients(),
                        'preparation' => $recette->getPreparation(),
                        'image' => $image
                    ]);
                    header('Location: ../view/afficherRecettes.php');
                    exit();
                } catch (PDOException $e) {
                    return $e->getMessage();
                }
            } else {
                return "one or more attributes are missing";
            }
        }
    }

    public function ajouterRecetteForm()
    {
        $recette = new Recette();
        $option = $this->afficherChefSelect();
        return $recette->ajouterRecetteForm($option);
    }


    public function afficherChefSelect(){
        $pdo = connection::getConnexion();
        try {
            $query = $pdo->prepare(
                'SELECT * FROM chef'
            );
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_CLASS, "Chef");
            $option = '';
            foreach ($result as $chef) {
                $option .= '<option value="' . $chef->getId() . '">' . $chef->getNom() . ' ' . $chef->getPrenom() . '</option>';
            }
            return $option;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function afficherRecettes(){    
        $pdo = connection::getConnexion();
        try {
            $query = $pdo->prepare(
                'SELECT * FROM recette' 
            );
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_CLASS, "Recette");
            $table = '<table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>ID</th>
                            <th>ID de chef</th>                            
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Durée</th>
                            <th>Difficulté</th>
                            <th>Nombres de personnes</th>
                            <th>Ingrédients</th>
                            <th>Préparation</th>
                            <th>Image de la recette</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>';
            foreach ($result as $recette) {
                $table = $table . $recette->afficherRecetteForm();
            }
            $table = $table . "</table>";
            return $table;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }



    public function supprimerRecette($id){
        $pdo = connection::getConnexion();
        try {
            $query = $pdo->prepare(
                'DELETE FROM recette where id = :id'
            );
            $query->execute([
                'id' => $id
            ]);
            if($query->rowCount() == 0){
                return "id not found";
            }
            else{
              //  header('Location: ../view/afficherRecettes.php');
              //  exit();
                return "Recette supprimé avec succès";
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function modifierRecetteForm()
    {
        $pdo = connection::getConnexion();
        if (isset($_GET['id'])) {
            $recette_id = $_GET['id'];
            try {
                $query = $pdo->prepare(
                    'SELECT * FROM recette WHERE id = :id'
                );      
                $query->execute([
                    'id' => $recette_id
                ]);
                if($query->rowCount() == 0){
                    return "id not found";
                }
                else{
                    $query->setFetchMode(PDO::FETCH_CLASS, "Recette");
                    $recette = $query->fetch();
                    return $recette->modifierRecetteForm();
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        else{
            return "aucun id trouvé";
        }
    }


    public function modifierRecette()
    {
        $pdo = connection::getConnexion();
        if (isset($_POST['update'])) {
            if (
            isset($_POST['nom_recette']) &&
            isset($_POST['duree_recette']) &&
            isset($_POST['ingredients']) &&
            isset($_POST['preparation']) 
            ) {
            if (           
                !empty($_POST['nom_recette']) &&
                !empty($_POST['duree_recette']) &&
                !empty($_POST['ingredients']) &&
                !empty($_POST['preparation']) 
                ) {
                    if($_FILES['fileToUpload']['size'] != 0 ){
                        $image = $this->uploadImg();
                    }
                    else{
                        $image = $_POST['vielle_image'];
                    }
                    $id = $_POST['id'];
                    $id_chef = $_POST['id_chef'];
                    $nom_recette = $_POST['nom_recette'];
                    $type = $_POST['type'];
                    $duree = $_POST['duree_recette'];
                    $difficulte = $_POST['difficulte_recette'];
                    $nbr_personnes = $_POST['nbr_personnes'];
                    $ingredients = $_POST['ingredients'];
                    $preparation = $_POST['preparation'];

                    try {
                        $query = $pdo->prepare(
                            'UPDATE recette SET id_chef = :id_chef, nom_recette = :nom_recette, type = :type, duree = :duree, difficulte = :difficulte, nbr_personnes = :nbr_personnes, ingredients = :ingredients, preparation = :preparation, image = :image where id = :id'
                        );
                        $query->execute([
                            'id' => $id,
                            'id_chef' => $id_chef,
                            'nom_recette' => $nom_recette,
                            'type' => $type,
                            'duree' => $duree,
                            'difficulte' => $difficulte,
                            'nbr_personnes' => $nbr_personnes,
                            'ingredients' => $ingredients,
                            'preparation' => $preparation,
                            'image' => $image
                        ]);
                        if($query->rowCount() == 0){
                            return "ID non trouvé ou rien n'est changé" . $image;
                        }
                        else{
                           header("Location: ../view/afficherRecettes.php");
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