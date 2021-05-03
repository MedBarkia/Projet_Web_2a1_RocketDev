<?PHP
	include "../controller/administrateurC.php";

	$administrateurC=new administrateurC();
	
	if (isset($_POST["id"])){
		$administrateurC->supprimerAdmin($_POST["id"]);
		header('Location:afficherAdmin.php');
	}

?>