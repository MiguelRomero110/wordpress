<?php
    get_header();
?>

<div class="jumbotron jumbo-font">
    <h1>Bienvenidos a nuestra tienda</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/logo_puta_2.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Visita nuestro blog</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?=site_url("blog")?>" class="btn btn-primary">Ir al blog</a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/logo_puta.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Visita nuestra tienda</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary">Ir a botiga</a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/logo_puta_2.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Visita nuestras ofertas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?=site_url("Ofertas")?>" class="btn btn-primary">Ir a ofertas</a>
                 </div>
             </div>
        </div>
    </div>
</div>


<?php
    get_footer();
?>