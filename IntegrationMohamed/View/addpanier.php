<?php
require  '../View/inc/header.php';
require  '../config.php';

$json=array('error' => true);
if(isset($_GET['idp']))
{
    $idp=$_GET['idp'];
    $sql = "SELECT idp FROM produit WHERE idp=:idp";
    $tab=array('idp'=>$_GET['idp']);
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->execute($tab);
    $produit=$req->fetchAll(PDO::FETCH_OBJ);
    if(empty($produit))
    {
        $json['message']="Ce produit n'existe pas!";
    }

    $panier->add($produit[0]->idp);
    $json['error']=false;
    $json['message']='Le produit a bien ete ajoute a votre panier';
    header('Location: panier2.php');
}
else
{
    $json['message']="Vous n'avez selectionne de produit a ajouter au panier";
}

echo json_encode($json);
?>
