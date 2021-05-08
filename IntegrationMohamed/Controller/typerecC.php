<?PHP
include "../config.php";
//require_once '../model/typerec.php';

class typerecC
{
    function ajoutertyperec($typerec){
        $sql="insert into typerec (IDtype,type) values (:IDtype,:type)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $IDtype=$typerec->getIDtype();
        $type=$typerec->gettype();
        $req->bindValue(':IDtype',$IDtype);
        $req->bindValue(':type',$type);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    function affichertyperec(){
        $sql="SElECT * From typerec ORDER BY IDtype";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimertyperec($type){
        $sql="DELETE FROM typerec where type= :type";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':type',$type);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifiertyperec($typerec,$type){
    
        $sql="UPDATE typerec SET IDtype=:IDtype WHERE type=$type";
        
        $db = config::getConnexion();
      
        try{  
        $req=$db->prepare($sql);

        $IDtype=$typerec->getIDtype();

       
        
     
        $req->bindValue(':IDtype',$IDtype);

            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }



    
    function recuperertyperec($type){
        $sql="SELECT * from typerec where type=$type";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    

    

    

}
?>