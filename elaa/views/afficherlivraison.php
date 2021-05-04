
<?PHP
    include "../controller/commandec.php";

    $commandec=new commandec();
    $listecommande=$commandec->affichercommande();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste commandes </title>
    </head>
    <body>

        <button><a href="Ajoutcommande.php">Ajouter une commande</a></button>
        <hr>

                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher" title="Type in a name" >
        

        <table border=1 align = 'center'id="dataTable">
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
                foreach($listecommande as $commande){
            ?>
                <tr>
                    <td><?PHP echo $commande['id']; ?></td>
                    <td><?PHP echo $commande['nom']; ?></td>
                    <td><?PHP echo $commande['adresse']; ?></td>
                    <td><?PHP echo $commande['total']; ?></td>
                    <td><?PHP echo $commande['date']; ?></td>
                    <td><?PHP echo $commande['etat']; ?></td>
                    <td><?PHP echo $commande['livreur']; ?></td>
                    <td>
                        <form method="POST" action="supprimercommande.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $commande['id']; ?> name="id">
                        </form>
                    </td>
                    <td>
                        <a href="modifiercommande.php?id=<?PHP echo $commande['id']; ?>"> Modifier </a>
                    </td>
                </tr>
            <?PHP
                }
            ?>
        </table>
        <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
    </body>
</html>