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
   <!--Es este span correcto? o sobra?-->
   <?php cta();
   francisco();
   ?>

   <div>
    <p>Para contactar: <a href="mailto:franchuguti22@gmail.com,">Enviar email</a></p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nulla odit alias officiis error, nam exercitationem maiores modi itaque, voluptates labore natus aperiam. Fugiat mollitia facilis placeat accusantium quisquam non?</p>
   </div>
   <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>   
