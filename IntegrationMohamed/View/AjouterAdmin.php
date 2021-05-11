<?php
session_start();

include_once '../Model/administrateur.php';
include_once '../Controller/administrateurC.php';
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
    // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexionAd.php');
   }
  $administrateurC=new administrateurC();
  $listeUsers=$administrateurC->afficherAdmin();
$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new administrateurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["email"]) && 
    isset($_POST["pass"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["pass"])
    ) {
        $user = new administrateur(
            $_POST['nom'],
            $_POST['email'],
            $_POST['pass']
        );
        $userC->ajouterAdmin($user);
        header('Location:afficherAdmin.php');
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <lin k rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
coup de chef  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>
<body class="">

    <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
        COUP DE CHEF
        </a></div>
      <div class="sidebar-wrapper">
      <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./back.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="afficherUtilisateurs.php">
              <i class="material-icons">person</i>
              <p>Utilisateurs</p>
            </a>
          </li>
           <li class="nav-item  ">
            <a class="nav-link" href="afficherLivreur.php">
              <i class="material-icons">person</i>
              <p>Livreurs</p>
            </a>
          </li>
           <li class="nav-item   ">
            <a class="nav-link" href="afficherAdmin.php">
              <i class="material-icons">person</i>
              <p>Administrateurs</p>
            </a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link" href="./tablecom.php">
              <i class="material-icons">content_paste</i>
              <p>Commentaires</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>chefs et recettes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Livraisons</p>
            </a>
          </li>
          <li class="nav-item   active">
            <a class="nav-link" href="./ajouterproduit.php">
              <i class="material-icons">library_books</i>
              <p>Produit</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherReclamation.php">
              <i class="material-icons">Reclamation</i>
              <p>Reclamation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="table.php">
              <i class="material-icons">Restaurant</i>
              <p>restaurant</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="ajoutercategorie.php">
              <i class="material-icons">library_books</i>
              <p>categorie</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="afficheravis.php">
              <i class="material-icons"> library_books</i>
              <p>avis</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Administration</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">

                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="deconnexionAd.php">Log out</a>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">

                  <h4 class="card-title">Add Admin</h4>

                </div>

        <hr>


<div id="error">
    <?php echo $error; ?>
</div>

<form name="formAdmin" action="" method="POST" onsubmit=" return verifAdmin();">
    <table class="table" >

        <tr>
           
            <td>
                <label class="bmd-label-floating" or="nom">Nom:
                </label>
            </td>
            <td><input  class="form-control" type="text" name="nom" id="nom" maxlength="20" required pattern="[A-Za-z\s]+" >
                                    <div style=" color: red;" id="erreurNom"></div>
</td>

        </tr>
        

        <tr>
            <td>
                <label class="bmd-label-floating"  for="email">Adresse mail:
                </label>
            </td>
            <td>
                <input class="form-control"  type="email" name="email" id="email" pattern=".+@CoupDeChef.tn">
            </td>
        </tr>
        <tr>
            
        </tr>
        
        <tr>
            <td>
                <label  class="bmd-label-floating" for="pass">Mot de passe:
                </label>
            </td>
            <td>
                <input  class="form-control" type="password" name="pass" id="pass">
                <div style=" color: red;" id="erreurpass"></div>

            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input class="btn btn-primary btn-block" type="submit" value="Envoyer">
            </td>
            <td>
                <input   class="btn btn-primary btn-block" type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
<script src="script.js"></script>
</body>
</html>