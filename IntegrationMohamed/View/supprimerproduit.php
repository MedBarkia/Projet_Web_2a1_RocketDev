<?PHP
	include "../controller/produitC.php";

	$produitC=new produitC();
	
	if (isset($_POST["idp"])){
		$produitC->supprimerproduit($_POST["idp"]);
		header('Location:afficherproduit.php');
	}

?>