<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    define ("enlacecta1","/index.php");
    define ("enlacecta2","/contacto.php");
    define ("enlacecta3","/sobre-mi.php");
    $age= '34';
    $newAge = $age + '1';
?>
<body>
      <span><h1>Contacto</h1></span>
   <?php francisco()?>
   <?php cta();
   francisco();
   ?>
<div id="iframeboxing" onclick="load_on_iframe()" style="background: url('/imagenes/mapa.webp');">
    <iframe id="iframeonclick" class="hidden" style="border: 0;" src="" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
</div>
<script>
    function load_on_iframe() {
        const iframe = document.getElementById("iframeonclick");
        const container = document.getElementById("iframeboxing");

        // Configuramos el atributo src del iframe con el mapa de Google
        iframe.src = "https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14474.562238929771!2d-0.1086044557368389!3d51.45958645479797!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1735984409439!5m2!1sen!2suk";

        // Quitamos la clase 'hidden' para mostrar el iframe
        iframe.classList.remove("hidden");

        // Eliminamos el fondo para que no se vea la imagen una vez cargado el mapa
        container.style.background = "none";

        // Desactivamos el evento onclick del contenedor para evitar múltiples cargas
        container.onclick = null;
    }
</script>
<div>
        <p>Para contactar: <a href="mailto:franchuguti22@gmail.com,">Enviar email</a></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nulla odit alias officiis error, nam exercitationem maiores modi itaque, voluptates labore natus aperiam. Fugiat mollitia facilis placeat accusantium quisquam non?</p>
   </div>
   <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>   
