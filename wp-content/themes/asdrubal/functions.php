<?php 
$plantillas = __DIR__ . '/plantillas/';

function tresposts (){
    $plantillas = __DIR__ . '/plantillas/';
    include $plantillas .'trespost.php';
}
add_shortcode('latest_post' , 'tresposts');
?>