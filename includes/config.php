<?php
//ACTIVATION DES ERREURS (A commenter sur la prod)
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('GMailUSER', 'philippe.lamorskipro@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'i5d505sy0'); // Mot de passe Gmail

try
{
  $bdd = new PDO('mysql:host=serveur.colinjeanpatrick.fr;dbname=barsanstitre;charset=utf8', 'simplon-dev', 'GD6fy4$refgRT€');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());          
}

$config = $bdd->prepare("SELECT * FROM config");
$config->execute();

//var_dump($config);

$textes = $config->fetchAll();

function get_text($clef, $textes) {
  foreach ($textes as $text ) {
              
      if($text['clef'] === $clef) {

          return $text['valeur'];
      }
      else {
        return 'Le texte n\'a pas été trouvé en base de donnée';
      }
  }
}

$footernav = [
    "mention.php" => "Mentions légales",
    "https://fr-fr.facebook.com/lebarsanstitre/" => "Page facebook",
    "contact.php" => "Nous contactez"
];

$headernav = [
    "index.php" => "Accueil",
    "#about" => "À propos",
    "#rooftop" => "Rooftop",
    "#product" => "Produits",
    "#reservation" =>"Réservation",
];

$AdminMenu = [
    'index' => ["fa-dashboard", "Administration", "index.php"],
    'contacts' => ["fa-align-left", "Demandes de contacts", "contacts.php"],
    'reservations' => ["fa-calendar", "Demandes de résérvations", "reservations.php"],
];

?>

