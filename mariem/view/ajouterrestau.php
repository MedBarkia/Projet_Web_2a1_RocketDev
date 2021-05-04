<?php
include_once '../model/restau.php';
include_once '../controller/restauC.php';



$error = "";

// create user
$restau= null;
// create an instance of the controller
$restauC = new restauC();
if (
    isset($_POST["num"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["telephone"])&&
    isset($_POST["horaire"])&&
    isset($_FILES["photo"])
) {
    if (
        !empty($_POST["num"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["telephone"])&&
        !empty($_POST["horaire"])&&
        !empty($_FILES["photo"])
    ) {
        $restau = new restau(
            $_POST['num'],
            $_POST['nom'],
            $_POST['adresse'],
            $_POST['telephone'],
            $_POST['horaire'],
            $_FILES["photo"]["name"],
            $_FILES["photo"]["tmp_name"],
            
        
           

           );

        $restauC->ajouterrestau($restau);
        
        
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficherrestau.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST" enctype="multipart/form-data" >
    <table >

    <tr>
            <td>
                <label for="num"> num</label>
            </td>
            <td>
            <input type="text" id="num" name="num"placeholder="numero">
            </td>
            </tr>
    
            <tr>
                <td>
                    <label for="nom">nom</label>
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom"placeholder="nom">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="adresse">adresse</label>
                    
                    </td>
                    <td>
                        <input type="text" id="adresse" name="adresse" placeholder="adresse">
                    </td>
            </tr>
            <tr>
            <td>
                <label for="telephone"> telephone</label>
            </td>
            <td>
            <input type="text" id="telephone" name="telephone" placeholder="telephone">
            </td>
                   
            </tr>
            
            <tr>
                <td>
                    <label for="horaire">horaire</label>
                    </td>
                    <td>
                    <input type="time" id="horaire" name="horaire" min="9:00" max ="00.00" required>
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="photo">photo</label>
                    </td>
                    <td>
                    <input type="file" id="photo" name="photo" >
                    </td>
            </tr>
    
        <tr>
            <td>
                <input type="submit" value="enregistrer">

                
            </td>
            <td>
            <input type="reset" value ="quitter">
            </td>
        </tr>
    </table>
</form>
</body>
</html>