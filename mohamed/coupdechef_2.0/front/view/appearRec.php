<?PHP
include_once "../controller/reclamationC.php";
include_once "../model/reclamation.php";

$servername="localhost";
$username="root";
$password="";
$dbname="coupdechef";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$q="SELECT * FROM typerec";
$listetype=mysqli_query($conn,$q);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../assets/img/ico/apple-touch-icon-57x57.png">
    <style>
        h2{
            
            text-align: center;
            font-family: Verdana;
            position: absolute;
            top: -18%;
            left: 18%;
        }
    </style>
    <title>Coup de Chef</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/pe-icons.css" rel="stylesheet">
    <script src="ctrls.js"></script>
</head>
<body>
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="../assets/img/bg/bg1.jpg" data-speed="0.8">
    <div class="section-inner" >
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row"  >
                        <div  class="col-md-12  btn-red mt10 pull-right" id="erreur"></div>
                        <h2 class="section-heading"> <span class="theme-accent-color">Type  Your  Reclamation</span></h2>
                    
                        <form  method="POST" action="ajoutReclamation.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                            <input type="text" class="form-control col-md-4" name="nom" placeholder="Your  Name " id="nom"  required>
                            <input type="email" class="form-control col-md-4" name="email" placeholder="Your  Email " id="email" required >
                            <select name="type" id="type" class="form-control btn btn-primary  col-md-4">
                            <option value="Select"></option>
                                <?php while ($row = mysqli_fetch_array($listetype)): ?>
                                        <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                        <?php endwhile ?>
                                </select>
                            <textarea name="description" class="form-control" id="description" placeholder="Your  Message " required></textarea>
                            <input class="btn btn-primary btn-red mt30 pull-right"  type="submit"  value="send" onclick="verif();" >
                            <p class="mt8" align="left"><a href="home.php" class="btn btn-primary btn-red mt30 pull-left page-scroll"><i class="fa fa-long-arrow-left"></i></a></p>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
</section>
</body>

</html>