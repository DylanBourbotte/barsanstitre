<?php 
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "azerty62") {
        header('Location: admin.php');
    } else {
        echo "<b>Désolé, le code secret et incorrect</b>";
    }

?>