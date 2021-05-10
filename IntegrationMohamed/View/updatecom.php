<?php
//include "../connection.php";
include "../controller/commentaireC.php";
$db = config::getConnexion();
$id=$_POST['id'];
$idclient= $_POST['idclient'];
$commentaire= $_POST['commentaire'];



/*$sql = "UPDATE restaurant SET nom='$nom'  ,adresse='$adresse' , telephone='$telephone' , horaire='$horaire' WHERE num='$num'";
$req = $db->prepare($sql);
$req->execute();*/
$commentaireC=new commentaireC();
$commentaireC->modifier($id,$idclient,$commentaire);
header("Location:commentairerestau.php");   




?>