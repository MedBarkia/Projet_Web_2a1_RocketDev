<?php
include "../connection.php";
$db = config::getConnexion();
$id=$_POST['id'];
$sql = "DELETE FROM commentaiire  WHERE id= '$id' ";
$req = $db->prepare($sql);
$req->execute();
header("Location:commentairerestau.php");          


?>