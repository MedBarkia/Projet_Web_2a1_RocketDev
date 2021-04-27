<?php
//include "../connection.php";
include "../controller/avisC.php";
$db = config::getConnexion();
$name=$_POST['name'];
$rate= $_POST['rate'];
$avisC=new avisC();
$avisC->modifier($name,$rate);
header("Location: ../view/afficheravis.php")
?>