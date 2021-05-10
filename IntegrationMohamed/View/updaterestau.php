<?php
//include "../connection.php";
include "../controller/restauC.php";
$db = config::getConnexion();
$num=$_POST['num'];
$nom= $_POST['nom'];
$adresse= $_POST['adresse'];
$telephone= $_POST['telephone'];
$horaire= $_POST['horaire'];
$photo= $_FILES["photo"]["name"];


/*$sql = "UPDATE restaurant SET nom='$nom'  ,adresse='$adresse' , telephone='$telephone' , horaire='$horaire' WHERE num='$num'";
$req = $db->prepare($sql);
$req->execute();*/
$restauC=new restauC();
$restauC->modifier($num,$nom,$adresse,$telephone,$horaire,$photo);
header("Location:table.php");   




?>