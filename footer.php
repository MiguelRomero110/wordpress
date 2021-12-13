<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer6">
                <p>Ir al inicio</p>
                <a href="home">Tienda</a>
            </div>
            <div class="col-md-3 footer3">
            <?php
    wp_nav_menu( array(
      'theme_location'  => 'infobasic_footer_interno',
  ) );
    ?>
            </div>
            <div class="col-md-3 footer3">
            <?php
    wp_nav_menu( array(
      'theme_location'  => 'infobasic_footer_externo',
  ) );
    ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer();?>
</body>

</head>