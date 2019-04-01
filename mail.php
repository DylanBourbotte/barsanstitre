<?php
//ACTIVATION DES ERREURS
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('GMailUSER', 'philippe.lamorskipro@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'i5d505sy0'); // Mot de passe Gmail

// Import de la connexion BDD
require('includes/bddconnect.php');
// CHARGEMENT DES AUTOLOAD (PHPMAILER)
require('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//var_dump($_POST);
// Creation de l'objet phpmailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Activation du debug
    $mail->isSMTP();                                            // PHPMAILER va utiliser le protocole SMTP
    $mail->Host       = 'smtp.gmail.com';  // Declaration du serveur SMTP global et rescue
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = GMailUSER;                     // SMTP username
    $mail->Password   = GMailPWD;                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect
    //Recipients
    $mail->setFrom(GMailUSER, 'LE BAR SANS TITRE');
    $mail->addAddress(GMailUSER, 'PHILIPPE LAMORSKI');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo(GMailUSER, 'Contact');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {

    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO contacts(nom, email, sujet, messages, date) VALUES(?, ?, ?, ?, NOW())');
    $req->bindParam(1, $nom);
    $req->bindParam(2, $email);
    $req->bindParam(3, $sujet);
    $req->bindParam(4, $message);

    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $req->execute();
}

    header('Location: index.php');
?>