<?php 
    header("Location: https://carlos.sanchezdonate.com/como-funciona-una-web/");
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
   <section>
    <span><h1>Archivo Carpeta</h1></span>
   <!--Es este span correcto? o sobra?-->
    <p>Esto es ua carpeta donde hablamos de medidas</p>
   </section>
   <section class="medidas">
      <h2>Medidas Absoludtas</h2>
    <div class="Absolutas">
        <div class="cm">Centimetros = cm</div>
        <div class="mm">Milimetros = mm</div>
        <div class="in">Pulgadas = in = (96px o 2,54cm)</div>
        <div class="px">Pixeles = px</div>
        <div class="pt">Puntos = pt</div><!--Usado mayormente para las fuentes, 1pt=72in-->
        <div class="pc">Picas = pc</div>
    </div>  
    </section>
        <h2>Medidas relativas</h2>
    <div class="sizes">
        <div class="relativas">
        <div class="em">Multiplicador del tamano de la fuente</div>
        <div class="rem">Multiplicador del tamano de la fuenta del elemento root</div>
        <div class="vh">Porcentaje del alto del viewport</div>
        <div class="vw">Porcentaje del ancho del viewport</div>
        <div class="porcentaje">Porcentaje del tamano del elemento padre</div><!--Simpre va asignado al elemento padre-->
    </div>
   <div>
    <div>Div dentro de div</div>
   </div>
   <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>   

