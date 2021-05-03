<?PHP
	include "../config.php";
	require_once '../Model/administrateur.php';

	class administrateurC {

        function ajouterAdmin($administrateur){
            $sql="INSERT INTO administrateur (nom, email, pass) 
			VALUES (:nom,:email,:pass)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $administrateur->getNom(),
                    'email' => $administrateur->getEmail(),
                    'pass' => $administrateur->getPass()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherAdmin(){
			
			$sql="SELECT * FROM administrateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerAdmin($id){
			$sql="DELETE FROM administrateur WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAdmin($administrateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE administrateur SET 
						nom = :nom, 
						email = :email,
						pass = :pass
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $administrateur->getNom(),
					'email' => $administrateur->getEmail(),
					'pass' => $administrateur->getPass(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAdmin($id){
			$sql="SELECT * from administrateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererAdmin1($id){
			$sql="SELECT * from administrateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function connexionUser($email,$pass){

            $sql="SELECT * FROM administrateur WHERE email='" . $email . "' and pass = '". $pass ."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }
         function rechercherUsers($nom)
    {        
                 $sql="SELECT * FROM administrateur WHERE nom LIKE '".$nom."%'";
                 $db = config::getConnexion();

               	try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	


    }

	}



?>