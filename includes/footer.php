<footer class="main-footer">
    <nav>
        <ul>
            <?php
                foreach ($footernav as $key => $value) {
                    echo "<li><a href=".$key.">".$value."</a></li>";
                };
            ?>
        </ul>
    </nav>
</footer>

<!-- Boostrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- //Bootstrap -->
<!-- Nos fichiers CSS / JS -->
<link rel="stylesheet" href="./css/app.min.css">
<script src='./js/app.js'></script>
<script>
console.log(window.bddstatus);
if(window.bddstatus) {
    var buttonId = "six";
    $('#modal-container').removeAttr('class').addClass(buttonId).addClass("success");
    $('body').addClass('modal-active');
} else {
    var buttonId = "six";
    $('#modal-container').removeAttr('class').addClass(buttonId).addClass("error");
    $('body').addClass('modal-active');
}

$('#modal-container').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
});
</script>
</body>
</html>