<?php
session_start();

  include "../controller/livreurC.php";
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
    // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexionAd.php');
   }

   $nom = $_POST['rech'];

if (isset($_POST['rechercher']) &&
   isset($_POST['rech'])

){

 
  $livreurC=new livreurC();


     $listeUsers= $livreurC->rechercherUsers($_POST['rech']);

  
    }

    else
                header("Location: afficherLivreur.php");


?>
<html>
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
            <a class="nav-link" href="./dashboard.html">
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
           <li class="nav-item  active ">
            <a class="nav-link" href="afficherLivreur.php">
              <i class="material-icons">person</i>
              <p>Livreurs</p>
            </a>
          </li>
           <li class="nav-item  ">
            <a class="nav-link" href="afficherAdmin.php">
              <i class="material-icons">person</i>
              <p>Administrateurs</p>
            </a>
          </li>
           
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Reservation</p>
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
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <hr>
    <div class="main-panel">
      <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">

                        <a href="ajouterLivreur.php" class="appointment-btn scrollto">Ajouter Livreur</a>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" action="rechercheLivreur.php" method="POST">
                <div class="input-group no-border">
                  <input type="search" name="rech" class="form-control" placeholder="Search...">
                  <button type="submit" value="" name="rechercher" class="btn btn-white btn-round btn-just-icon">
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

                  <h4 class="card-title">Listes Livreurs</h4>

                </div>

        <hr>

    <table class="table" >
                      <thead class=" text-primary">
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Login</th>
          <th>supprimer</th>
        <th>modifier</th>
 </thead>
                      <tbody>
      <?PHP
        foreach($listeUsers as $user){
      ?>
        <tr>
           <td><?PHP echo $user['id']; ?></td>
          <td><?PHP echo $user['nom']; ?></td>
          <td><?PHP echo $user['prenom']; ?></td>
          <td><?PHP echo $user['login']; ?></td>
          <td>
            <form method="POST" action="supprimerLivreur.php">
            <input type="submit" class="btn btn-primary pull-right"name="supprimer" value="supprimer">
            <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
            </form>
          </td>
          <td>
            <a href="modifierLivreur.php?id=<?PHP echo $user['id']; ?>" >Modifier </a>
          </td>
        </tr>
      <?PHP
        }
      ?>
    </table>
  </body>
</html>
