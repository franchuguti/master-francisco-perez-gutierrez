<?php 
    define ("page", 'equipo');
    define ("enlacecta1","/index.php");
    define ("enlacecta2","/contacto.php");
    define ("enlacecta3","/sobre-mi.php");
    //$prueba ="Hola profes!";
    $prueba;
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    cta();
    if  (isset($prueba)){
        echo 'Esta variable esta asignada';
      }
      else {
     echo 'La variable $prueba no esta asignada';
    }
?>
   <h1 class="introd" style="color: brown; margin-top: 50px;">Sobre mi</h1>
   <div>
        <img class="selfie" src="/imagenes/fran-photo.jpeg" alt="Foto de Fran" width="200" height="auto">
    </div>
    <?php
       include $_SERVER['DOCUMENT_ROOT'].'/assets/tablassql.php';
    ?>
    <div id="imagenfalsa">
    </div>
    <br>
    <div id="zapatillafalsa">
    </div>
    <div> 
    <p class="soy-yo">Me llamo Francisco, naci el 22 de Julio del 90 (hace tiempo ya) en la ciudad de Salamanca. <blockquote>Esto de aqui es una cita</blockquote> un <strong>obsesionado</strong> de la escalada y videojuegos.</p>
    </div>
    <section id="Rescue dog">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/1B1dnSf6rPk?si=ZTIbTxGLGEBhFPqf" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!--Se puede insertar con embed y object (especialmente para recursos) tambien-->
    </section>
    <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>  
