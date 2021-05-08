<?PHP
include "../Model/typerec.php";
include "../Controller/typerecC.php";

if($_POST)
{   
    
    $IDtype = $_POST['IDtype'];
    $type = $_POST['type'];
    
 if($_POST['IDtype']!=='' && $_POST['type']!=='')
{ $typerec=new typerec($_POST['IDtype'],$_POST['type']);



    $typerecC=new typerecC();
    $typerecC->ajoutertyperec($typerec);
   header('Location: affichertyperec.php');
}
}
?>
