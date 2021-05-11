<?php
include "../Controller/produitC.php";
$db = config::getConnexion();
$idp=isset($_POST['idp']) ? $_POST['idp'] : NULL;
$nom= $_POST['nom'];
$marque= $_POST['marque'];
$dateajout= $_POST['dateajout'];
$prix= $_POST['prix'];
$image= $_POST['image'];
$produitC=new produitC();
$produitC->modifier($idp,$nom,$marque,$dateajout,$prix,$image);
header("Location:afficherproduit.php");   

?>