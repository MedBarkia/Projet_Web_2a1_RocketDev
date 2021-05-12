
<?php 
include "../Model/livreur.php";
include "../Controller/livreurC.php";
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../asset/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../asset/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../asset/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../asset/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../asset/img/ico/apple-touch-icon-57x57.png">

    <title>Coup de Chef</title>

    <!-- Bootstrap Core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/animate.css" rel="stylesheet">
    <link href="../asset/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../asset/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../asset/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../asset/css/pe-icons.css" rel="stylesheet">

</head>
<body id="page-top" class="regular-navigation">
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
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
                        <li><a href="#about" class="page-scroll">About Us</a></li>  
                        <li><a href="#the-menu" class="page-scroll">Ordre</a></li>   
                        <li><a href="#Produit" class="page-scroll">Produits</a></li>
                        <li><a href="#Book" class="page-scroll">Chefs</a></li> 
                        <li><a href="#messagee" class="page-scroll">Contact US</a></li>
                        <li class="dropdown">
                            <a href="#CATEGORIE" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"> CATEGORIE <span class="pe-7s-angle-down"></span></a>
                        </li>
               
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Se Conecter <span class="pe-7s-angle-down"></span></a>
                        </li>
                        <li><a href="#search"><i class="fa fa-search"></i></a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->         

            </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
	<ul class="nav-shop">
				  <?php include "../Model/panier_class.php";
						$panier=new panier();
						 //session_start(); 
						 if(isset($_SESSION['user'])):?>
					<li class="nav-item submenu dropdown">
						<h5 class="nav-link dropdown-toggle">items</h5>
					  <ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
						<li class="nav-item "><a class="nav-link" href="..\views\logout.php">Se deconnecter</a></li>
					  </ul>
								</li>
								
					<li class="nav-item"><button><a href="..\View\panier2.php"><i class="ti-shopping-cart"></i></a><span class="nav-shop__circle"><?php $nb=$panier->count(); $vnb=($nb)-0; echo $vnb; ?></span></button> </li>
                	<?php else: ?>
					<li class="nav-item"><button><a href="..\View\panier2.php"><i class="ti-shopping-cart"></i></a><span class="nav-shop__circle"><?php $nb=$panier->count(); $vnb=($nb)-0; echo $vnb; ?></span></button> </li>
					<li class="nav-item"><i class="ti-user"></i>&nbsp; &nbsp;<a href="..\View\login.php">Connectez-vous</a> ou <a href="..\views\register_views.php">Créez un compte</a></li>
					<?php endif; ?>
					</ul>
			</ul>
  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
                              <th scope="col">Actions</th>
                          </tr>
                      </thead>
                      <?php

                         $ids=array_keys($_SESSION['panier']);
                         if(empty($ids))
                         {
                             $produit=array();
                         }
                         else
                         {
                            $sql = "SELECT * FROM produit WHERE idp IN ('".implode("','", $ids)."')";
                            $db = config::getConnexion();
                            $produit= $db->query($sql);
                         }
                             
                      ?>
                      <tbody>
                            <?php 
                            
                            $total=0;
                             foreach ($produit as $produit):?>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="<?=$produit['image']?> " alt="">
                                      </div>
                                      <div class="media-body">
                                          <p><?=$produit['nom']?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5><?=$produit['prix'] ?></h5>
                              </td>
                              <td>
                                  <span><?=$_SESSION['panier'][$produit['idp']] ?></span>
                              </td>
                              <td>
                              <h5><?php $nb=$produit['prix']*$_SESSION['panier'][$produit['idp']]; $total+= $nb; echo $nb;?> TND</h5>
                              </td>
                              <td>
                                    <li><button><a href="panier2.php?delPanier=<?= $produit['idp'] ?>" class="del"><i class="ti-trash">DEL</i></a></button></li>
                              </td>
                                </td>
                              <td><a href="panier2.php?quantity=<?php echo $_SESSION['panier'][$produit['idp']]; ?>">
                    commander</a></td>
                          </tr>
                            <?php endforeach; ?> 
                          <tr>
                              <td>

                              </td>
                             
                            <td>
                                  <h5></h5>
                              </td>
                              <td>
                                  <h5>
                              </td>
                          </tr>
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="addU.php">Continuer vos achats </a>
                                      
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                    <form   method="POST" name="MonForm" action="ajoutcommande.php" onsubmit="return valider()">
                 
                             
                                    
                               
                        <?php
                       
$livreur1c=new livreurc();
                                $result2=$livreur1c->afficherlivreur();

                       ?>
                        <th>livreur</th>
          <td><select name="livreur" id ="select">
                        <?php
              foreach ($result2 as $row) {
              ?>
                <option value="<?PHP echo   $row['nom']; ?>"><?PHP echo $row['nom'] ?></option>
              <?PHP
              }
              ?>

            </select></td>
<br/>
<br/>
 <div class="form-group">
                 nom client <input class="form-control" name="nom" id="nom" type="text"  >
                 <span class="error" id="errornum"></span>
                </div>
                <div class="form-group">
                 adresse <input class="form-control" name="adresse" id="adresse"  type="adresse" placeholder="entrer adresse" >
                 <span class="error" id="erroradresse"></span>
                </div>
                <div class="form-group">
                  date <input class="form-control" name="date" id="date" type="date" >
                  <span class="error" id="errordate"></span>
                </div>
                <div class="form-group">
                 quantité <input class="form-control" name="total" id="total"  type="text" value="<?php echo $_GET['quantity']; ?>">
                 
                </div>  

                        

<input type="hidden" value="en cours" name="etat"  >

                            
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    </div></div>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->

  <SCRIPT LANGUAGE="JavaScript">
    function valider() 
{
    var InputText=window.document.MonForm.id.value;
   
    var i=window.document.MonForm.total.value;
    var j=window.document.MonForm.nom.value;
    var a=window.document.MonForm.adresse.value;
    var t=window.document.MonForm.date.value;
    if((InputText=="") || (j=="")) {
   //alert ("verifier les champs");
   document.getElementById('errornum').innerHTML="nom invalide";

   
        return false; 
    
    }
    else if (a=="") {
 
   document.getElementById('erroradresse').innerHTML="adresse invalide";


   
        return false; 
    
    }
    else if (t=="") {
 
 document.getElementById('errordate').innerHTML="date invalide";
 

 
      return false; 
  
  }


    else return true;
  
}
</SCRIPT>
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
    </body>
    </html>