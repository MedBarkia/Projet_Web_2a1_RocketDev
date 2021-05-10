<?PHP
    include "../config.php";
    require_once '../model/like.php';
    require_once '../model/restau.php';
    require_once '../Model/Utilisateur.php';

    class restauC {

        function ajouterrestau($restau){
            $sql="INSERT INTO restaurantt (num, nom,adresse,telephone,horaire,photo) 
            VALUES (:num,:nom,:adresse, :telephone, :horaire, :photo)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'num' => $restau->getnum(),
                    'nom' => $restau->getNom(),
                    'adresse' => $restau->getadresse(),
                    'telephone' => $restau->gettel(),
                    'horaire' => $restau->gethoraire(),
                    'photo' => $restau->getphoto()
                ]);
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function afficherproduit(){
            
            $sql="SELECT * FROM restaurantt";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        function supprimer($n)
        {
        $db = config::getConnexion();
		$sql = "DELETE FROM restaurant  WHERE num=$n";
		$req = $db->prepare($sql);
		
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        }
        function modifier(int $num, string $nom, string $adresse, int $telephone , string $horaire)
        {
            $db = config::getConnexion();
            $sql = "UPDATE restaurantt SET nom='$nom'  ,adresse='$adresse' , telephone='$telephone' , horaire='$horaire' WHERE num='$num'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }
        function recuperer($num){
			$sql="SELECT * from restaurantt where num=$num";
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
        function recupererid(){
			$sql="SELECT id from utilisateur";
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