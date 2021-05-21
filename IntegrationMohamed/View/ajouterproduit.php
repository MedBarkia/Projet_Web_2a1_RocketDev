
<?php
include_once '../model/produit.php';
include_once '../controller/produitC.php';



$error = "";

// create user
$produit= null;
// create an instance of the controller
$produitC = new produitC();
if (
    isset($_POST["idp"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["marque"]) &&
    isset($_POST["dateajout"])&&
    isset($_POST["prix"])&&

    isset($_POST["image"])

) {
    if (
        !empty($_POST["idp"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["marque"]) &&
        !empty($_POST["dateajout"])&&
        !empty($_POST["prix"])&&

        !empty($_POST["image"])

    ) {
        $produit = new produit(
            $_POST['idp'],
            $_POST['nom'],
            $_POST['marque'],
            $_POST['dateajout'],
            $_POST['prix'],

            $_POST['image'],        );
        $produitC->ajouterproduit($produit);
        header('Location:afficherproduit.php');
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
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
        h1{
        color: #32a852;
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
<body  class="" >
<div class="mode">
        Dark mode:             
        <span class="change">OFF</span>
    </div>
      
    <div>
        
      
        <p>
            
        </p>
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
           <li class="nav-item ">
            <a class="nav-link" href="afficherLivreur.php">
              <i class="material-icons">person</i>
              <p>Livreurs</p>
            </a>
          </li>
           <li class="nav-item ">
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
          <li class="nav-item active ">
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
            <a class="navbar-brand" href="javascript:;">Map</a>
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
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
          
        </div>
        
      </nav>
      
      
      
      <!-- End Navbar -->    

      <div class="content">
        <div class="container-fluid">
      <form   onsubmit="return validateForm()" name="myForm" action="" method="POST">
    <table border="0" align="center">

        <tr>
            <td>
                <label for="idp"  class="bmd-label-floating">idp:
                </label>
            </td>
            <td><input type="text" name="idp" id="idp" maxlength="20"  class="form-control" >    <span class="error" id="errorid"></span></p>
 </td>
        </tr>
        <tr>
            <td>
                <label for="nom">nom:
                </label>
            </td>
            <td><input type="text" name="nom" id="nom" maxlength="20"  class="form-control">   <span class="error" id="errorname"></span></p>
 </td>
        </tr>

        <tr>
            <td>
                <label for="marque">marque:
                </label>
            </td>
            <td>
                <input type="marque" name="marque" id="marque"   class="form-control" >    <span class="error" id="errormarque"></span></p>

            </td>
        </tr>
        <td>
                <label for="dateajout">dateajout:
                </label>
            </td>
            <td>
                <input type="date" name="dateajout" id="dateajout"   class="form-control"  >  <span class="error" id="errordate"></span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="image">upload:
                </label>
            </td>
            <td>
                <input type="file" name="image" id="image"  class="form-control" >    <span class="error" id="errorimage"></span></p>

            </td>
        </tr>
       <tr>
       <tr>
            <td>
                <label for="prix">prix:
                </label>
            </td>
            <td>
                <input type="text" name="prix" id="prix"  class="form-control" >    <span class="error" id="errorprix"></span></p>

            </td>
        </tr>
       <tr>
            <td>
                <input type="submit" value="Envoyer" class="btn btn-primary pull-right">
            </td>
            <td>
                <input type="reset" value="Annuler"  class="btn btn-primary pull-right">
            </td>
            
        </tr>
    </table>
   
</form>
<td>
                        <form method="POST" action="afficherproduit.php">
                        <input type="submit" name="afficher" value="afficher les produits"  class="btn btn-primary pull-right">
                        
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="modifierproduit.php">
                        <input type="submit" name="modifier" value="modifier les produits"  class="btn btn-primary pull-right">
                        <input type="hidden" value="<?PHP echo $produit['idp']; ?>" name="idp">
                        <input type="hidden" value="<?PHP echo $produit['nom']; ?>" name="nom">

                        
                        </form>
                    </td>
                </div>
                </div>
<script>
function validateForm() {
      var idp= document.forms["myForm"]["idp"].value;
  var nom= document.forms["myForm"]["nom"].value;
    var marque = document.forms["myForm"]["marque"].value;
    var image = document.forms["myForm"]["image"].value;
     var dateajout = document.forms["myForm"]["dateajout"].value;

  if (nom == "") {

    document.getElementById('errorname').innerHTML="le champ  nom ne peut pas etre vide";  
    return false;
  }
  if (idp == "") {
    document.getElementById('errorid').innerHTML="le champ de l'id ne peut pas etre vide";  
    return false;
  }
  if (idp == 0) {
    document.getElementById('errorid').innerHTML="Veuillez entrez un id non  null";  
    return false;
  }
    if (marque == "") {
      document.getElementById('errormarque').innerHTML="Veuillez entrez une marque ";  

    return false;
  }
  if (dateajout == "") {
      document.getElementById('errordate').innerHTML="Veuillez entrez une date ";  

    return false;
  }
    
      if (nom.length<5) {


        document.getElementById('errorname').innerHTML="Veuillez entrez un nom de longeur supreieur a 5";  
    return false;
  }
  if (marque.length<4) {


    document.getElementById('errormarque').innerHTML="Veuillez entrez une marque de longeur supreieur a 4";  
return false;
}
   
      if (image == "") {
        document.getElementById('errorimage').innerHTML="Veuillez entrez une image";  


    return false;
  }

 
    
}
</script>
      <div id="map"></div>
     
      
    </div>
    
  </div>
 
  
  <div class="fixed-plugin">
    
    
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose a