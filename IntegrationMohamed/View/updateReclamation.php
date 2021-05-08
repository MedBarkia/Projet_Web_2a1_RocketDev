<?php
include "../Controller/reclamationC.php";
require_once "../Model/reclamation.php";
$db = config::getConnexion();
$nom=isset($_POST['nom']) ? $_POST['nom'] : NULL;
$email=isset($_POST['email']) ? $_POST['email'] : NULL;
$type=isset($_POST['type']) ? $_POST['type'] : NULL;
$description=isset($_POST['description']) ? $_POST['description'] : NULL;

$ReclamationC=new ReclamationC();
$ReclamationC->modifierReclamation($nom,$email,$type,$description);
header("Location: afficherReclamation.php")
?>