<?PHP
	include "../connection.php";
	require_once '../model/rate.php';

	class avisC {

        function ajouteravis($avis){
            $sql="INSERT INTO ratee (name,rate)			
            VALUES (:name,:rate)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
                    'name' => $avis->getname(),
                    'rate' => $avis->getrate()
                  
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }
        function afficheravis(){
            
            
            $sql="SELECT * FROM ratee";
            $db = config::getConnexion();
            try{
                $listeavis = $db->query($sql);
                return $listeavis;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        function supprimeravis($name){
            $sql="DELETE FROM ratee WHERE name= :name";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue('name',$name);
            try{
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function modifier(string $name, float $rate)
        {
            $db = config::getConnexion();
            $sql = "UPDATE ratee SET name='$name'  ,rate='$rate' WHERE name='$name'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }
    }
	
        
        ?> 