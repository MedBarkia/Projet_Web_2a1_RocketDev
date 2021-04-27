<?PHP
	include "../controller/avisC.php";

	$avisC=new avisC();
	$listeavis=$avisC->afficheravis();

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
    <link href="../pdo/css/avis.css" rel="stylesheet">

</head>
<tbody  id="myTable">
    
    <?PHP

foreach($listeavis as $row){

  ?>
    <tr>
    
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['rate'] ?></td>

     


 
 <td> <form method="POST" action="afficheravis.php">



                                  
  <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> </button>
    <input type="hidden" value="<?PHP echo $row['name']; ?>" name="name">       

    
  </form>

     </td>
  
    
    </tr>
                  <?PHP
                  
}
?>
  
  </tbody>
</table>
</html>