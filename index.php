<?php 
$title = 'Proyecto de master de SEO';
    define ("pagina", '/index.php');
    define ("enlacecta1","/index.php");
    define ("enlacecta2","/contacto.php");
    define ("enlacecta3","/sobre-mi.php");
    include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>

<h2>Ejercicio de enlaces</h2>
<div>
    <a href="http://ejemplo.test/sobre-mi">URL Absoluta hacia Sobre mi</a>
</div>

<div>
    <a href="basica">URL Relativa a Básica (misma carpeta)</a>
    <a href="/basica">URL Relativa a Básica 2 (desde la carpeta root)</a>
    <a href="/test/ejemplo2/test2">URL Relativa a Test (dentro de la carpeta ejemplo)</a>
</div>

<?php 
    $_SERVER['DOCUMENT_ROOT'];
    $franciscoperez = "</p>Master de SEO";
    $name = "Francisco";
    $age = "34";
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
?>

<h3>Esto es un h3 y <span id="ofc">con un enlace ofuscado for medio de advent listener</span> que el navegador no lo va a detectar</h3>

<h1 class="javatest">
    Mi nombre es es <?php echo $name .  'y mi edad es ' .  $age ;?>
</h1>
<div>
 <p id="cambiador" class="camb">Esto cambiará por JS</p>
</div>
<div id="cambiante">    
</div>
<div class="efectofunciones" onclick="functionfran()">
 Pulsa para cambiar
</div>
<p id="descuento"></p>
<script>
    let totalCompra = 120; 
    let descuento;

    if (totalCompra > 100) {
  descuento = "Tienes un descuento del 20%";
    } else if (totalCompra >= 50) {
  descuento = "Tienes un descuento del 10%";
    } else {
  descuento = "No tienes descuento";
    }
document.getElementById("descuento").innerText = descuento;
</script>
<h2>Elige un color</h2>
  <select id="colorSelector">
    <option value="white">Light</option>
    <option value="black">Dark</option>
    <option value="skyblue">Azul</option>
    <option value="lightgreen">Verde</option>
  </select>
<script>
let theme = "dark";
let backgroundColor;

switch (theme) {
  case "light":
    backgroundColor = "#ffffff"; // Blanco Puro
    break;
  case "dark":
    backgroundColor = "#000000"; // Negro puro
    break;
  case "blue":
    backgroundColor = "#87CEEB"; // Azul claro
    break;
  case "green":
    backgroundColor = "#98FB98"; // Verde claro
    break;
  default:
    backgroundColor = "#f0f0f0"; // Gris 18%
    break;
}
     const colorSelector = document.getElementById('colorSelector');
    // Event listener para detectar cambios en el drop menu
    colorSelector.addEventListener('change', function () {
      const selectedColor = colorSelector.value;
      document.body.style.backgroundColor = selectedColor;
    });
</script>
<script>
    const activador = document.getElementsByClassNamegetElementsByClassName("efectofunciones");
activador[0].addEventListener("click", functionfran);
function functionfran(){
const collection = document.getElementsByClassName("pruebajs");
for (let i = 0; i < collection.length; i++) 
collection[i].classList.add("redjs");
}
</script>
<div id="franciscotest"></div>
<noscript>Código en noscript cpn php Mi nombre es es <?php echo $name .  'y mi edad es ' . $age ;?> </noscript>
<p id="firstjs">Mi primer Javascript con onclick</p>
<button type="button"
    onclick='document.getElementById("firstjs").innerHTML="Ha funcionado"'>
    Haz click aquí
    </button>
    <button type="button"
    onclick='document.getElementById("firstjs").innerHTML="Ha funcionado otra vez!"'>
    Haz click aquí de nuevo
    </button>
<?php 
    $name = 'Francisco';
    $isDev = true;
    $age= 34;
    $isOld = $age > 30;
    $output = "Hola $name, con una edad de $age";

        if ($isOld) {
            echo "<h2> Eres viejo, lo siento </h2>";
        }
        else {
            echo "<h2> Eres joven, felicidades! </h2>";
        }
    $outputAge = $isOld // - ?verdadero :falso
        ? 'Eres viejo lo siento'
        : 'Eres joven, felicidades';
?>
</div>
<div><h2><?php $outputAge?></h2></div>
<div class="pruebajsuno">
    <h2 id="pruebas" class="pruebajs">Prueba de Javascript número uno</h2>
</div>
<div class="pruebajsdos">
    <h3 class="pruebajs">Prueba de Javascript número dos</h3>
</div>
<div class="pruebajstres">
    <h4 class="pruebajs">Prueba de Javascript número tres</h4>
</div>
<div class="pruebajscuatro">
    <h5 class="pruebajs">Prueba de Javascript número cuatro</h5>
<p><a href="https://www.google.es">Visita Google></a></p>
</div>
<script>
    //document.getElementsByClassName("pruebajs")[1].innerHTML="Esto ha sido modificado por JS y con una clase y ocupa el 1 o segundo puesto";
    //document.getElementById("pruebas").innerHTML="Esto ha sido modificado por JS y con un Id";
   // document.getElementsByTagName("h4")[0].innerHTML="Esto ha sido modificado por JS y con una etiqueta h4";
/*Código de Carlos - Quitar comentario para que tenga efecto*/
    /*const collection = document.getElementsByClassName("pruebajs");
    for (let i = 0; i < collection.length; i++) {
    collection[i].innerHTML = "ESTO ES UN TEXTO DE JS codigo por la clase Multiplicado";
    }*/
</script>
<!--Esto de aquí es una chuleta para el futuro-->
<!--
<script>
// Seleccionar elemento por ID
document.getElementById("jsasdrubal").innerHTML = "ESTO ES UN TEXTO DE JS";

// Selecciona elemento por Clase
document.getElementsByClassName("pruebaclassjs")[i].innerHTML = "ESTO ES UN TEXTO DE JS codigo por la clase";

// Muchas clases
const collection = document.getElementsByClassName("pruebaclassjs");
for (let i = 0; i < collection.length; i++) {
collection[i].innerHTML = "ESTO ES UN TEXTO DE JS codigo por la clase Multiplicado";
}

// Un solo tag
document.getElementsByTagName("h2")[0].innerHTML = "Esto es un h2 modificado por js";

const collection = document.getElementsByTagName("h2");
for (let i = 0; i < collection.length; i++) {
collection[i].innerHTML = "Esto es son muchos h2 modificado por js";
}

const collection = document.getElementsByTagName("h1");
document.getElementById("h1dice").innerHTML = collection[0].innerHTML;
</script>
-->

<?php
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
    cta();
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
        <div>
             <h2 id="javatest"></h2>   
        </div>
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
<script src="/scripts/pruebas.js"></script>