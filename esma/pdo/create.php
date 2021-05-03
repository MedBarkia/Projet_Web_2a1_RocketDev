<?php
include "connection.php";

$idp=$_POST['idp'];
$nom= $_POST['nom'];
$marque= $_POST['marque'];
$dateajout= $_POST['dateajout'];

$holy =" INSERT INTO produit (idp,nom,marque,dateajout) values ('$idp','$nom','$marque','$dateajout')";
$query=$pdo->prepare($holy);
$query=$pdo->query($holy);
header("Location: ../pdo/index.php");

?>