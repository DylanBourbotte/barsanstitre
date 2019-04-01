<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bar-sans-titre;charset=utf8', 'root', 'philippe');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
  ?>
  <?php
  $retour = $bdd->prepare("SELECT COUNT(*) AS total FROM reservation");
  $retour->execute();
?>