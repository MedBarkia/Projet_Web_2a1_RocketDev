
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficherrestau.php">Retour à la liste</a></button>
<hr>

<form action="update.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="num"> num</label>
            </td>
            <td>
            <input type="text" id="num" name="num"placeholder="numero">
            </td>
            </tr>
    
            <tr>
                <td>
                    <label for="nom">nom</label>
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom"placeholder="nom">
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
                <label for="telephone"> telephone</label>
            </td>
            <td>
            <input type="text" id="telephone" name="telephone" placeholder="telephone">
            </td>
                   
            </tr>
            
            <tr>
                <td>
                    <label for="horaire">horaire</label>
                    </td>
                    <td>
                    <input type="time" id="horaire" name="horaire" min="9:00" max ="00.00" required>
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