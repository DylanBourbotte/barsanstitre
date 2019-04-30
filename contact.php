<?php include('includes/header.php');?>
<!--Section: Contact v.2-->
<div class="container">
<section class="mb-4">

<!--Section heading-->
<h2 class="blanc centerTxt" class="h1-responsive font-weight-bold text-center my-4"> Contact </h2>
<!--Section description-->
<!-- <p class="blanc centerTxt" class="text-center w-responsive mx-auto mb-5">si vous avez des  questions? .</p> -->

<div class="row justify-content-md-center">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="laMarge">
                        <div class="md-form mb-0">
                            <label for="name" class="blanc">Votre nom</label>
                            <input type="text" id="name" name="name" placeholder="Votre nom" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="laMarge">
                        <div class="md-form mb-0">
                            <label for="email" class="blanc"> Votre email</label>
                            <input type="text" id="email" name="email" placeholder="Exemple@gmail.com" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="laMarge">
                        <div class="md-form mb-0">
                            <label for="subject" class="blanc">Sujet</label>
                            <input type="text" id="subject" name="subject" placeholder="Nom de votre sujet" class="form-control">
                        </div>    
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="laMarge">
                        <div class="md-form">
                            <label class="blanc" for="message">Votre message</label>
                            <textarea type="text" id="message" name="message" rows="2" placeholder="Ecrivez votre message ici" class="form-control md-textarea"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-block btn-orange" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <!--Grid column-->
</div>
</div>
<div class="col-12 text-left">
    <div class="margeHaut">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p class="blanc border1 ">Le bar sans titre rooftop</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p class="blanc border1"> 07 67 48 66 38</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p class="blanc border1">bar sans titre .fr</p>
            </li>
        </ul>
        </div>
    </div>

</section>
<script src="https://www.google.com/recaptcha/api.js?render=6Le2TpsUAAAAAISF7sonGfMOxDWh47GiLEyKnK8Q"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6Le2TpsUAAAAAISF7sonGfMOxDWh47GiLEyKnK8Q', {action: 'homepage'}).then(function(token) {
        
      });
  });
  </script>

<!--Section: Contact v.2-->
<?php
include('includes/footer.php');
?>  
