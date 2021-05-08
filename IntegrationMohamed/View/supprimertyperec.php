<?PHP
include "../Controller/typerecC.php";
$typerecC=new typerecC();
if (isset($_POST["type"])){
	$typerecC->supprimertyperec($_POST["type"]);
	header('Location: affichertyperec.php');
}

?>