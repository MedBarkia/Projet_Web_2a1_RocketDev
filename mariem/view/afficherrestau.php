<?PHP
    include "../controller/restauC.php";

    $restauC=new restauC();
    $listerestau=$restauC->afficherproduit();

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste restaurants </title>
    </head>
    <body>
        

        <button><a href="Ajouterrestau.php">Ajouter un restaurant</a></button>
        <hr>
        <table border=1 align = 'center'>
            <tr>
                <th>num</th>
                <th>nom</th>
                <th>adresse</th>
                <th>telephone</th>
                <th>horaire</th>
                <th>photo</th>
                <th>supprimer</th>
                <th>modifier</th>
            </tr>

            <?PHP
                foreach($listerestau as $restau){
            ?>
                <tr>
                    <td><?PHP echo $restau['num']; ?></td>
                    <td><?PHP echo $restau['nom']; ?></td>
                    <td><?PHP echo $restau['adresse']; ?></td>
                    <td><?PHP echo $restau['telephone']; ?></td>
                    <td><?PHP echo $restau['horaire']; ?></td>
                    <td><img src="image/<?PHP echo $restau['photo']; ?>"></td>
                    <td>
                        <form method="POST" action="supprimerrestau.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $restau['num']; ?> name="num">
                        </form>
                    </td>
                    <td>
                        <a href="modifierrestau.php?id=<?PHP echo $restau['num']; ?>"> Modifier </a>
                    </td>
                </tr>
            <?PHP
                }
            ?>
        </table>
    </body>
</html>
