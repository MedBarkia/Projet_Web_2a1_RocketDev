<?php
//include "../connection.php";
include "../controller/produitC.php";
$db = config::getConnexion();
$idp=$_POST['idp'];
$nom= $_POST['nom'];
$marque= $_POST['marque'];
$dateajout= $_POST['dateajout'];
$image= $_POST['image'];
$produitC=new produitC();
$produitC->modifier($idp,$nom,$marque,$dateajout,$image);
header("Location: ../view/afficherproduit.php")
?>