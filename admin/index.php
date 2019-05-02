<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Admin - BarSansTitre</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <!-- <form action="secret.php" method="post">
        <p>
        <input type="text" name="nom" placeholder='nom'>
        <input type="password" name="mot_de_passe" placeholder='Mot de passe'>
        <input type="submit" value="Valider">
        </p>
    </form>
    <p>Cette page est réservée au personnel du site.</p>

    <body> -->
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Connection</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
                <form action="secret.php" method='post'>
				<input type="text" class="login-field" name="nom" placeholder="Votre nom" id="login-name">
				<label class="login-field-icon fui-user" for="login_name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Votre mot de passe" id="login-pass" name="mot_de_passe">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="submit" class="btn btn-primary btn-large btn-block" value="Connection">
                </form>
				<!-- <a class="login-link" href="#">Lost your password?</a> -->
			</div>
		</div>
	</div>

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
