<?PHP
	require_once '../config.php';
    require_once '../Model/produit.php';

    class produitC {

        function ajouterproduit($produit){
            $sql="INSERT INTO produit (idp, nom,marque,dateajout,prix,image) 
            VALUES (:idp,:nom,:marque, :dateajout, :prix,:image)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'idp' => $produit->getId(),
                    'nom' => $produit->getNom(),
                    'marque' => $produit->getmarque(),
                    'dateajout' => $produit->getdateajout(),
                    'prix' => $produit->getprix(),
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
      
        function modifier(int $idp, string $nom, string $marque,string $dateajout,int $prix, string $image )
        {
            $db = config::getConnexion();
            $sql = "UPDATE produit SET idp='$idp'  ,nom='$nom' , marque='$marque' , dateajout='$dateajout', prix='$prix',image='$image' WHERE idp='$idp'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }
       /* function afficherproduits( )
        {
            
            $sql="SElECT  nomcategorie From categorie inner join  produit on categorie.idp=produit.idp ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
*/
    }
		