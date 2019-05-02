<?php
include('includes/header.php');
$d1 = new DateTime('NOW', new DateTimeZone('Europe/Paris'));
$retour = 2;
?>

<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Ajouter un évènement</h2>
        <form action="" method="post" class="form"> 
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="name">Nom</label>
                    <input id="name" type="text" required class="form-control" name="name" placeholder="Votre nom">
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="email">Votre mail</label>
                    <input id="email" type="email" required class="form-control" name="email" placeholder="Votre email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="date">Date de début de l'évenement</label>
                    <input type="datetime-local" class="form-control" id="meeting-start_time" name="start-time"
                        value="<?= $d1->format('Y-m-d\T18:00:00'); ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="date">Date de fin de l'évenement</label>
                    <input type="datetime-local" class="form-control" id="meeting-end_time" name="end-time"
                        value="<?= $d1->format('Y-m-d\T00:00:00'); ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="nombre">Nombre de personne</label>
                    <input id="nbre-personne" type="number" required class="form-control" name="nombre-personne"
                        placeholder="nombre de personne">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="blanc" for="description">Laissez nous un message</label>
                    <textarea class="form-control" rows="5" name="description"></textarea>
                </div>
            </div>
            <div class="col-md-12">
        <div class="form-group">
            <input type="submit" class="btn btn-block btn-orange">
        </div>
    </div>
</div>

    </form>
</div>
<div id="modal-container">
    <div class="modal-background">
        <div class="modal success">
            <h2>Felicitations votre résérvation est enregistrée</h2>
            <p>Nous reprendrons contact avec vous au plus vite</p>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="400" height="300" rx="3" ry="3"></rect>
            </svg>
        </div>
        <div class="modal error">
            <h2>Désolé votre résérvation n'a pas été enregistrée</h2>
            <p>Merci de réesayer ultérieurement</p>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="400" height="300" rx="3" ry="3"></rect>
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
    if ($retour === false) {
        $retour = 0;
    }
    
}
?>
<script>
window.bddstatus = <?= $retour; ?>;
</script>
<?php
include('includes/footer.php');
?>