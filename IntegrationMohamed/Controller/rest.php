<?PHP
    include "../config.php";
    require_once '../model/restau.php';

    class rest {

        function afficherproduit1(int $num){
            
            $sql="SELECT * FROM restaurantt WHERE num = '$num'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        function afficheelike(int $num)
        {
                 $db = config::getConnexion();
                $sql = "SELECT COUNT(*) FROM liike WHERE num = '$num'";
                $res = $db->query($sql);
                $count = $res->fetchColumn();

                print " " .  $count . " likes";

        } 
        function supprimer(int $id,$num) 
        {
            $db = config::getConnexion();
            $sql = "DELETE FROM liike WHERE id= '$id' AND num= '$num' ";
            $liste = $db->query($sql);
            return $liste;
        }
        
 
        
       
    
}
        ?>