<?PHP
	include "../config.php";
	require_once '../Model/livreur.php';

	class livreurC {

        function ajouterLivreur($livreur){
            $sql="INSERT INTO livreur (nom, prenom, login, pass) 
			VALUES (:nom,:prenom,:login,:pass)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $livreur->getNom(),
                    'prenom' => $livreur->getPrenom(),
                    'login' => $livreur->getLogin(),
                    'pass' => $livreur->getPass()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherLivreur(){
			
			$sql="SELECT * FROM livreur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerLivreur($id){
			$sql="DELETE FROM livreur WHERE id= :id";
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
		function modifierLivreur($livreur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE livreur SET 
						nom = :nom, 
						prenom = :prenom,
						login = :login,
						pass = :pass
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $livreur->getNom(),
					'prenom' => $livreur->getPrenom(),
					'login' => $livreur->getLogin(),
					'pass' => $livreur->getPass(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererLivreur($id){
			$sql="SELECT * from livreur where id=$id";
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

		function recupererLivreur1($id){
			$sql="SELECT * from livreur where id=$id";
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

		function connexionUser($login,$pass){

            $sql="SELECT * FROM livreur WHERE login='" . $login . "' and pass = '". $pass ."'";
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
                 $sql="SELECT * FROM livreur WHERE nom LIKE '".$nom."%'";
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