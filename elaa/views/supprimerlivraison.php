<?PHP
include "../connexion.php";
$db = config::getConnexion();
$n=$_POST['id'];
$sql = "DELETE FROM livraison WHERE id= $n";
$req = $db->prepare($sql);
$req->execute();
header("Location: ../views/afficherlivraison.php");

?>