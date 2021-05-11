<?PHP
	include "../controller/CategorieC.php";

	$categorieC=new categorieC();
	
	if (isset($_POST["ref"])){
		$categorieC->supprimercategorie($_POST["ref"]);
		header('Location:affichercategorie.php');
	}

?>