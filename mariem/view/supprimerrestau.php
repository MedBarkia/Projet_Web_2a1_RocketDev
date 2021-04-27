<?php
include "../connection.php";
$db = config::getConnexion();
$n=$_POST['num'];
$sql = "DELETE FROM restaurantt  WHERE num= $n";
$req = $db->prepare($sql);
$req->execute();
header("Location: ../exemples/table.php");          


?>