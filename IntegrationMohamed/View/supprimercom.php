<?php
include "../controller/commentaireC.php";
$db = config::getConnexion();
$id=$_POST['id'];
$num=$_POST['num'];
$idclient= $_POST['idclient'];
$sql = "DELETE FROM commentaiire WHERE id= '$id' ";
$req = $db->prepare($sql);
$req->execute();												
//header("Location:commentairerestau.php");          
$commentaireC=new commentaireC();
//header("Location:commentairerestau.php");   
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
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
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