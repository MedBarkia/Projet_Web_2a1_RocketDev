<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficherlivraison.php">Retour à la liste</a></button>
<hr>

<form action="update.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="id"> id</label>
            </td>
            <td>
            <input type="text" id="id" name="id"placeholder="id">
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="nom">nom</label>
                    
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom" placeholder="nom">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="adresse">adresse</label>
                    
                    </td>
                    <td>
                        <input type="text" id="adresse" name="adresse" placeholder="adresse">
                    </td>
            </tr>
            <tr>
            <td>
                <label for="total"> total</label>
            </td>
            <td>
            <input type="text" id="total" name="total" placeholder="total">
            </td>
                   
            </tr>
            
            <tr>
                <td>
                    <label for="date">date</label>
                    </td>
                    <td>
                    <input type="date" id="date" name="date"  >
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="etat">etat</label>
                    
                    </td>
                    <td>
                        <input type="text" id="etat" name="etat" placeholder="etat">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="livreur">livreur</label>
                    
                    </td>
                    <td>
                        <input type="text" id="livreur" name="livreur" placeholder="livreur">
                    </td>
            </tr>
    
        <tr>
            <td>
                <input type="submit" value="modifier">

                
            </td>
            <td>
            <input type="reset" value ="quitter">
            </td>
        </tr>
    </table>
</form>
</body>
</html>