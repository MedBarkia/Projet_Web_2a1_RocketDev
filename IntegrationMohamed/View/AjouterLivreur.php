<?php
session_start();

include_once '../Model/livreur.php';
include_once '../Controller/livreurC.php';
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
    // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexionAd.php');
   }
$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new livreurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["login"]) &&
    isset($_POST["pass"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["pass"])
    ) {
        $user = new livreur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['login'],
            $_POST['pass']
        );
        $userC->ajouterLivreur($user);
        header('Location:afficherLivreur.php');
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
<button><a href="afficherAdmin.php">Retour à la liste</a></button>

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
          <li class="nav-item ">
            <a class="nav-link" href="afficherUtilisateurs.php">
              <i class="material-icons">person</i>
              <p>Utilisateurs</p>
            </a>
          </li>
           <li class="nav-item active ">
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
          <li class="nav-item ">
            <a class="nav-link" href="afficherReclamation.php">
              <i class="material-icons">report</i>
              <p>Reclamations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherChef.php">
              <i class="material-icons">person_pin</i>
              <p>Chefs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherRecettes.php">
              <i class="material-icons">receipt</i>
              <p>Recettes</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="ajouterproduit.php">
              <i class="material-icons">shopping_basket</i>
              <p>Produits</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="ajoutercategorie.php">
              <i class="material-icons">chrome_reader_mode</i>
              <p>categories</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="afficheravis.php">
              <i class="material-icons"> rate_review</i>
              <p>avis</p>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="./elaa.php">
              <i class="material-icons">bubble_chart</i>
              <p>Commandes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="table.php">
              <i class="material-icons">restaurant</i>
              <p>Restaurants</p>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="./tablecom.php">
              <i class="material-icons">insert_comment</i>
              <p>Commentaires</p>
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
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
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

                  <h4 class="card-title">Add Livreur</h4>

                </div>

        <hr>


<div id="error">
    <?php echo $error; ?>
</div>

<form name="formLivreur" action="" method="POST" onsubmit=" return verifLivreur();">
    <table  class="table">

        <tr>
            <td>
                <label for="nom">Nom:
                </label>
            </td>
            <td><input class="form-control"  type="text" name="nom" id="nom" maxlength="20" required pattern="[A-Za-z\s]+" >
                                                <div style=" color: red;" id="erreurNom"></div>
</td>
        </tr>
        

        <tr>
            <td>
                <label for="prenom">Prenom:
                </label>
            </td>
            <td><input class="form-control"  type="text" name="prenom" id="prenom" maxlength="20" required pattern="[A-Za-z\s]+" >
                                    <div style=" color: red;" id="erreurPrenom"></div>
</td>
        </tr>
        <tr>
            
        </tr>
         <tr>
            <td>
                <label for="login">Login:
                </label>
            </td>
            <td>
                <input class="form-control"  type="login" name="login" id="login">
                 <div style=" color: red;" id="erreurlogin"></div>

            </td>
        </tr>
        <tr>
            <td>
                <label for="pass">Mot de passe:
                </label>
            </td>
            <td>
                <input class="form-control"  type="password" name="pass" id="pass">
                         <div style=" color: red;" id="erreurpass"></div>

            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input  class="btn btn-primary btn-block" type="submit"  value="Envoyer">
            </td>
            <td>
                <input  class="btn btn-primary btn-block" type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
    <script src="script.js"></script>

</body>
</html>