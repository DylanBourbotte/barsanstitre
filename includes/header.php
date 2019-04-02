<?php
require('includes/config.php');
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logonoir.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <title>Le bar sans titre - ROOFTOP</title>
</head>
<body>



<div class="etiquettelogo">
  <img src="./img/logonoir.png" alt="logo du bar">
</div>
<div class="bgHeader">
<div class="logobar">
  <!-- <img src="../img/logonoir.png" alt=""> -->
</div>
<header>
<div class="toggle-btn">
  <span class="one"></span>
  <span class="two"></span>
</div>

<div class="menuContent">
  <div class="data">
    <nav id="nav">
    <ul>
      <li><a class='leA' href="#about">A propos</a></li>
      <li><a class='leA' href="#rooftop">Rooftop</a></li>
      <li><a class='leA' href="#product">Produits</a></li>
      <li><a class='leA' href="contact.php">Contact</a></li>
    </ul>
    </nav>
  </div>
</div>

<div id="navDeskop"></div>
</header>


</div> <!-- Bg header -->

$(function(){
  const nav = $("#nav").html();

  $("#navDeskop").html(nav); 


});