<?PHP
	include "../controller/livreurC.php";

	$livreurC=new livreurC();
	
	if (isset($_POST["id"])){
		$livreurC->supprimerlivreur($_POST["id"]);
		header('Location:afficherLivreur.php');
	}

?>