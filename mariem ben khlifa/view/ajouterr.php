<?PHP
    include_once '../model/commentaire.php';
    include "../controller/commentaireC.php";

    $error = "";

// create user
$commentaire= null;
// create an instance of the controller
$commentaireC = new commentaireC();
if (
    //isset($_POST["id"]) &&
    isset($_POST["num"]) &&
    isset($_POST['idclient'])&&
    isset($_POST['commentaire'])
    
) {
    if (
       // !empty($_POST["id"]) &&
        !empty($_POST["num"]) &&
        !empty($_POST['idclient'])&&
        !empty($_POST["commentaire"])
        
    ) {
        $commentaire = new commentaire(
           // $_POST['id'],
            $_POST['num'],
            $_POST['idclient'],
            $_POST['commentaire'],
            
            
        
           

           );

        $commentaireC->ajoutercomm($commentaire);
        
        
    }
    else
        $error = "Missing information";

}
header("Location: ../view/commentairerestau.php");

?>