<?php
    require "../Controller/RecetteC.php";
    $controller = new RecetteController();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../coup de chef/assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../coup de chef/assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../coup de chef/assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../coup de chef/assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../coup de chef/assets/img/ico/apple-touch-icon-57x57.png">

    <title>Coup de Chef</title>

    <!-- Bootstrap Core CSS -->
    <link href="../coup de chef/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../coup de chef/assets/css/animate.css" rel="stylesheet">
    <link href="../coup de chef/assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../coup de chef/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../coup de chef/assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../coup de chef/assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="regular-navigation">


    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="../coup de chef/assets/img/loading.GIF" alt="loading" /></span>
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
                    <a class="navbar-brand smoothie" href="index.html"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">About Us</a></li>  
                        <li><a href="#the-menu" class="page-scroll">Ordre</a></li>   
                        <li><a href="addU.php" class="page-scroll">Produits</a></li>
                        <li><a href="addU.php" class="page-scroll">Chefs</a></li>
                        <li><a href="appearRec.php" class="page-scroll">Reclamation</a></li> 
                        <li><a href="commentairerestau.php" class="page-scroll">restaurants</a></li> 
                        <li><a href="#messagee" class="page-scroll">Contact US</a></li>               
                        <li class="dropdown">
                            <a href="connexion.php" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Se Connecter <span class="pe-7s-angle-down"></span></a>
                        </li>
                        <li><a href="#search"><i class="fa fa-search"></i></a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->         

            </div>
            <!-- /.container-fluid -->
        </nav>
        <br>
        <br>
        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched">
            <div class="container-fluid ">
                <div class="vertical-center row">
                    <div class="col-sm-1 pull-left text-center slider-control match-height">
                        <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft" data-wow-delay="0.8s"><i class="fa fa-long-arrow-left"></i></a>
                    </div>
                    <div class="intro-text text-center smoothie col-sm-10 match-height">                    
                        <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="../coup de chef/assets/img/recette.png" height="210" width="320"></div>              
                    </div>
                    <div class="col-sm-1 pull-right text-center slider-control match-height">
                        <a href="#" class="next-bs-slide vertical-center wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="top-border-me">
                <div class="container">
                    <div class="row">
                        <div class=" text-center mb50">
                         <h2> <span class="theme-accent-color">LES RECETTES DU CHEF</span></h2>                    
                        </div>
                       <div class="row text-center" >
                        <?php
                            echo $controller->photoChef();
                        ?>
                        </div>
                    </div>
                </div>   
                    <ul>
                        <?php
                            echo $controller->triNbrPers();
                        ?>
                    </ul>

            </div>
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

    </div>

    <script src="../coup de chef/assets/js/jquery.js"></script>
    <script src="../coup de chef/assets/js/bootstrap.min.js"></script>
    <script src="../coup de chef/assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../coup de chef/assets/js/init.js"></script>

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
          "../coup de chef/assets/img/bg/bg1.jpg",
          "../coup de chef/assets/img/bg/bg2.jpg",
          "../coup de chef/assets/img/bg/bg3.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>

</body>

</html>
