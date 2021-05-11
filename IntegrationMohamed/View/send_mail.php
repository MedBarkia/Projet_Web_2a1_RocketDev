<?php
class config {
	private static $instance = NULL;
  
	public static function getConnexion() {
	   //self fonction/ variable static:self::$
		// public private ... $this->
	  if (!isset(self::$instance)) {
	try{
	//Php Data Object:relation avec objet et bd
		self::$instance = new PDO('mysql:host=localhost;dbname=test2',
			'root', '');
		//pour afficher les erreurs
	self::$instance->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
			die('Erreur: '.$e->getMessage());
	}
	  }
	  return self::$instance;
	}
  }
  class userc{
    function recupereruser($nom){
        $sql="SELECT * from utilisateur where nom like '%" .$nom. "%' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


  }
}
$user=new userc();
$liste=$user->recupereruser($_POST['nom']);
foreach($liste as $row){

    $email=$row['email'];


}
$mailto = $email;
$mailSub = 'commande';
$mailMsg = 'votre commande a été effectué avec succés un livreur va vous contacter';
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "elaa.boulifi@esprit.tn";
$mail->Password = "B.A.h7n6..";
$mail->SetFrom("elaa.boulifi@esprit.tn");
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent to ";
} else {
    header('Location: elaa.php');
}
?>





   

