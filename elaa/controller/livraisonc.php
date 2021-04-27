<?PHP
include "../connexion.php";
require_once "../model/livraison.php";

class livraisonc {

	
	function ajoutlivraison($livraison){
		$sql="insert into livraison(id,nom,adresse,total,date,etat,livreur) values 
(:id,:nom,:adresse,:total,:date,:etat,:livreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$livraison->getid();
        $nom=$livraison->getNom();
        $prenom=$livraison->getadresse();
        $note=$livraison->gettotale();
        $classe=$livraison->getdate();
        $class=$livraison->getetat();
         $livreur=$livraison->getlivreur();
        //lier variable => paramètre
        $req->bindValue(':id',$id);
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
    function afficherlivraison(){
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	/*function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
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
	}*/
	function modifier(int $id, string $nom, string $adresse, int $total , string $date ,string $etat, string $livreur)
        {
            $db = config::getConnexion();
            $sql = "UPDATE livraison SET id='$id'  ,nom='$nom' , adresse='$adresse' , total='$total', date='$date' , etat='$etat' , livreur='$livreur' WHERE id='$id'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }

	
	}

    
    
    ?>