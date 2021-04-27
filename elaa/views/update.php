<?php
include "../controller/livraisonc.php";
$db = config::getConnexion();
$id=$_POST['id'];
$nom= $_POST['nom'];
$adresse= $_POST['adresse'];
$total= $_POST['total'];
$date= $_POST['date'];
$etat= $_POST['etat'];
$livreur= $_POST['livreur'];

$livraisonc=new livraisonc();
$livraisonc->modifier($id,$nom,$adresse,$total ,$date,$etat ,$livreur);
header('Location:afficherlivraison.php');