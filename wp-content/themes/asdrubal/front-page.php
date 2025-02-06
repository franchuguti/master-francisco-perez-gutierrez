<?php
    get_header();
?>
<div>
<div class="imagenporss"></div>
</div>
<div class="frontpage">
<h1 class="tituloprincipal"><?php the_title();?></h1>
<div class="imagefrontpage"><img src="/wp-content/themes/asdrubal/images/designer.jpg" alt="Designer"></div>
    <section id="contenido">
        <?php
            echo the_content();
        ?>
    </section>
<?php
    include $plantillas . 'trespost.php';
    //include 'plantillas/trespost.php'; 
?>
</div>

<?php
    include_once 'footer.php';
?>