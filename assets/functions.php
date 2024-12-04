<?php
//Mejor defiinir la constante enlacecta aqui
function cta(){
    echo '<div class="blocazo">
    <div class="bloquecito"><a href="' . enlacecta1 . '">Inicio</a></div>
    <div class="bloquecito"><a href="' . enlacecta2 . '">Contacto</a></div>
    <div class="bloquecito"><a href="' . enlacecta3 . '">Sobre mi</a></div>
</div>';
}

function foot1(){
    echo '<div class="blocazo">
    <div class="bloquecito"><a href="' . enlacecta1 . '">Esto seria el footer si la pagina ES inicio</a></div>
</div>';
}
function foot2(){
    echo '<div class="blocazo">
    <div class="bloquecito"><a href="' . enlacecta1 . '">Inicio</a></div>
</div>';
}

function francisco(){ //HTML dentro de una function de php
    ?>
   <p style="font-weight: 800;font-size: 24px;">Hola a todos</p>
<?php
}
?>

