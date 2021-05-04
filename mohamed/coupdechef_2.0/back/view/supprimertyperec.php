<?PHP
include "../controller/typerecC.php";
$typerecC=new typerecC();
if (isset($_POST["IDtype"])){
	$typerecC->supprimertyperec($_POST["IDtype"]);
	header('Location: affichertyperec.php');
}

?>