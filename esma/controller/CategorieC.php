<?PHP 
include_once "../connection.php";
include_once "../model/Categorie.php";

class categorieC
{
	 function ajoutercategorie($categorie)
	{   
		    $ref=$categorie->getref();
            $nomcategorie=$categorie->getnomcategorie();
            $idp=$categorie->getidp();

            
		$sql="insert into categorie (ref,idp,nomcategorie) values ('$ref','$idp','$nomcategorie')";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->execute();

		}
		catch(Exception $e)
		{
			echo "erreur:" .$e->getMessage();
		}
	}
	function affichercategories()
	{
		
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 
		/*function afficherproduitscategorie()
	{
		$sql="SELECT * FROM categorie,product  where categorie.idp = product.idp";
			$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

	}*/
	function supprimercategorie($ref)
	{
		$db = config::getConnexion();
		$sql="DELETE FROM categorie WHERE ref=:ref";
		$req = $db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function affichercategorieSelect(){
		$db = config::getConnexion();

        try {
            $query = $db->prepare(
                'SELECT * FROM produit'
            );
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_CLASS, "produit");
            $option = '';
            foreach ($result as $produit) {
                $option .= '<option value="' . $produit->getId() . '">' . $produit->getNom() . ' ' . $produit->getmarque() .'</option>';
            }
            return $option;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }*/
	function modifier(int $ref, int $idp,string $nomcategorie)
	{
		$db = config::getConnexion();
		$sql = "UPDATE categorie SET ref='$ref'  ,idp='$idp',nomcategorie='$nomcategorie' WHERE ref='$ref'";
		$req = $db->prepare($sql);
		$req->execute();
	   
	}

}
function afficherproduit()
	{
		
		$sql="SElECT idp From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 
?>