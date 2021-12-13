<?php
    get_header();
?>
    <div class="jumbotron jumbo-tienda">
        <h1>La teva roba online</h1>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/sudadera_su.png")?>" alt="">
                <div class="card-body">
                <h5>Camisetas a medida</h5>
                <a href="<?=site_url("samarretes")?>" class="btn btn-primary">Visita</a>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="<?=get_theme_file_uri("inc/img/traje_puto.png")?>" alt="">
                    <div class="card-body">
                    <h5>Jeans flexibles</h5>
                    <a href="<?=site_url("texans")?>" class="btn btn-primary">Visita</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php
    get_footer();
?>