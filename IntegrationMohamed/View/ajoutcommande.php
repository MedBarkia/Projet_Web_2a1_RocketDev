<?php
include "../Model/commande.php";
include "../Controller/commandec.php";
if(isset($_POST['nom']) and isset($_POST['adresse']) and isset($_POST['date']) and isset($_POST['etat']) and isset($_POST['total']) and isset($_POST['livreur'])) 
{
$commande1=new commande($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['total'],$_POST['date'],$_POST['etat'],$_POST['livreur']);
$commande1c= new commandec();
$commande1c->ajoutercommande($commande1);
header('Location: panier2.php');
}


	

?>
