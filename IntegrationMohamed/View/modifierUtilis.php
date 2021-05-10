<?php
session_start();

include_once "../controller/UtilisateurC.php";
  include_once '../Model/Utilisateur.php';
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
    // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexion.php');
   }
    $UtilisateurC = new UtilisateurC();
    $error = "";
  if (
    isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
  ){
    if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["pass"])
        ) {
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['pass']
      );
      
            $UtilisateurC->modifierUtilisateur($user, $_GET['id']);
        }
        
        else
            $error = "Missing information";
  }


?>

<?php
    if(!isset($_SESSION["id"])){
    var_dump($_SESSION);
        exit(); 
    }
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

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

      <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
      
    <style>
        body{
        padding:10% 3% 10% 3%;
        text-align:center;
        }
        img{
            height:140px;
                width:140px; 
        }
               .mode {
            float:right;
        }
        .change {
            cursor: pointer;
            border: 1px solid #555;
            border-radius: 40%;
            width: 20px;
            text-align: center;
            padding: 5px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }
    </style>
    </head>

<body>

  <!-- ======= Top Bar ======= -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The social media icon bar -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
<div class="container d-flex align-items-center">
                    <a class="navbar-brand smoothie" href="intex.php"> <span class="theme-accent-color">COUP</span> DE <span class="theme-accent-color">CHEF</span></a>

    <a href="modifierUtilis.php?id=<?PHP echo $_SESSION['id']; ?>" class="appointment-btn scrollto"> Modifier </a>
    <a href="deconnexion.php" class="appointment-btn scrollto">Déconnexion</a>
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
    <link href="style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

  </header><!-- End Header -->
        <?php
            if (isset($_GET['id'])){
                $user = $UtilisateurC->recupererUtilisateur1($_GET['id']);  
        ?>
            <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4 " >Modifier mon profil</h1>
                                </div>
                                <div class="card-body">
                                    <form   name="formUtilisateur" action="" method="POST"  onsubmit=" return verifUtilisateur();">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label for="nom" >Nom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user->nom; ?>">
                                                                <div style=" color: red;" id="erreurNom"></div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label  for="prenom" ;>Prénom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user->prenom; ?>">
                                                                            <div style=" color: red;" id="erreurPrenom"></div>

                                                </td>
                                            </tr>

                                            

                                          
                                            
                                            <tr>
                                                <td>
                                                    <label  for="email" >Adresse mail:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn|.+@yahoo.fr|.+yahoo.com" value = "<?php echo $user->email; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label  for="login" >Login:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="login" id="login" value = "<?php echo $user->login; ?>">
                                                     <div style=" color: red;" id="erreurlogin"></div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label  for="pass" >Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="pass" id="pass" value = "<?php echo $user->pass; ?>">
                                    <div style=" color: red;" id="erreurpass"></div>

                                                </td>
                                            </tr>
                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="submit" value="modifier"> 
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
                                      <script src="script.js"></script>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="mode">
        Dark mode:             
        <span class="change">OFF</span>
    </div>
      
  
      
    <script>
        $( ".change" ).on("click", function() {
            if( $( "body" ).hasClass( "dark" )) {
                $( "body" ).removeClass( "dark" );
                $( ".change" ).text( "OFF" );
            } else {
                $( "body" ).addClass( "dark" );
                $( ".change" ).text( "ON" );
            }
        });
    </script>
        <?php
        }
        ?>
        
  
    </body>
</html>
