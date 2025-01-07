
<?php
//La nav bas ha sido ocultada en un ejercicio previo 
    define ("pagina", "basica");
    $tituloprov = "Título básico";
    define ("tituloprov", "Título de una web básica");
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    $headingone = 'Bienvineido a mi web básica';
    $build = 'desde cero';
?>
<section class="intro coverbasic">
    <div>
        <h1><?php echo $headingone ; ?></h1>
        <p>Esta es mi primera página desde <span id="desdecero">cero</span> con todo lo aprendido antes</p>
    </div>
</section>
<script>
    document.getElementById("desdecero").innerHTML = "<?php echo $build ;?>"; 
</script>

<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>