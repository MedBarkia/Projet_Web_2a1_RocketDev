<?php
include "../controller/reclamationC.php";
require_once "../model/reclamation.php";
$db = config::getConnexion();
$nom=isset($_POST['nom']) ? $_POST['nom'] : NULL;
$email=isset($_POST['email']) ? $_POST['email'] : NULL;
$type=isset($_POST['type']) ? $_POST['type'] : NULL;
$description=isset($_POST['description']) ? $_POST['description'] : NULL;
/*$sql = "UPDATE restaurant SET nom='$nom'  ,adresse='$adresse' , telephone='$telephone' , horaire='$horaire' WHERE num='$num'";
$req = $db->prepare($sql);
$req->execute(); */

$ReclamationC=new ReclamationC();
$ReclamationC->modifierReclamation($nom,$email,$type,$description);
header("Location: ../view/tables.php")
?>