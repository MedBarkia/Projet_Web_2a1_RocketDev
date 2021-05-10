
<?PHP
    include "../controller/commentaireC.php";
   
    $commentaireC=new commentaireC();
    $listecomm=$commentaireC->affichernotif1();
 
    
    

    
?>
<!DOCTYPE html>
<html lang="en">


					<table>	
						<?PHP
						foreach($listecomm as $commentaire){
											
														
						?>

                      
						<tr>			
                     <td> <?PHP echo $commentaire['prenom']; ?>	<td>	
                     <td> <a>a aime le restaurant</td>
                     <td> <?PHP echo $commentaire['nom']; ?></td></tr>				
                      
                     
                                         			
                                
										

                                        
                                       
                                        <?PHP
                                                }

                                        ?>
                                        
                                        </table>	                      
                                        
                                       
</html>