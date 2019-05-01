<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificaiton Adminitrateur</title>
</head>
<body>
    <form action="secret.php" method="post">
        <p>
        <input type="text" name="nom" placeholder='nom'>
        <input type="password" name="mot_de_passe" placeholder='Mot de passe'>
        <input type="submit" value="Valider">
        </p>
    </form>
    <p>Cette page est réservée au personnel du site.</p>

    <!-- <script type="text/javascript">
// Empecher le copier coller dans le champs de mot de passe ( A enlever pendant le développement )
(function () {
    var onload = window.onload;
 
    window.onload = function () {
        if (typeof onload == "function") {
            onload.apply(this, arguments);
        }
 
        var fields = [];
        var inputs = document.getElementsByTagName("input");
        // var textareas = document.getElementsByTagName("textarea");
 
        for (var i = 0; i < inputs.length; i++) {
            fields.push(inputs[i]);
        }
 
        for (var i = 0; i < textareas.length; i++) {
            fields.push(textareas[i]);
        }
 
        for (var i = 0; i < fields.length; i++) {
            var field = fields[i];
 
            if (typeof field.onpaste != "function" && !!field.getAttribute("onpaste")) {
                field.onpaste = eval("(function () { " + field.getAttribute("onpaste") + " })");
            }
 
            if (typeof field.onpaste == "function") {
                var oninput = field.oninput;
 
                field.oninput = function () {
                    if (typeof oninput == "function") {
                        oninput.apply(this, arguments);
                    }
 
                    if (typeof this.previousValue == "undefined") {
                        this.previousValue = this.value;
                    }
 
                    var pasted = (Math.abs(this.previousValue.length - this.value.length) > 1 && this.value != "");
 
                    if (pasted && !this.onpaste.apply(this, arguments)) {
                        this.value = this.previousValue;
                    }
 
                    this.previousValue = this.value;
                };
 
                if (field.addEventListener) {
                    field.addEventListener("input", field.oninput, false);
                } else if (field.attachEvent) {
                    field.attachEvent("oninput", field.oninput);
                }
            }
        }
    }
})();
</script> -->
</body>
</html>
