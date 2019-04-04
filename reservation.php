<?php
require('includes/config.php');
include('includes/header.php');
?>






<div class="container">
    <h1 class="blanc">Ajouter un évènement</h1>
        <form action="reserv.php" method="post" class="form">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="name">Nom</label>
                        <input id="name" type="text" required class="form-control" name="name" placeholder="Votre nom">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="email">Votre mail</label>
                        <input id="email" type="email" required class="form-control" name="email" placeholder="Votre email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="date">Date de l évenement</label>
                        <input id="date" type="date" required class="form-control" name="date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="debut">debut de réservation</label>
                        <input id="debut" type="time" required class="form-control" name="debut">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="fin">fin de résrvation</label>
                        <input id="fin" type="time" required class="form-control" name="fin" placeholder="h:mn">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc"
                        for="name">Titre</label>
                        <input id="name" type="text" required class="form-control" name="name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="blanc" for="nombre">Nombre de personne</label>
                        <input id="nbre-personne" type="number" required class="form-control" name="nombre-personne" placeholder="nombre de paersonne">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">el>
                        <label class="blanc"  for="description">déscription</label>
                        <textarea name="description" ></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" >
            </div>




    </form>







</div>
<?php
include('includes/footer.php');
?>  