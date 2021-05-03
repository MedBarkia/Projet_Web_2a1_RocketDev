<?php 
include "../controller/produitC.php";


 $produitC=new produitC();

$liste=$produitC->afficherproduit(); 


?>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../asset/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../asset/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../asset/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../asset/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../asset/img/ico/apple-touch-icon-57x57.png">
</head>

 <tbody  id="myTable">
    
    <?PHP

foreach($liste as $row){

  ?>
    <tr>
       <td><img style="
    width: 50px;
" src="<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['nom'] ?></td>
    

 
 <td> <form method="POST" action="afficherproduit.php">



                                  
  <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> </button>
    <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">       

    
  </form>

     </td>
  
    
    </tr>
                  <?PHP
                  
}
?>
  
  </tbody>
</table>
</html>