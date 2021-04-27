<?php
//include "../connection.php";
include "../controller/CategorieC.php";
$db = config::getConnexion();
$ref=$_POST['ref'];
$idp= $_POST['idp'];
$nomcategorie= $_POST['nomcategorie'];

$categorieC=new categorieC();
$categorieC->modifier($ref,$idp,$nomcategorie);
header("Location: ../view/affichercategorie.php")
?>