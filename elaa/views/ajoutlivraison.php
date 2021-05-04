<?php
include_once '../model/livraison.php';
include_once '../controller/livraisonc.php';



$error = "";

// create user
$livraison= null;
// create an instance of the controller
$livraisonc = new livraisonc();
if (
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["total"]) &&
    isset($_POST["date"]) &&
    isset($_POST["etat"]) &&
    isset($_POST["livreur"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["total"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["etat"]) &&
        !empty($_POST["livreur"])
    ) {
        $livraison = new livraison(
            $_POST['id'],
            $_POST['nom'],
            $_POST['adresse'],
            $_POST['total'],
            $_POST['date'],
            $_POST['etat'],
            $_POST['livreur'],        );
        $livraisonc->ajoutlivraison($livraison);
        header('Location:back.php');
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
<button><a href="afficherlivraison.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" onsubmit="return validateForm()" name="myForm" method="POST">
    <table border="1" align="center">

        <tr>
            
            <td>
                <label for="id">id:
                </label>
            </td>
            <td><input type="text" name="id" id="id" maxlength="8"></td>
        </tr>
        <tr>
            <td>
                <label for="nom">nom:
                </label>
            </td>
            <td><input type="text" name="nom" id="nom" ></td>
        </tr>

        <tr>
            <td>
                <label for="adresse">adresse:
                </label>
            </td>
            <td>
                <input type="text" name="adresse" id="adresse" >
            </td>
        </tr>
        <td>
                <label for="total">total:
                </label>
            </td>
            <td>
                <input type="float" name="total" id="total" >
            </td>
        </tr>
        </tr>
        <td>
                <label for="date">date:
                </label>
            </td>
            <td>
                <input type="date" name="date" id="date" >
            </td>
        </tr>
        </tr>
        <td>
                <label for="etat">etat:
                </label>
            </td>
            <td>
                <input type="text" name="etat" id="etat" >
            </td>
        </tr>
        </tr>
        <td>
                <label for="livreur">livreur:
                </label>
            </td>
            <td>
                <input type="text" name="livreur" id="livreur" >
            </td>
        </tr>
       <tr>
            <td>
                <input type="submit" value="Envoyer">
            </td>
            <td>
                <input type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
<script>
function validateForm() {
      var id= document.forms["myForm"]["id"].value;
  var nom= document.forms["myForm"]["nom"].value;
    var adresse = document.forms["myForm"]["adresse"].value;
    var total = document.forms["myForm"]["total"].value;
     var date = document.forms["myForm"]["date"].value;
     var etat = document.forms["myForm"]["etat"].value;
     var livreur = document.forms["myForm"]["livreur"].value;

  if (nom == "") {
    alert("nom vide");
    return false;
  }
  if (id == "") {
    alert("id vide");
    return false;
  }

    if (total == "") {
    alert("total vide");
    return false;
  }
  
  if (livreur == "") {
    alert("livreur vide");
    return false;
  }
  
  if (adresse == "") {
    alert("adresse vide");
    return false;
  }
  
  if (livreur == "") {
    alert("livreur vide");
    return false;
  }
    
    
      if (nom.length<5) {

    alert("too short name ");
    return false;
  }
  if (adresse.length<4) {

alert("too short adress ");
return false;
}
   


 
    
}
</script>
</body>

</html>