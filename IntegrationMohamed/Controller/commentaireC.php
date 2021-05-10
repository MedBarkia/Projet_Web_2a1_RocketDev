<?PHP
    include "../config.php";
    require_once '../model/commentaire.php';
    require_once '../model/utilisateur.php';
    require_once '../model/restau.php';
    require_once '../model/like.php';
    require_once '../Model/Utilisateur.php';
    
    class commentaireC {

        function ajoutercomm($num,$idclient,$commentaire){
            $sql="INSERT INTO commentaiire(num,idclient,commentaire) 
            VALUES ('$num','$idclient','$commentaire')";
            $db = config::getConnexion();
            try{
                $req = $db->prepare($sql);
		        $req->execute(); 
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function affichercommentaire($num,$idclient){
            $sql="SELECT * from commentaiire where num= '$num' AND idclient= '$idclient'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
           
        }
        function afficher($num){
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
      
        

     
      /*  function supprimer(int $idclient)
        {
        $db = config::getConnexion();
        $sql = "DELETE FROM commentaiire  WHERE idclient= '$idclient' ";
        $req = $db->prepare($sql);
        $req->execute();
		
        }*/
        function modifier(int $id, int $idclient, string $commentaire)
        {
            $db = config::getConnexion();
            $sql = "UPDATE commentaiire SET idclient ='$idclient' ,commentaire='$commentaire'  WHERE id='$id'";
            $req = $db->prepare($sql);
		    $req->execute();
          
            
        }
        function nombre()
        {
                 $db = config::getConnexion();
                $sql = "SELECT COUNT(*) FROM notificationn";
                $res = $db->query($sql);
                $count = $res->fetchColumn();

                print " " .  $count . "";

        }  
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
        function afficherclient(int $idclient){
            
            $sql="SELECT utilisateur.nom , utilisateur.prenom FROM utilisateur WHERE id = '$idclient'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        function afficherclientt(){
            
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
        function affichercom(){
            $sql="SELECT * from commentaiire";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
           
        }

         /* public function tri()
	    {
    	  //$sql = "SELECT * FROM commentaiire ORDER BY id ASC, idclient";
          $sql="SELECT * FROM commentaiire
           ORDER BY id ASC";
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          } 
	     
	    }  */
           
        public function tri2()
	    {
    	  //$sql = "SELECT * FROM commentaiire ORDER BY id ASC, idclient";
          $sql="SELECT * FROM commentaiire
           ORDER BY num ASC";
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          } 
	     
	    }
        public function tri1()
	    {
    	  //$sql = "SELECT * FROM commentaiire ORDER BY id ASC, idclient";
          $sql="SELECT * FROM commentaiire
           ORDER BY idclient ASC ";
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          } 
	     
	    }   
        function affichernotif1()
        {
            $sql="SELECT utilisateur.nom , utilisateur.prenom,restaurantt.nom,notificationn.id
            FROM notificationn INNER JOIN  utilisateur ON
            utilisateur.id = notificationn.idclient 
            INNER JOIN  restaurantt ON
            restaurantt.num = notificationn.num  " ;
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
       /* function affichernotif2()
        {
            $sql="SELECT restaurantt.nom
            FROM notificationn INNER JOIN  restaurantt ON
            restaurantt.num = notificationn.num " ;
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }*/
       
    }
        ?>