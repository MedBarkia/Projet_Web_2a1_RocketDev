<?PHP
include "../model/reclamation.php";
include "../controller/reclamationC.php";

if($_POST)
{   
    
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    
 if($_POST['nom']!=='' && $_POST['email']!=='' && $_POST['type']!=='' && $_POST['description']!=='')
{ $reclamation1=new reclamation($_POST['nom'],$_POST['email'],$_POST['type'],$_POST['description']);



    $ReclamationC=new ReclamationC();
    $ReclamationC->ajouterReclamation($reclamation1);
   header('Location: index.php');
}else echo "erreur , il faut tout remplir";
}


//*/

?>