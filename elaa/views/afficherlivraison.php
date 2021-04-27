
<?PHP
    include "../controller/livraisonc.php";

    $livraisonc=new livraisonc();
    $listelivraison=$livraisonc->afficherlivraison();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste livraison </title>
    </head>
    <body>

        <button><a href="Ajoutproduit.php">Ajouter un produit</a></button>
        <hr>
        <table border=1 align = 'center'>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>adresse</th>
                <th>total</th>
                <th>date</th>
                <th>etat</th>
                <th>livreur</th>
                <th>supprimer</th>
                <th>modifier</th>
            </tr>

            <?PHP
                foreach($listelivraison as $livraison){
            ?>
                <tr>
                    <td><?PHP echo $livraison['id']; ?></td>
                    <td><?PHP echo $livraison['nom']; ?></td>
                    <td><?PHP echo $livraison['adresse']; ?></td>
                    <td><?PHP echo $livraison['total']; ?></td>
                    <td><?PHP echo $livraison['date']; ?></td>
                    <td><?PHP echo $livraison['etat']; ?></td>
                    <td><?PHP echo $livraison['livreur']; ?></td>
                    <td>
                        <form method="POST" action="supprimerlivraison.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $livraison['id']; ?> name="id">
                        </form>
                    </td>
                    <td>
                        <a href="modifierlivraison.php?id=<?PHP echo $livraison['id']; ?>"> Modifier </a>
                    </td>
                </tr>
            <?PHP
                }
            ?>
        </table>
    </body>
</html>