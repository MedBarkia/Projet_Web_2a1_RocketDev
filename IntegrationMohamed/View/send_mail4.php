<?php
include_once '../Model/Utilisateur.php';
require_once '../config.php';

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
    session_start();
    require 'PHPMailer-master/PHPMailerAutoload.php';

if (isset($_POST['email'])){
            $email=$_POST['email'];
            $sql="SELECT * FROM utilisateur WHERE email='" . $email . "'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==1){
                    $user=$query->fetch();
                    $_SESSION['email'] = $email;
                    $code=mt_rand(1000,9999);
                    $sql="UPDATE utilisateur SET code= '" . $code . "' WHERE email='" . $email . "'";
                    $db = config::getConnexion();
                    $query1=$db->prepare($sql);
                    $query1->execute();
                    $mailto = $email;
					$mailSub = 'Recuperation mot de passe';
                    $mailMsg = "Voici votre code de verification $code ";
                    $mail = new PHPMailer();
					$mail->IsSmtp();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'ssl';
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465; // or 587
					$mail->IsHTML(true);
					$mail->Username = "dorsaf.charfeddine@gmail.com";
					$mail->Password = "Dorsaf1234";
					$mail->SetFrom("dorsaf.charfeddine@gmail.com");
					$mail->Subject = $mailSub;
					$mail->Body = $mailMsg;
					$mail->AddAddress($mailto);
                }
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }

	}
	if (!$mail->Send()) {
	    echo "Mail Not Sent to ";
	} else {
	    header('Location: verifpassword.php');
	}
?>





   
