<?php
	include "../controller/administrateurC.php";


   $nom = $_POST['rech'];

if (isset($_POST['rechercher']) &&
   isset($_POST['rech'])

){

 
	$administrateurC=new administrateurC();


     $listeUsers= $administrateurC->rechercherUsers($_POST['rech']);

  
    }

    else
                header("Location: afficherAdmin.php");


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
    <body>

     	<hr>

    <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
          <li class="nav-item ">
            <a class="nav-link" href="afficherUtilisateurs.php">
              <i class="material-icons">person</i>
              <p>Utilisateurs</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="afficherLivreur.php">
              <i class="material-icons">person</i>
              <p>Livreurs</p>
            </a>
          </li>
           <li class="nav-item active ">
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
            <a class="nav-link" href="elaa.php">
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
                                    <a href="ajouterAdmin.php" class="appointment-btn scrollto">Ajouter Admin</a>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
                 <form class="navbar-form" action="rechercheAd.php" method="POST">
                <div class="input-group no-border">
                  <input type="search" name="rech" class="form-control" placeholder="Search...">
                  <button type="submit" value="" name="rechercher" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            <ul class="navbar-nav">
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

                  <h4 class="card-title">Listes des  Administrateurs</h4>

                </div>

        <hr>

    <table class="table" >
                      <thead class=" text-primary">
				<th>Id</th>
				<th>Nom</th>
				<th>Email</th>
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
					<td><?PHP echo $user['email']; ?></td>
					<td>
						<form method="POST" action="supprimerAdmin.php">
						<input type="submit" class="btn btn-primary pull-right" name="supprimer" value="supprimer">
						<input  type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierAdmin.php?id=<?PHP echo $user['id']; ?>" >Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
