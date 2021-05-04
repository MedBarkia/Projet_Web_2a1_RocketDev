<?PHP
    include "../connection.php";
    require_once '../model/commentaire.php';

    class commentaireC {

        function ajoutercomm($commentaire){
            $sql="INSERT INTO commentaiire(num,idclient,commentaire) 
            VALUES (:num,:idclient,:commentaire)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    
                    'num' => $commentaire->getnum(),
                    'idclient' => $commentaire->getidc(),
                    'commentaire' => $commentaire->getcommentaire()
                    
                ]);
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function affichercommentaire($num){
            $sql="SELECT * from commentaiire where num= '$num'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
           
        }
       /* function supprimer($n)
        {
        $db = config::getConnexion();
		$sql = "DELETE FROM commentaire  WHERE id=";
		$req = $db->prepare($sql);
		
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        }*/
        function modifier(int $id, string $num, string $commentaire)
        {
            $db = config::getConnexion();
            $sql = "UPDATE restaurant SET num='$num'  ,commentaire='$adresse'  WHERE id='$id'";
            $req = $db->prepare($sql);
		    $req->execute();
          
            
        }
       
    }
        ?>