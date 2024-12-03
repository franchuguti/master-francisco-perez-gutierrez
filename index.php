<?php 

$title = 'Proyecto de master de SEO';
    define ("page", 'inicio');
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    include $_SERVER['DOCUMENT_ROOT'].'/assets/tablassql.php';
?>
    <br>
    <?php 
    $_SERVER['DOCUMENT_ROOT'];
    $franciscoperez = "</p>Master de SEO";
    $seo = "optiopnA";
    $oes = "optionB";
    echo "$franciscoperez tecnico, con la variable " . '$franciscoperez';
    if ($seo==$oes){
        echo "$franciscoperez tecnico, con la variable " . '$franciscoperez';
    }  
    else if($oes =='optionB') {
        echo 'La variable $oes es igual a optionB y no es lo misom que la vbariable $seo ';
    }  
    else{
        echo 'No se cumple la condicion';
    } 
    function que_dia_es_hoy(){
        echo 'Today is ' . date('l');
    }

    $n1 = 7;
    $n2 = 10;

    if ($n1>$n2) {
            echo "$n1 es mayor a $n2";
    }
    elseif ($n1==$n2) {
            echo "son iguales";
    }
    else {
        echo "$n1 no es mayor a $n2";
    }
    ?>
        <div class="today"> <?php que_dia_es_hoy();?></div>
    <br>
    
    <?php
    $capital = "Paris"; //Esto seria el switch con variables
    switch ($capital) {
        case 'Madrid':
            echo 'Madrid es la capital de Spain';
            break;
        case 'Londres':
            echo 'Londres es la capital de England';
            break;
        case 'Paris':
            echo 'Paris es la capital de France';
            break;
        case 'Rome':
            echo 'Rome es la capital de Italia';
            break;
        default:
            echo 'No hemos podido encontrar esa capital, prueba otra';
            break;
    }
    echo '</p>Hola a todos';    
?>
    <table style="border: 2px solid black;">
        <tr id="informacion-principal">
            <th>Names</th>
            <th>Age</th>
            <th>Nationality</th>
        </tr>
        <tr>
            <td>Francisco</td>
            <td>34</td>
            <td>Spanish</td> 
        </tr>
            <td>Sarah</td>
            <td>28</td>
            <td>French</td>
        </tr>
        <tr>
            <td>Scott</td>
            <td>30</td>
            <td>Scottish</td>
        </tr>
    </table>   
    <section id="bannerhome">
        <h1 class="h1small">Esto de aqui en un h1</h1>
        <div title="Este texto se lee cuando haces hover en este elemento">Esto de aqui es un div</div>
        <!-- Atributo title es igual que un tooltip en UI-->   
        <p>Esto <strong>es</strong> un parrafo</p>
        <img src="/imagenes/estructura-html5.jpg" title="Estructura de html" width="500" height="214" alt="Estructura de html5">
        <div class="dentro">
            <fran class="personalizada">Esto es una etiqueta personalizada</fran>
            <span>Span que tiene un <div>div dentro</div></span>
            <span title="Es una etiqueta">Esto es una etiqueta span</span>
            <div>
                <p>Esto es un p</p> perodentro de un div<div>con un div dentro</div></div>
        </div>
    </section>
    <section class="muchotexto">
        <p class="demasiado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, architecto eius! Ipsum pariatur doloribus laboriosam sunt ratione amet rerum quae cumque fugiat, exercitationem blanditiis nemo distinctio fuga voluptates dolor aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, architecto eius! Ipsum pariatur doloribus laboriosam sunt ratione amet rerum quae cumque fugiat, exercitationem blanditiis nemo distinctio fuga voluptates dolor aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam adipisci eaque quos quia ea, temporibus voluptatem rem perferendis a ipsum. Deleniti veritatis provident officiis enim qui porro ex eum doloribus.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quas tempore culpa incidunt excepturi maxime nihil odio, rem dicta repudiandae quaerat aspernatur laboriosam distinctio sint, amet, magni ullam nemo adipisci!</p>
    </section>
    <section id="preguntas-frecuentes">
        <h2>Pregunstas frecuentes</h2>
        <details> <!--Me gustaria que los textos del acordeon fuesen fit to content y no tener que limitar el width a 10%-->
          <Summary>Que es lo que me gusta?</Summary>
          <p>Escalada</p>
          <p>Videjuegos</p>
        </details>
    </section>
    <section>
        <picture class="fotillo">
                <source type="image/avif" srcset="/imagenes/html-cheat.avif">
            <img src="/imagenes/html-cheat.avif" title="html-cheat" loading="lazy" alt="Html cheat" width="600" height="465">
        </picture>
    <div>
    <br>
    </div>
        <video class="videocoffee" width="600" height="300" controls autoplay muted>
            <source src="video/coffee-video.mp4">
            <!--Poner arriba siempre el menos pesado con mayor calidad e ir bajando con diferentes opciones
            *Autoplay con sonido=molesto, pero se puede poner mute *preload almacena en cache para cargarlo antes-->
        </video>
    </section>
    <?php 
    include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
    ?>
