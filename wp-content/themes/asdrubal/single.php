<?php
    include_once 'header.php';
?>

<div class="postpage">
<h1><?php the_title();?></h1>
    <div class="descorta"><?php the_field( 'descripcion' ); ?> </div>
    <section id="contenido">
        <?php
            echo the_content();
        ?>
    </section>
</div>
<?php
    include_once 'footer.php';
?>