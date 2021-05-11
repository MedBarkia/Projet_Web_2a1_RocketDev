<?php
session_start();

include_once '../Model/rate.php';
include_once '../Controller/avisC.php';


  // On teste si la variable de session existe et contient une valeur
  if(!isset($_SESSION["e"])){
   var_dump($_SESSION);
   // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexion.php');
  }
 

$error = "";

// create user
$avis= null;
// create an instance of the controller
$avisC = new avisC();
if (
    isset($_POST["name"]) &&
    isset($_POST["rate"]) 


) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["rate"])
    )
     {  $avis= new avis(
            $_POST['name'],
            $_POST['rate'], );
        $avisC->ajouteravis($avis);
        header('Location:afficheravis.php');
    }
    else
        $error = "Missing information";
}

?>
  
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link href="../View/css/s.css" rel="stylesheet" />
    

</head>
<body>
<title></title>
  

<div class="container">
    <div class="row">

<form action="avis.php" method="post">

    <div>
        <h3>donner votre avis</h3>
    </div>

    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>

         <div class="rateyo" id= "rate"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rate">

    </div>

    <div><input type="submit" name="add"> </div>

</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rate :'+ rating);
            $(this).parent().find('input[name=rate]').val(rating); //add rating value to input field
        });
    });

</script>
</body>

</html>
