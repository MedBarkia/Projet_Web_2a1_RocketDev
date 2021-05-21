<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UtilisateurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["pass"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["pass"])
    ) {
        $user = new Utilisateur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['pass']
        );
        $userC->ajouterUtilisateur($user);
        header('Location:send_mail3.php');
    }
    else
        $error = "Missing information";
}

?>
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>


 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Coup de Chef</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


      <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
      
    <style>
        body{
        padding:10% 3% 10% 3%;
        text-align:center;
        }
        img{
            height:140px;
                width:140px; 
        }
               .mode {
            float:right;
        }
        .change {
            cursor: pointer;
            border: 1px solid #555;
            border-radius: 40%;
            width: 20px;
            text-align: center;
            padding: 5px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }
    </style>
    </head>

<body class="">
    <a class="navbar-brand smoothie" href="addU.php"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>
  <header id="header" class="fixed-top">
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <hr>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

<div id="error">
    <?php echo $error; ?>
</div>


  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Inscription</h4>
                  <p class="card-category"> Crée Un compte</p>
                </div>
                <div class="card-body">
       
                  <form  name="formUtilisateur" action="" method="POST" onsubmit=" return verifUtilisateur();">
                     <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">


                <label class="bmd-label-floating" for="nom">Nom:
                </label>
            <input type="text" name="nom" id="nom" maxlength="30" class="form-control" required pattern="[A-Za-z\s]+" >
            <div style=" color: red;" id="erreurNom"></div>

                      </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">

                <label class="bmd-label-floating" for="prenom">Prénom:
                </label>   
            <input type="text" name="prenom" id="prenom" maxlength="30" class="form-control" required pattern="[A-Za-z\s]+" >
                        <div style=" color: red;" id="erreurPrenom"></div>

                   </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">

                <label class="bmd-label-floating" for="email">Adresse mail:
                </label>
            
                <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" class="form-control">
             </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">

                <label class="bmd-label-floating" for="login">Login:
                </label>
            
                <input type="text" name="login" id="login" class="form-control" >
                                        <div style=" color: red;" id="erreurlogin"></div>

             </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                <label class="bmd-label-floating" for="pass">Mot de passe:
                </label>
            
                <input type="password" name="pass" id="pass" class="form-control">
                                                        <div style=" color: red;" id="erreurpass"></div>

             </div>
                      </div>
                      <div class="col-md-4"  >
                        <div class="form-group">

                              </div>
                      </div>
                    </div>

                               <div class="clearfix"></div>
                               <input class="btn btn-primary btn-block" type="submit" value="s'inscrit">
  <div> <a href="connexion.php">J'ai deja un compte  </a> </div>

   </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
                
    <script src="script.js"></script>
     <div class="mode">
        Dark mode:             
        <span class="change">OFF</span>
    </div>
      
  
      
    <script>
        $( ".change" ).on("click", function() {
            if( $( "body" ).hasClass( "dark" )) {
                $( "body" ).removeClass( "dark" );
                $( ".change" ).text( "OFF" );
            } else {
                $( "body" ).addClass( "dark" );
                $( ".change" ).text( "ON" );
            }
        });
    </script>
</body>

</html>