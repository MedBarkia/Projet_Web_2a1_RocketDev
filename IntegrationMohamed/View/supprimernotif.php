<?php
include "../controller/commentaireC.php";
$db = config::getConnexion();
$id=$_POST['id'];
$sql = "DELETE FROM notificationn WHERE id= '$id' ";
$req = $db->prepare($sql);
$req->execute();												
header("Location:back.php");          


?>