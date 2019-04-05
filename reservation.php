<?php
include('includes/header.php');
$d1 = new DateTime('NOW', new DateTimeZone('Europe/Paris'));

  
?>

<div class="container">
    <h1 class="blanc">Ajouter un évènement</h1>
    <form action="" method="post" class="form">
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
                    <label class="blanc" for="date">Date de debut de l'évenement</label>
                    <input type="datetime-local" class="form-control" id="meeting-start_time" name="start-time"
                        value="<?= $d1->format('Y-m-d\T18:00:00'); ?>" min="<?= $d1->format('Y-m-d\T18:00:00'); ?>"
                        max="<?= $d1->format('Y-m-d\T21:00:00'); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="blanc" for="date">Date de fin de l'évenement</label>
                    <input type="datetime-local" class="form-control" id="meeting-end_time" name="end-time"
                        value="<?= $d1->format('Y-m-d\T00:00:00'); ?>" min="<?= $d1->format('Y-m-d\T00:00:00'); ?>"
                        max="<?= $d1->format('Y-m-d\T01:00:00'); ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="blanc" for="nombre">Nombre de personne</label>
                    <input id="nbre-personne" type="number" required class="form-control" name="nombre-personne"
                        placeholder="nombre de paersonne">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">el>
                    <label class="blanc" for="description">déscription</label>
                    <textarea class="form-control" rows="5" name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>


    </form>
</div>
<div id="modal-container">
    <div class="modal-background">
        <div class="modal">
            <h2>I'm a Modal</h2>
            <p>Hear me roar.</p>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
            </svg>
        </div>
    </div>
</div>

<?php

if(isset($_POST['name']) && isset($_POST['email']) && $_POST['start-time'] && $_POST['end-time'] && $_POST['nombre-personne'] && $_POST['description']){
  
    $req = $bdd->prepare('INSERT INTO reservation(nom, email, start_time, end_time, nb_personnes, description) VALUES(?, ?, ?, ?, ?, ?)');
    $req->bindParam(1, $nom);
    $req->bindParam(2, $email);
    $req->bindParam(3, $date_de_debut);
    $req->bindParam(4, $date_de_fin);
    $req->bindParam(5, $nb_personnes);
    $req->bindParam(6, $description);

    $datededebut = str_replace('T', ' ', $_POST['start-time']);
    $datedefin = str_replace('T', ' ', $_POST['end-time']);
    
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date_de_debut = htmlspecialchars($datededebut);
    $date_de_fin = htmlspecialchars($datedefin);
    $nb_personnes = htmlspecialchars($_POST['nombre-personne']);
    $description = htmlspecialchars($_POST['description']);
    
    $retour = $req->execute();
    
}
?>
<script>
window.bddstatus = <?= $retour; ?>;
</script>
<?php
include('includes/footer.php');
?>