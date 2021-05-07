<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(!isset($_SESSION["e"])){
    var_dump($_SESSION);
    // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: connexion.php');
   }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Utilisateur</title>
        <link rel="stylesheet" type="text/css" href="../css/cn.css">

</head>
<body>
<button><a href="deconnexion.php">Déconnecter</a></button>
<hr>
<?php
// Il est bien connecté
echo 'Bienvenue  ', $_SESSION['e'];

?>
</body>
</html>