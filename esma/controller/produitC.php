<?PHP
    include "../connection.php";
    require_once '../model/produit.php';

    class produitC {

        function ajouterproduit($produit){
            $sql="INSERT INTO produit (idp, nom,marque,dateajout,image) 
            VALUES (:idp,:nom,:marque, :dateajout,:image)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'idp' => $produit->getId(),
                    'nom' => $produit->getNom(),
                    'marque' => $produit->getmarque(),
                    'dateajout' => $produit->getdateajout(),
                    'image' => $produit->getimage()

                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherproduit(){
            
            $sql="SELECT * FROM produit";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        function supprimerproduit($idp){
            $sql="DELETE FROM produit WHERE idp= :idp";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':idp',$idp);
            try{
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
      
        function modifier(int $idp, string $nom, string $marque,string $dateajout, string $image )
        {
            $db = config::getConnexion();
            $sql = "UPDATE produit SET idp='$idp'  ,nom='$nom' , marque='$marque' , dateajout='$dateajout',image='$image' WHERE idp='$idp'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }
        function rechercherproduit($key)
	{
		$sql = "SELECT * FROM produit WHERE idp LIKE '%$key%'  OR nom LIKE '%$key%' OR marque LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
    }
		