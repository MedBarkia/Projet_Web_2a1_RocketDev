<?PHP
include "../Controller/commandec.php";
$commande1c=new commandec();
if (isset($_POST["id"])){
	$commande1c->supprimercommande($_POST["id"]);
	header('Location: back.php');
}

?>