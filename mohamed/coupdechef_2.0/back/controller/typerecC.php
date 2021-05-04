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
    function supprimertyperec($IDtype){
        $sql="DELETE FROM typerec where IDtype= :IDtype";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':IDtype',$IDtype);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifiertyperec($typerec,$IDtype){
    
        $sql="UPDATE typerec SET type=:type WHERE IDtype=$IDtype";
        
        $db = config::getConnexion();
      
        try{  
        $req=$db->prepare($sql);

        $type=$typerec->gettype();

        $datas = array(':type'=>$type);
        
     
        $req->bindValue(':type',$type);

            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }



    
    function recuperertyperec($IDtype){
        $sql="SELECT * from typerec where IDtype=$IDtype";
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