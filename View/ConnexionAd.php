<?php
require('../config.php');
session_start();

if (isset($_POST['email'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM administrateur WHERE email='" . $email . "' && pass = '". $pass ."'";
                $db = config::getConnexion();
                try{
                        $query=$db->prepare($sql);
                        $query->execute();
                        $count=$query->rowCount();
                        if($count==1){
                            $user=$query->fetch(); 
                            $_SESSION['id'] = $user['id'];
                            header('Location:afficherUtilisateurs.php');
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

    <body >
        <button><a href="connexion.php">Espace Utilisateur</a></button>
        <button><a href="connexionLivreur.php">Espace Livreurs</a></button>

        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Espace Administration </h4>
                                     <h1> se connecter </h1>

                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">email:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="email" id="password" placeholder=" l'email de l administrateur"pattern=".+@CoupDeChef.tn">
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
									
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
    </body>
</html>           
