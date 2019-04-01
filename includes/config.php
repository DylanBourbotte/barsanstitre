<?php 
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bar-sans-titre;charset=utf8', 'root', 'philippe');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
  ?>
  <?php
  $retour = $bdd->prepare("SELECT COUNT(*) AS total FROM reservation");
$retour->execute();

$footernav = [
    "mention.php" => "Mentions légales",
    "https://fr-fr.facebook.com/lebarsanstitre/" => "Page facebook",
    "contact.php" => "Nous contactez",
];

$headernav = [
    "index.php" => "Accueil",
    "#about" => "À propos",
    "#rooftop" => "Rooftop",
    "#product" => "Produits",
    "#reservation" =>"Réservation",
];


?>