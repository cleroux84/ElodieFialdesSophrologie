<?php 
$nom=$_POST['nom']; 
$mail=$_POST['mail']; 
$objet=$_POST['objet']; 
$message=$_POST['message']; 
$headers = array(
    'From' => $nom . $mail ,
    'Reply-To' => $mail,
    'X-Mailer' => 'PHP/' . phpversion()
);

 
$subject=$objet; 
$destinataire="cleroux84@gmail.com"; 
/* if(isset($nom) && isset($mail) && isset($objet) && isset($$message)) */
$resultatEnvoiMail = mail($destinataire, $objet, $message, $headers);

if ($resultatEnvoiMail) { 
     /* var_dump($destinataire); */
 /*    phpinfo(); */
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="#">ici 
</a></p>