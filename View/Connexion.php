<?php
    require('../config.php');

                  session_start();

    if (isset($_POST['email'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM utilisateur WHERE email='" . $email . "' && pass = '". $pass."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){

                $user=$query->fetch(); 
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $user['id'];
                header('Location:intex.php');
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
   
  
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


  <!-- Template Main CSS File -->

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body> 
        <button><a href="connexionAd.php">Espace Administration</a></button>
        <button><a href="connexionLivreur.php">Espace Livreurs</a></button>

  

  <!-- ======= Top Bar ======= -->


  
        <!-- Load font awesome icons -->

<!-- The social media icon bar -->
                    <a class="navbar-brand smoothie" href="addU.php"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"><a href="../addU.php">coup de chef</h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../home.php">Home</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
        <section></section>
          <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">Se connecter </h1>
                                </div>
                                
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">email:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="email" id="password" placeholder="Entrer l'email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password">Mot de passe:</label>
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



            
    <footer id="footer">
        <div class="footer-top">
              <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Coup De Chef</h3>
            <p>
              ESPRIT <br>
              Ariana sghira, 2080<br>
              Tunisia <br><br>
              <strong>Phone:</strong> +216 94 366 666<br>
              <strong>Email:</strong> CoupDeChef.tn@esprit.tn<br>
            </p>
            </div>
            <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="../home.php">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="developement_p.html">Development Personelle</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="forum.php">Blog</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
            </div>
            <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join As </h4>
            <p>********************</p>
            <form  method="post" action="subscribe.php">
                <input  require type="email" name="subscribe" placeholder="Entrez votre adresse mail ici..."/>
                <button type="submit">S'abonner</button>
            </form>
            </div>
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
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
        </footer>
        <!-- End Footer -->
        <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <!-- Vendor JS Files -->
      
    </body>
</html>
