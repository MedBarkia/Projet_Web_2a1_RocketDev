<?PHP
include "../config.php";
//require_once '../model/reclamation.php';

class ReclamationC
{
    function afficherReclamation ($reclamation){
        echo "id: ".$reclamation->getid()."<br>";
        echo "nom: ".$reclamation->getnom()."<br>";
        echo "email: ".$reclamation->getemail()."<br>";
        echo "type: ".$reclamation->gettype()."<br>";
        echo "description: ".$reclamation->getdescription()."<br>";
    }
    
    function ajouterReclamation($reclamation){
        $sql="insert into reclamation (nom,email,type,description) values (:nom,:email,:type,:description)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
        
        $nom=$reclamation->getnom();
        $email=$reclamation->getemail();
        $type=$reclamation->gettype();
        $description=$reclamation->getdescription();
       
       
        $req->bindValue(':nom',$nom);
        $req->bindValue(':email',$email);
        $req->bindValue(':type',$type);
        $req->bindValue(':description',$description);
    
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    function afficherReclamation3(){
        $sql="SElECT * From reclamation ORDER BY id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimerReclamation($id){
        $sql="DELETE FROM reclamation where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierReclamation($reclamation,$id){
        
       /* $db = config::getConnexion();
        $sql = "UPDATE reclamation SET nom='$nom'  ,email='$email' , type='$type' , description='$description' WHERE id='$id'";
        $req = $db->prepare($sql);
        $req->execute();*/
        
         
        $sql="UPDATE reclamation SET nom=:nom,email=:email,type=:type,description=:description WHERE id=$id";
        
        $db = config::getConnexion();
      
        try{  
        $req=$db->prepare($sql);

        $nom=$reclamation->getnom();
        $email=$reclamation->getemail();
        $type=$reclamation->gettype();
        $description=$reclamation->getdescription();
        $datas = array(':nom'=>$nom, ':email'=>$email, ':type'=>$type,':description'=>$description);
        
        
        $req->bindValue(':nom',$nom);
        $req->bindValue(':email',$email);
        $req->bindValue(':type',$type);
        $req->bindValue(':description',$description);

            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererReclamation($id){
        $sql="SELECT * from reclamation where id=$id";
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