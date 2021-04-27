<?PHP
	include "../controller/avisC.php";

	$avisC=new avisC();
	
	if (isset($_POST["name"])){
		$avisC->supprimeravis($_POST["name"]);
		header('Location:afficheravis.php');
	}

?>