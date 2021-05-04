<?PHP
    include "../controller/comment.php";
    include "../controller/rest.php";
    $num=$_POST['num'];
    $comment=new comment();
    $listecomm=$comment->affichercommentaire($num);
    $rest=new rest();
    $listerestau=$rest->afficherproduit1($num);

?>


<html>
   
    <body>
        

        
        <hr>
        <form action="" method="post">
        <table >
            <tr>
                <br>
            
            </tr>

            <?PHP
                foreach($listecomm as $commentaire){
                    foreach($listerestau as $restau){
                        if( $restau['num'] == $commentaire['num']){
            ?>
                <tr>
                    <td><img src="image/<?PHP echo $restau['photo']; ?>" width="200" height="200"></td>
                   
                    
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
                        <input type="submit"   name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $commentaire['id']; ?> name="id">
                        </form></td>
                </tr>
                
             <?PHP
                
        }



?>
                <?PHP
                
            }
        }
    }
        



?>


        </table>
        </form>
    </body>
</html>
