<?php
    require "../controller/RecetteC.php";
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
    <link rel="stylesheet" type="text/css" href="print.css" media="print">


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
                        <li><a href="#Specials" class="page-scroll">Events</a></li>    
                        <li><a href="#the-menu" class="page-scroll">Ordre</a></li>   
                        <li><a href="#Produit" class="page-scroll">Produits</a></li>
                        <li><a href="afficherChefCarte.php" class="page-scroll">Chefs</a></li> 
                        <li><a href="#messagee" class="page-scroll">Contact US</a></li>               
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Se Conecter <span class="pe-7s-angle-down"></span></a>
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
        <header id="headerwrap" class="">
            <div class="container-fluid ">
                <div class="vertical-center row">
                    <div class="col-sm-1 pull-left text-center slider-control match-height">
                        <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft"><i class="fa fa-long-arrow-left"></i></a>
                    </div>
                    <div class="intro-text text-left smoothie col-sm-10 match-height">                    
                        <div class="intro-heading wow fadeIn heading-font"><img src="../coup de chef/assets/img/logo/cdf.png" height="210" width="320"></div>              
                    </div>
                    <div class="col-sm-1 pull-right text-center slider-control match-height">
                        <a href="#" class="next-bs-slide vertical-center wow fadeInRight"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" style="border:0; ">

                <div class="container">
                    <div class="row">

                        <div class=" text-center mb50">
                         <h2> <span class="theme-accent-color">Recette</span></h2>   
                        </div>
                        <div>
                            <button onclick="window.print();" class="btn btn-danger btn-lg" id="print-btn" style="float: right;">Imprimer</button>
                        </div>
                    </div>
                </div>   

                    <ul>
                        
                        <?php
                            echo $controller->imprimerRecette();
                        ?>
                    </ul>
            </div>
        </section>
        <br>
        <br>
        <footer class="white-wrapper">
            <div class="container-fluid">
                <div class="row text-center">
                    <span class="mb30"><h5> © RocketDev  </h5> </span>
                </div>
            </div>
        </footer>
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
        <div id="pageFooter"></div>

</body>

</html>
