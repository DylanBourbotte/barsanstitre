<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Le bar sans titre - ROOFTOP</title>
</head>
<body>
<div class="container">
  <div class="logo">
    <img src="img/logonoir.png" class="img-fluid" alt="Responsive image" style="width: 40%">
  </div>
</div>
<header>
  <div id="pagewrap">
    <nav>
      <ul>
        <?php 
            foreach ($headernav as $key => $value) {
                echo "<li><a href=".$key.">".$value."</a></li>";
            };
        ?>
      </ul>
    </nav>
  </div>
</header>

