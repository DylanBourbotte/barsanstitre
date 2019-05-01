<?php include('includes/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<?php
$response = $bdd->prepare('SELECT * FROM config');
$response->execute();
$textes = $response->fetchAll();
foreach ($textes as $key => $value) {
?>


<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= $value['clef'] ?></h3>
    </div>
    <div class="panel-body">
        <form class="ck-form" method="POST" action="">
            <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <textarea name="content" class="editor" id="c<?= $key ?>"><?= $value['valeur'] ?></textarea>
            <input type="submit" name="submit" class="btn  btn-ckeditor btn-primary btn-lg btn-block" value="Sauvegarder">
        </form>
    </div>
    </div>
</div>


<?php } ?>

<?php 
if(isset($_POST['content']) && isset($_POST['id'])){
    $poste = $_POST['content'];
    $id = $_POST['id'];
    //UPDATE `config` SET `valeur` = NULL WHERE `config`.`id` = 3;

    $insert = $bdd->prepare('UPDATE config SET valeur = :poste WHERE id = :id ');
    $insert->bindValue(':poste', $poste);
    $insert->bindValue(':id', $id);
    $insert->execute();
    //header('Location: textes.php');
    // echo '<p class="alert alert-success">Mise à jour Ok FDP</span>';
}




?>


<?php
include('includes/footer.php'); 
?>