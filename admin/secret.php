<?php 
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "57Wkk8L") {
        header('Location: admin.php');
    } else {
        echo "<b>Désolé, le code secret et incorrect</b>";
    }

?>