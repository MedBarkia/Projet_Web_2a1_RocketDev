<?PHP
    include "../controller/commentaireC.php";
    $num=$_POST['num'];
    $commentaireC=new commentaireC();
    $listecomm=$commentaireC->affichercommentaire($num);

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste restaurants </title>
    </head>
    <body>
        

        
        <hr>
        <form action="" method="post">
        <table >
            <tr>
                <th>commentaire</th>
            
            </tr>

            <?PHP
                foreach($listecomm as $commentaire){
            ?>
                <tr>
    
                    <td><?PHP echo $commentaire['commentaire']; ?></td>
                    
                </tr>
                <tr>
                <td>
                <form method="POST" action="supprimerr.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $commentaire['id']; ?> name="id">
                        </form></td>
                </tr>
            <?PHP
                }
            ?>
        </table>
        </form>
    </body>
</html>
