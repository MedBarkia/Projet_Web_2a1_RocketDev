<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> 
    <title>Mail Coup de chef </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
         <div class="logo"><a href="" class="simple-text logo-normal">
         COUP DE CHEF
        </a></div>
         <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./index.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherUtilisateurs.php">
              <i class="material-icons">person</i>
              <p>Utilisateurs</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="afficherLivreur.php">
              <i class="material-icons">person</i>
              <p>Livreurs</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="afficherAdmin.php">
              <i class="material-icons">person</i>
              <p>Administrateurs</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="afficherReclamation.php">
              <i class="material-icons">report</i>
              <p>Reclamations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherChef.php">
              <i class="material-icons">person_pin</i>
              <p>Chefs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="afficherRecettes.php">
              <i class="material-icons">receipt</i>
              <p>Recettes</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="ajouterproduit.php">
              <i class="material-icons">shopping_basket</i>
              <p>Produits</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="ajoutercategorie.php">
              <i class="material-icons">chrome_reader_mode</i>
              <p>categories</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="afficheravis.php">
              <i class="material-icons"> rate_review</i>
              <p>avis</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="elaa.php">
              <i class="material-icons">bubble_chart</i>
              <p>Commandes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="table.php">
              <i class="material-icons">restaurant</i>
              <p>Restaurants</p>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="./tablecom.php">
              <i class="material-icons">insert_comment</i>
              <p>Commentaires</p>
            </a>
          </li> 
        </ul>
      </div>
     </div>
     <div class="main-panel">
  <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Send Email</h5>
                    <form action="email.php" method="post" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="muhamedbarkia@gmail.com" readonly required autofocus>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" value="muhamedbarkia@gmail.com" required autofocus>
                        </div> <br/>
                        <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div><br/>
                        <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control"  required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendMailBtn" class="btn  btn-primary btn-block text-uppercase" >Send Email</button>
                        <button type="submit" action="afficherReclamatiob.php" class="btn btn-primary btn-block text-uppercase" >Annuler</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>
