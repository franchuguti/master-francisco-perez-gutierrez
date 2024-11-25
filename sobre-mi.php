<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
   <h1 class="introd" style="color: brown; margin-top: 50px;">Sobre mi</h1>
   <div>
        <img src="/imagenes/Fran-photo.jpeg" alt="Foto de Fran" width="200" height="auto">
    </div>
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
   <!--Espacio para comentarios aqui:
        *Por alguna razon, Sobre mi  y Contacto me estan dando guerra. Al abrir una e intentar volver a la otra, me dice que no se encuentra la carpeta.
        -->
    <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>  
