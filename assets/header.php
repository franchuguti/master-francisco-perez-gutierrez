<!DOCTYPE html>
<html>
<head>
    <meta lang="es">
    <meta charset="UTF-8">
    <link href="/css/fonts.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php
   define('pagina', 'inicio');
   include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php'; //Archivo de funciones
   ?>
    <title>
        <?php
   if   (empty ($title)){
            echo "No Hay proyecto";
        }
        else {
            echo "$title";
        }
        ?>
    </title>
    <style>
        h1{color: brown;
        }
        details{
            width: 10%;
        }
        #informacion-principal{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        #bannerhome .h1small{
            background-color: aqua;
        }
        div>p{
            background-color: blueviolet;
            color: antiquewhite;
        }
        .muchotexto .demasiado{
            background-color: darkseagreen;
            font-weight: 500;
        }
    </style>
    <link href="/css/fonts.css?20325" rel="stylesheet">
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/css/estilo.css?21325">
</head>
<?php
        switch (constant("pagina")){
            case 'inicio':
                break;
            case 'contacto':
                echo '<link rel="stylesheet" type="text/css" href="/css/otro.css">';
                break;
            case 'basica':
                echo '<link rel="stylesheet" type="text/css" href="/css/basica.css">';
                break;
        }
?>
<body>
    <header>
        <nav>
            <ul>
               <li title="Inicio"><a href="/">Inicio<a/></li>
               <li><a href="/sobre-mi">Sobre mi<a/></li>
               <li><a href="/contacto">Contacto<a/></li>
               <li><a href="/basica">Web básica<a/></li>
                <li><a href="/noticias">Noticia<a/></li>
               <li><a href="/carpeta/archivo-carpeta">Archivo Carpeta<a/></li>
           </ul>
       </nav>
    </header>
