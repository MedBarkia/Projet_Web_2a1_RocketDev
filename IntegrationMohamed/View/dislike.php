<?php
     session_start();
	 include "../controller/comment.php";
	 include "../controller/rest.php";
 
 // On teste si la variable de session existe et contient une valeur
	if(!isset($_SESSION["e"])){
	 var_dump($_SESSION);
	 // Si inexistante ou nulle, on redirige vers le formulaire de login
   header('Location: connexion.php');
	}
    $db = config::getConnexion();
    $idclient=$_POST['idclient'];
    $num=$_POST['num'];
    $sql = "DELETE FROM liike WHERE liike.idclient= '$idclient' AND liike.num= '$num' ";
    $req = $db->prepare($sql);
    $req->execute();
    $comment=new comment();
    $listecomm=$comment->affichercommentairee($num);
    $listec=$comment->affichercommentairee($num);
    
    $rest=new rest();
    $listerestau=$rest->afficherproduit1($num);
    
    
   										  
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				
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
													<td><img src="image/<?PHP echo $restau['photo']; ?>" width="700" height="200">
													<?php
													$rest=new rest();
													$listerestau=$rest->afficheelike($num);
													?>

												</td>
												    
													
												</tr>
                                                

												
												

												<?PHP
												foreach($listecomm as $commentaire){
											
														
											?>


												<tr>
												<td>
												<h4>	<?PHP echo $commentaire['nom']; ?>
												<?PHP echo $commentaire['prenom']; ?> 
												<h6><?PHP echo $commentaire['commentaire']; ?></h6>
												</h4>

												</td>
											
												
												</tr>
												<tr>
												<td>
												
											    <td>
												  
													
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
