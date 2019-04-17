<?php 
include('includes/header.php');
?>
<main>
<section id="home">
<svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1983.52 228.72"><title>Untitled-1</title><path class="cls-1" d="M.5-.5s407,270,661,222,544-257,623-61,696-161,696-161Z" transform="translate(1.16 1)"/></svg>

<div class="container">
    <div class="row">
    <div class="col-12 text-center titlebar">Le bar sans titre</div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 accueil">
            <?php echo get_text('text-accueil', $textes); ?>
        </div>
        
    <div id="carouselExampleControls" class="carousel slide col-lg-6 col-md-12 col-sm-12 col-xs-12" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/greg.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/greg2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</div>
<div class="container-fluid citation">
<div class="col-12 text-center"><cite>"La rareté fait l'exclusivitée"</cite></div>
</div>
</section>
</main>

<?php 
include('includes/footer.php');
?>




