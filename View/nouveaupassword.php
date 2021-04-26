<?php

    require('../config.php');
    session_start();

    if (isset($_POST['pass'])){
        $email=$_SESSION['email'] ;
        $pass=$_POST['pass'];
        if($_POST['confpassword']==$pass){
            $sql="UPDATE utilisateur SET pass= '" . $pass . "' WHERE email='" . $email . "'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                header("Location: connexion.php");
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        else {
                echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                echo 'Verifier votre mot de passe ';}
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

 </header><!-- End Header -->
        <section></section>
     
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">Nouveau mot de passe</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                        
                                                <td>
                                                    <label class="small mb-1" for="pass">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="confpassword">Verifier Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="confpassword" id="confpassword" placeholder="Confirmer le mot de passe">
                                                </td>
                                            </tr>
                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer" > 
                                                   

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
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
    </body>
</html>



