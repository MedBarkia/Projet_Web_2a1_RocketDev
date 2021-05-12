<?php
session_start();

include_once "../controller/UtilisateurC.php";
	include_once '../Model/Utilisateur.php';
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
       // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexionAd.php');
   }
	$utilisateurC = new UtilisateurC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
	){
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
			
            $utilisateurC->modifierUtilisateur($user, $_GET['id']);
            header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

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
  <style> 
 input[type=submit] , input[type=reset] {
  background-color: #f8ceec; color: black; /* Gray */
border-radius: 4px;
}</style>
	</head>
	<body>

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
         <li class="nav-item active ">
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
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" action="recherche.php" method="POST">
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

                  <h4 class="card-title">Modifier Utilisateur</h4>

                </div>

        <hr>

        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
				
		?>
		<form  name="formUtilisateur"  action="" method="POST" onsubmit=" return verifUtilisateur();">
    <table class="table">
                <tr>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input class="form-control" type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input class="form-control" type="text" name="nom" id="nom" maxlength="20" required pattern="[A-Za-z\s]+" value = "<?php echo $user['nom']; ?>">
                        <div style=" color: red;" id="erreurNom"></div>

					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prenom">Prenom:
                        </label>
                    </td>
                    <td><input  class="form-control" type="text" name="prenom" id="prenom" maxlength="20"  required pattern="[A-Za-z\s]+" value = "<?php echo $user['prenom']; ?>"></td>
                                            <div style=" color: red;" id="erreurPrenom"></div>

                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input class="form-control" type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input class="form-control" type="text" name="login" id="login" value = "<?php echo $user['login']; ?>">
                                                                <div style=" color: red;" id="erreurlogin"></div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input class="form-control" type="password" name="pass" id="pass" value = "<?php echo $user['pass']; ?>">
                         <div style=" color: red;" id="erreurpass"></div>

                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-primary btn-block" type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input class="btn btn-primary btn-block" type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
          <script src="script.js"></script>
		<?php
		}
		?>
</div>
    <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="addU.php">
                  by RocketDev © ALL RIGHTS RESERVED
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
	</body>
</html>