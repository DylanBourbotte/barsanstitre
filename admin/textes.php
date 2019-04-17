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
        <textarea name="content" class="editor" id="c<?= $key ?>"><?= $value['valeur'] ?></textarea>
    </div>
    </div>
</div>

<?php
}











?>
    
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include('includes/footer.php'); ?>