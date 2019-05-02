<?php 
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "57Wkk8L" && isset($_POST['nom']) && $_POST['nom'] == "Greg") {
        header('Location: contacts.php');
    } else {
        header('Location: 403.php');
    }

?>