<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer(true); 
$titre = "Un courriel avec PHPmailer";

$fname=strip_tags($_POST["fname"]);
$email=strip_tags($_POST["email"]);
$comment=strip_tags($_POST["comment"]);


//Exemple de message en HTML
$message='<html>

<head>
<title>'.$titre.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>
<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; font-family: Trebuchet MS, Arial, Verdana, sans-serif;" alink="#BA8200" vlink="#6E9334" link="#BA8200">

<h1 style="color:#c9c9c9">Bonjour '.$fname.'</h2>

<hr>
<br>
<h2 style="color:#4a4a4a">Votre commentaire</h2>
<p style="text-align:center; font-family: Bungee, cursive;">'.$comment.'</p>
<br>
<hr>
<p>Message envoyé par le site Portfollio Ael Attorresi</p>
</body>
</html>';
try {
	$mail->AddAddress('leandre.verdier35410@gmail.com');
	$mail->SetFrom($email, 'Contact de portfollio');
	$mail->Subject = $titre;
	$mail->MsgHTML($message);
	$mail->Send();
	} catch (phpmailerException $e) {
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
		echo $e->getMessage(); //Boring error messages from anything else!
	}

echo"<script>location.href='index.php?page=8.php'</script>";
echo"<p><a href='index.html'>Retour</a></p>";				
?>