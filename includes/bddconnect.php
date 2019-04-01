<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bar-sans-titre;charset=utf8', 'root', 'philippe', null);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>