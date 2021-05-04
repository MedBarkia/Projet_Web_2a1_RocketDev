<?PHP
include_once '../connexion.php';

class commandec {

	
	function ajoutercommande($commande){
		$sql="insert into commande(nom,adresse,total,date,etat,livreur) values 
(:nom,:adresse,:total,:date,:etat,:livreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$commande->getid();
        $nom=$commande->getNom();
        $prenom=$commande->getadresse();
        $note=$commande->gettotale();
        $classe=$commande->getdate();
        $class=$commande->getetat();
         $livreur=$commande->getlivreur();
        //lier variable => paramètre
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$prenom);
		$req->bindValue(':total',$note);
        $req->bindValue(':date',$classe);
        $req->bindValue(':etat',$class);
          $req->bindValue(':livreur',$livreur);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function affichercommande(){
        $sql="SElECT * From commande";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function tri1(){
        $sql="SElECT * From commande ORDER BY total DESC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function affichercommande2($l){
        //$a="majd02";
$sql="SELECT * from commande where nom='$l'";
        $db = config::getConnexion();
        /*$req=$db->prepare($sql);
        $req->bindValue(':user',$a);*/
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
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
	function modifiercommande($commande,$id){
		$sql="UPDATE commande SET id=:idd, nom=:nom,adresse=:adresse,etat=:etat,date=:date,total=:total WHERE id=:id";
		$db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    $idd=$livraison->getid();
    $nom=$livraison->getNom();
    $prenom=$livraison->getadresse();
    $note=$livraison->gettotale();
    $classe=$livraison->getdate();
    $class=$livraison->getetat();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':adresse'=>$prenom,':total'=>$note,':date'=>$classe,':etat'=>$class);
		//lier variable => paramètre
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$prenom);
		$req->bindValue(':total',$note);
        $req->bindValue(':etat',$class);
        $req->bindValue(':date',$classe);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }*/
	}

    
    
    ?>