<?php
    get_header();
?>
<h1>FRONT PAGE</h1>
<div class="generico">
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