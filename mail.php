

<?php

define('GMailUSER', 'colinjeanpatrick@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'gunjinnET5222'); // Mot de passe Gmail
//ACTIVATION DES ERREURS
error_reporting(E_ALL);
ini_set("display_errors", 1);

// CHARGEMENT DES AUTOLOAD (PHPMAILER)
require('vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

var_dump($_POST);
// Creation de l'objet phpmailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Activation du debug
    $mail->isSMTP();                                            // PHPMAILER va utiliser le protocole SMTP
    $mail->Host       = 'smtp.gmail.com';  // Declaration du serveur SMTP global et rescue
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = GMailUSER;                     // SMTP username
    $mail->Password   = GMailPWD;                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

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
