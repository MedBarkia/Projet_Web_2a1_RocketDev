<?PHP
session_start();
    include "../controller/restauC.php";
	if(!isset($_SESSION["e"])){
		var_dump($_SESSION);
		// Si inexistante ou nulle, on redirige vers le formulaire de login
	  header('Location: commentaireee.php');
	  
	   }
    $restauC=new restauC();
    $listerestau=$restauC->afficherproduit();
	$user= $restauC->recupererid();  

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
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>meilleur restaurant</h1>
				</div>
			</div>
		</div>
	</div>
    <div class="container">
	
                    
                        <div class="col-md-6 wow fadeIn">
                            <h2 class="mb50"><span class="heading-font text-uppercase"></span></h2>
                        
                            <div class="food-menu-item">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <table >
										
                                            
                                                                                    
                                            
                                            

                                        <?PHP
                                            foreach($listerestau as $restau){
                                        ?>
										 
									
										<div class="col-md-8 mr-auto ml-auto text-center">
											<div id="reviews" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner mt-4">
													<div class="carousel-item text-center active">
										             
														<div class="container-fluid">
														<div class="tz-gallery">
														<a class="lightbox" href="">
														
															<img src="image/<?PHP echo $restau['photo']; ?>" width="1600" height="300">
														</div>
														<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"> <?PHP echo $restau['nom']; ?></strong></h5>
																		
															<form method="POST" action="affichercom.php">
															<input  class="btn btn-common"  type="submit" name="commenter" value="afficher les commentaire">
															<input type="hidden" value=<?PHP echo $restau['num']; ?> name="num">
														</form>
														<form method="POST" action="#formulairee">
															<input  class="btn btn-common" type="submit" name="commenter" value="commenter" >
															<input type="hidden" value=<?PHP echo $restau['num']; ?> name="num">
															<input type="hidden" value="<?php echo $user->id; ?>" name="id">

														</form>
													
												<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
													<i class="fa fa-angle-left" aria-hidden="true"></i>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<span class="sr-only">Next</span>
												</a>
											</div>
										</div>
	
                                            <tr>
                                             <th>
                                            
                                             </th>
                                              
                                               
                                            </tr>
                                            <tr>
                                               
                                                
                                            </tr>
											<tr>
											
											
											
										    </tr>
											<tr>
											
												
                                             
											</tr>
											<tr>
											<td>
 
											
											</td>
											</tr>
											
											
											<tr>
											<td>
 
											
					                         </td>
											</tr>

                                        
                                       
                                        <?PHP
                                                }
                                        ?>
										
                                       
                                        </table>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
						  
    <div class="reservation-box">
		<div class="container">
		
			<div class="row">
				<div class="col-lg-12">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form action="ajoutercom.php" method="POST"  onsubmit="return valider()" name="MonForm" id="formulairee">
							<div class="row">
					          		<h3>ajouter votre commentaire</h3>
									<div class="col-md-12">
										<div class="form-group">

											<input type="text" class="form-control" id="num" name="num" value=<?PHP echo $_POST['num']; ?> readonly>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
										<input type="text" class="form-control" id="idclient" name="idclient" placeholder="entrer votre id">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
												
									<div class="help-block with-errors"></div>
									</div>                                 
									</div>
									

                                    <div class="col-md-12">
										<div class="form-group">
                                        <textarea name="commentaire" class="form-control" id="commentaire" placeholder="votre commentaire" ></textarea>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
                           
						
						
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit" >envoyer</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
								
							</div>  
							<SCRIPT LANGUAGE="JavaScript">
    function valider() 
{
    var InputText=window.document.MonForm.id.value;
   
    var i=window.document.MonForm.num.value;
    var j=window.document.MonForm.idclient.value;
    var a=window.document.MonForm.commentaire.value;
    if((InputText=="") || (i=="")  || (a=="") || (j=="")){
        alert ("verifier les champs");
        return false; 
    
    }

    else return true;
  
}

</SCRIPT>  
    
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Reservation -->
	
	
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	        <footer class="white-wrapper">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                        <span class="mb30">Designed     by     RocketDev © ALL RIGHTS RESERVED </span>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div id="bottom-frame"></div>

        <a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

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