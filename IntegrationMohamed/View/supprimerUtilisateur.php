<?PHP
	include_once "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerUtilisateur($_POST["id"]);
		header('Location:afficherUtilisateurs.php');
	}

?>