<?PHP
    session_start();
    include_once '../model/commentaire.php';
    include "../controller/commentaireC.php";
	if(!isset($_SESSION["e"])){
		var_dump($_SESSION);
		// Si inexistante ou nulle, on redirige vers le formulaire de login
	  header('Location: connexion.php');
	   }
    
$num=$_POST['num'];
$idclient=$_POST['idclient'];
$commentaire=$_POST['commentaire'];
$commentaireC=new commentaireC();
$commentaireC->ajoutercomm($num,$idclient,$commentaire);
$listerestau=$commentaireC->afficherproduit1($num);
$listecomm=$commentaireC->affichercommentaire($num,$idclient);
$listecommm=$commentaireC->afficherclient($idclient);
        
        
   



?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>coup de chef - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">

				</a>
				
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
    <br>
    <br>
    <br>
	<div >
		<div class="container text-center">
			
		</div>
	</div>
    <div class="container">

                    <div class="row">
                        <div class="col-md-6 wow fadeIn">
                            <h2 class="mb50"><span class="heading-font text-uppercase"></span></h2>
                        
                            <div class="food-menu-item">
                                <div class="row">
                                    <div class="col-xs-9">
                                   
											<table >
											<tr>
												<br>
											
											</tr>

											<?PHP
												foreach($listecomm as $commentaire){
													foreach($listerestau as $restau){
														
														//if( $restau['num'] == $commentaire['num']){
											?>
												<tr>
													<tr><img src="image/<?PHP echo $restau['photo']; ?>" width="700" height="200"></tr>
													<tr>

											         	<form method="POST" action="action.php">
														<input  class="btn btn-common"  type="submit"   name="like" value="j'aime">
														<input type="hidden" value=<?PHP echo $commentaire['idclient']; ?> name="idclient">
														<input type="hidden" value=<?PHP echo $commentaire['num']; ?> name="num">
														<input type="hidden" value=<?PHP echo $restau['num']; ?> name="num">
														</form>
														
														</tr>
													<?php
													//$commenta=new commentaireC();
													//$listerestau=$rest->afficheelike($num);
													?>
												
												    <td>
													
													</td>
													
												</tr>
												<?PHP
												foreach($listecommm as $like){
											
														
											?>	<tr>
										            	
											</tr>
											<?PHP
                                                }

                                        ?>

												<?PHP
												foreach($listecommm as $utilisateur){
											
														
											?>	
												<tr>
												<td><?PHP echo $utilisateur['nom']; ?>
												<?PHP echo $utilisateur['prenom']; ?></td>
												</tr>
												<?PHP
                                                }

                                        ?>

												<?PHP
												foreach($listecomm as $commentaire){
														
											?>


												<tr>
												<td><?PHP echo $commentaire['commentaire']; ?></td>
												</tr>
												
												<td>
											
												<form method="POST" action="supprimercom.php">
														<input  class="btn btn-common"  type="submit"  name="supprimer" value="supprimer">
														<input type="hidden" value=<?PHP echo $commentaire['id']; ?> name="id">
														<input type="hidden" value=<?PHP echo $commentaire['idclient']; ?> name="idclient">
														<input type="hidden" value=<?PHP echo $commentaire['num']; ?> name="num">
														</form></td>
											
											    <td>
												  
													<form method="POST" action="modifiercom.php">
													<input  class="btn btn-common"  type="submit" name="modifier" value="modifier" >
													<input type="hidden" value=<?PHP echo $commentaire['id']; ?> name="id">
													<input type="hidden" value=<?PHP echo $commentaire['idclient']; ?> name="idclient">
													<input type="hidden" value=<?PHP echo $commentaire['num']; ?> name="num">
													<input type="hidden" value=<?PHP echo $commentaire['commentaire']; ?> name="commentaire">
												    </form>
												</td>
													
                                            </tr>
											
											
											
                                
											

                                        
                                       
                                        <?PHP
                                                }

                                        ?>
										   <?PHP
														
													}
												//}
											}
												



										?>
                                       
                                        </table>
										<form method="POST" action="commentairerestau.php">
														<input  class="btn btn-common"  type="submit"   name="like" value="retour a la liste des restaurants">
												
                                                   </form>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                           
    <br>
	<br>
	<br>
	<br>
	<br>
	<!-- End Reservation -->
	
	
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="white-wrapper">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                        <span class="mb30">Designed     by     RocketDev  </span>
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>