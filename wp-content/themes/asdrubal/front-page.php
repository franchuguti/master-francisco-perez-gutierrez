<?php
    get_header();
?>
<div class="imagefrontpage"><img src="/wp-content/themes/asdrubal/images/designer.jpg" alt="Designer"></div>
<div class="frontpage">
<h1><?php the_title();?></h1>
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