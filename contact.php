
<!--Section: Contact v.2-->
<div class="container">
<section class="mb-4">

<!--Section heading-->
<h2 class="blanc centerTxt" class="h1-responsive font-weight-bold text-center my-4">Contact </h2>
<!--Section description-->
<p class="blanc centerTxt" class="text-center w-responsive mx-auto mb-5">si vous avez des  questions? .</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="blanc">Votre nom</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="blanc">Votre email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="blanc">Sujet</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label class="blanc" for="message">Votre message</label>
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
<div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p class="blanc">Le bar sans titre rooftop</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p class="blanc"> 07 67 48 66 38</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p class="blanc">bar sans titre .fr</p>
            </li>
        </ul>
    </div>

</section>

<!--Section: Contact v.2-->
<?php
include('includes/footer.php');
header('Location: index.php');
?>  
