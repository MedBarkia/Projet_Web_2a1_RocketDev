<?php
session_start();
  include "../controller/UtilisateurC.php";
  include_once '../Model/Utilisateur.php';
$message="";

$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["pass"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["pass"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["pass"]);
         $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
           header('Location:intex.php');}
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>

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

  <!-- Favicons -->

  <!-- Vendor CSS Files -->
<!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The social media icon bar -->


  <!-- Template Main CSS File -->

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

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

<body> 
        

  

  <!-- ======= Top Bar ======= -->


  
        <!-- Load font awesome icons -->

<!-- The social media icon bar -->
                    <a class="navbar-brand smoothie" href="addU.php"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="><img src="" alt="" class="img-fluid" ><a href="addU.php">coup de chef</h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../home.php">Home</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
          <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4" >Se connecter </h1>
                                </div>
                                
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email" >email:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="email" id="password" placeholder="Entrer l'email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password"  >Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>
                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer"> 
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="reset" value="Annuler" >
                                                </td>
                                            </tr>
                    

                                        </table>
                                    </form>
                                    <div> <a href="adduser.php">j'ai pas de compte  </a> </div>
                                    
                                    <div> <a href="mdpoublier.php">Mot De Passe oublié ? </a> </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>

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

            
    <footer id="footer">
        <div class="footer-top">
              <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              ESPRIT <br>
              Ariana sghira, 2080<br>
              Tunisia <br><br>
              <strong>Phone:</strong> +216 94 366 666<br>
              <strong>Email:</strong> CoupDeChef.tn@esprit.tn<br>
            </p>
            </div>
            <div class="col-lg-2 col-md-6 footer-links">
         
          </div>
          </div>
        </div>
        <div class="container d-md-flex py-4">
          <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span> Coup de chef</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          </div>
          </div>
         
        </footer>
        <!-- End Footer -->
        <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <!-- Vendor JS Files -->
      
    </body>
</html>
