<?PHP
   
    require_once '../model/commentaire.php';
    require_once '../model/utilisateur.php';
    require_once '../model/like.php';
    

    class comment {
    
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
        function ajoutlike($idclient,$num)
        {
            $sql =" INSERT INTO liike (idclient,num) values ('$idclient', '$num')";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->execute();
            
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
        function modifier(int $id, int $idclient, string $commentaire)
        {
            $db = config::getConnexion();
            $sql = "UPDATE commentaiire SET idclient ='$idclient' ,commentaire='$commentaire'  WHERE id='$id'";
            $req = $db->prepare($sql);
		    $req->execute();
          
            
        }
        function afficheelike(int $num)
        {
                 $db = config::getConnexion();
                $sql = "SELECT COUNT(*) FROM likee WHERE id = '$num'";
                $res = $db->query($sql);
                $count = $res->fetchColumn();

                print " " .  $count . " like";

        }  
        function affichercommentairee($num){
            $sql="SELECT utilisateur.nom,utilisateur.prenom, commentaiire.commentaire
            FROM commentaiire INNER JOIN  utilisateur ON
            utilisateur.id = commentaiire.idclient WHERE commentaiire.num = '$num'" ;
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