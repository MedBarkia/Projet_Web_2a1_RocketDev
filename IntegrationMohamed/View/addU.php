<?php
    require "../Controller/ChefC.php";
    include "../Controller/produitC.php";

    $produitC=new produitC();
    $controller = new ChefController();
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

</head>

<body id="page-top" class="regular-navigation">


    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading" /></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie" href="addU.php"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="deconnexion.php" class="page-scroll">Déconnexion</a></li>
                    </ul> 
                    <ul class="nav navbar-nav navbar-left">
                    <li><a href="#about" class="page-scroll">About Us</a></li> 
                        <li><a href="#the-menu" class="page-scroll">Ordre</a></li>   
                        <li><a href="#Produit" class="page-scroll">Produits</a></li>
                        <li><a href="#Book" class="page-scroll">Chefs</a></li> 
                        <li><a href="appearRec.php" class="page-scroll">Reclamation</a></li> 
                        <li><a href="commentairerestau.php" class="page-scroll">restaurants</a></li> 
                        <li><a href="signupForum.php" class="page-scroll">Aide</a></li>  
                        <li><a href="modifierUtilis.php" class="page-scroll">Paramètres généraux du compte</a></li>  
                        <li><a href="#search"><i class="fa fa-search"></i></a></li>   
                    </ul>
                </div>
                <!-- /.navbar-collapse -->         

            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight">
            <div class="container-fluid fullheight">
                <div class="vertical-center row">
                    <div class="col-sm-1 pull-left text-center slider-control match-height">
                        <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft" data-wow-delay="0.8s"><i class="fa fa-long-arrow-left"></i></a>
                    </div>
                    <div class="intro-text text-center smoothie col-sm-10 match-height">                    
                        <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="assets/img/intro-logo.png"></div>              
                    </div>
                    <div class="col-sm-1 pull-right text-center slider-control match-height">
                        <a href="#" class="next-bs-slide vertical-center wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="top-border-me">
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">                        
                            <h2 class="section-heading"><span class="theme-accent-color">BIENVENU</span></h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Très heureux de vous voir</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <h2 class="mb50">About <span class="theme-accent-color">Us</span></h2>
                                <p class="lead">Premier site de réservation en ligne des restaurants en Tunisie .</p>
                                <p class="lead">L’ahchat en ligne par livraison des produits  alimentaires et équipement culinaires.</p>
                            </div>

                            <div class="col-md-5">
                                <h2 class="mb50">Disponibilité  <span class="theme-accent-color">  ET  </span>  Objectifs</h2>
                                <p class="lead">7jr / 7 et 24h / 24 (Services et solutions adaptés aux besoins des Clients) </p>
                                <p class="lead">Encourager les gens à trouver les meilleures adresses  et les meileurs produits culinaires avec un prix raisonnable.</p>
                                <p class="lead">Profiter pleinement des offres de notre site.</p> 
                            </div>
                        </div>
                    </div>

                </div>

            </div>          

</section>
        <!--aaaaaaaaaaa-->
        <section id="Produit">
            <div class="section-inner">

                 <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Choisissez <span class="theme-accent-color">Vos</span> Produits</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Meilleurs équipements cuisines, produits alimentaires</h3>
                        </div>
                    </div>
                </div>
                
                <div class="container">

                    <?php
                        $liste=$produitC->afficherproduit(); 
                    ?>
                    <tbody  id="myTable">
                        
                        <?PHP
                            foreach($liste as $row){
                        ?>
                        <tr>
                            <td><img style="width: 200px;" src="<?php echo $row['image'] ?>"></td>
                            <td> <p class="lead"><B><?php echo $row['nom'] ?></td>
                            <td> <B><?php echo $row['prix'] ?> DT</B></p>
                            <button><a class="add addPanier" href="addpanier.php?idp=<?=$row['idp'] ?>"><B>Ajouter au Panier</B><i class="ti-shopping-cart"></i></a></button></td>
                            <td> <form method="POST" action="afficherproduit.php">
                                    <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">       
                                </form>
                            </td>
                        </tr>
                        <?PHP
                            }
                        ?>
                    </tbody>
                </div>
            </div>

</section>
       

               <section id="Book" class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="../coup de chef/assets/img/bg/bg4.jpg" data-speed="0.8">
            <div class="section-inner">
                 <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb30">
                            <h2 class="section-heading">Les <span class="theme-accent-color">Meilleurs</span> Chefs</h2>
                            <h3 class="section-subheading secondary-font">Dedié à l'excellence.</h3>
                            <h3></h3>
                        <p class="mt50"><a href="triDateChef.php" class="btn btn-red">Trier les chefs par date de naissance</a></p>
                        </div>
                    </div>
                </div>

                <div class="wow fadeIn" data-wow-delay="0.2s">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                    <?php
                                    echo $controller->afficherChefCarte();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg10.jpg" data-speed="0.8">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Our <span class="theme-accent-color">Clients</span> Satisfaits</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Satisfaction, toujours.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/mohamed.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Barkia Mohamed</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/elaa.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Boulifi Elaa</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/asma.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Oudherfi Asma</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/dorsaf.PNG" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Charfeddine Dorsaf</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/eya.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Bouthoury Eya</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/mariem.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Ben Khlifa Mariem</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg1.jpg" data-speed="0.8">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Type <span class="theme-accent-color">Your</span> Order</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mb100"> 
                        <!-- Address, Phone & Email -->
                        <div class="col-md-5 col-md-offset-1 wow fadeIn">
                            <h3 class="mb30">Addresse</h3>
                            <p class="lead">Toute la Tunisie</p>
                        </div>

                        <div class="col-md-5 col-sm-7 wow fadeIn">
                            <h3 class="mb30">Horaire</h3>
                            <div class="row">
                              <div class="col-xs-5">
                                <ul class="list-unstyled weekdays">
                                  <li>Monday</li>
                                  <li>Tuesday</li>
                                  <li>Wednesday</li>
                                  <li>Thursday</li>
                                  <li>Friday</li>
                                  <li>Saturday</li>
                                  <li>Sunday</li>
                                </ul>
                              </div>
                              <div id="messagee" class="col-xs-7">
                                <ul class="list-unstyled">
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                </ul>
                              </div>
                            </div>
                        </div>                
                    </div>
                    <div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><h3><span class="theme-accent-color"><B>Donner votre avis</B></span></h3></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a"> 
								<a class="dropdown-item" href="avis.php">Donner un avis</a>	
							</div>
					</div>
      
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div id="message" class="col-md-12"></div>
                                <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                                    <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                    <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                    <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section>
            <div id="mapwrapper"></div>  
        </section>

        <footer class="white-wrapper">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                        <span class="mb30">Designed     by     RocketDev  </span>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div id="bottom-frame"></div>

        <a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/img/bg/bg1.jpg",
          "assets/img/bg/bg2.jpg",
          "assets/img/bg/bg3.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>

</body>

</html>
