<!DOCTYPE html>
<html>
<head>
    <meta lang="es">
    <meta charset="UTF-8">
    <link href="/css/fonts.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
        if   (empty ($title)){
            echo "No Hay proyecto";
        }
        else {
            echo "$title";
        }
    include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
    ?>    
    </title>
<?php
    switch (constant("page")) {
        case 'inicio':
            echo '<!--Esto seria un css-->';
            break;
        case 'equipo':
            echo '<!--Esto otro seria un css-->';
            break;
        
        default:
            # code...
            break;
    }
?>

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
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
    <header>
        <nav>
            <ul>
               <li title="Inicio"><a href="/">Inicio<a/></li>
               <li><a href="/sobre-mi.php">Sobre mi<a/></li>
               <li><a href="/contacto.php">Contacto<a/></li>
               <li><a href="/carpeta/archivo-carpeta.php">Archivo Carpeta<a/></li>
               <li><a href="https://www.bbc.com" target="_blank">News<a/></li>
           </ul>
       </nav>
    </header>
