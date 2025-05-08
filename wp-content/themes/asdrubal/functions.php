<?php 
$plantillas = __DIR__ . '/plantillas/';
$imagenes = __DIR__ .'/imagenes/';

function tresposts (){
    $plantillas = __DIR__ . '/plantillas/';
    include $plantillas .'trespost.php';
}
add_shortcode('latest_post' , 'tresposts');

// Borrar Sitemap por defecto
add_filter( 'wp_sitemaps_enabled', '__return_false' );
if (has_action('init', 'wp_sitemaps_get_server')){
remove_action('init', 'wp_sitemaps_get_server');
}
?>