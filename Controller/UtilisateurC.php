<?PHP
	include "../config.php";
	require_once '../Model/Utilisateur.php';

	class UtilisateurC {

        function ajouterUtilisateur($utilisateur){
            $sql="INSERT INTO utilisateur (nom, prenom, email, login, pass) 
			VALUES (:nom,:prenom,:email, :login, :pass)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $utilisateur->getNom(),
                    'prenom' => $utilisateur->getPrenom(),
                    'email' => $utilisateur->getEmail(),
                    'login' => $utilisateur->getLogin(),
                    'pass' => $utilisateur->getPass()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherUtilisateurs(){
			
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM utilisateur WHERE id= :id";
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
		function modifierUtilisateur($utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						login = :login,
						pass = :pass
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $utilisateur->getNom(),
					'prenom' => $utilisateur->getPrenom(),
					'email' => $utilisateur->getEmail(),
					'login' => $utilisateur->getLogin(),
					'pass' => $utilisateur->getPass(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererUtilisateur($id){
			$sql="SELECT * from utilisateur where id=$id";
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

		function recupererUtilisateur1($id){
			$sql="SELECT * from utilisateur where id=$id";
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

            $sql="SELECT * FROM utilisateur WHERE email='" . $email . "' and pass = '". $pass ."'";
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
                     $_SESSION['id'] = $x['id'];



                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }

	}



?>