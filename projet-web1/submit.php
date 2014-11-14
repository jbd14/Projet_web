<?php
session_start();
extract($_POST);
$destinataire="yeye1414@icloud.com";


$submit = $_POST['submit'];

$objet = "Contact depuis site internet Ludohteque";

$nom = $_POST['nom'];

$tel = $_POST['tel'];

$mail= $_POST['mail'];

$message= $_POST['message'];



$From  = "From:$mail\n";
$From .= "MIME-version: 1.0\n";
$From .='Content-Type: text/html; charset="UTF-8"'."\n"; 
$From .='Content-Transfer-Encoding: 8bit'; 

if( isset($submit) ){
$msg = "
            <b>Nom / Société</b> :  $nom<br/>
         	<b>E-Mail</b> : $mail <br/>
            <b>Téléphone</b> : $tel <br/>
            <br/><br/>
            <b>Question</b> : $message
            "; 
			

    if( mail($destinataire,$objet,$msg,$From))
    {
		header('Location: http://localhost/projet-web1/confirmation.php');
        exit;
    }   
             
    else
    {
        $message_alert ="une erreur est survenu lors de l\'envoi du message";
        alert($message_alert);
    }


 } 
?>