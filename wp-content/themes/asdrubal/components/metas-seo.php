<?php $term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$imagenbranding = '/wp-content/themes/asdrubal/images/branding.jpg"';
?>
<!-- Meta tags, $term se usa para también usarlo en categorias y demás -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php $metarobots_checked_values = get_field( 'metarobots' , $term ); 
        if ( $metarobots_checked_values ) : ?>
        <meta name="robots" content="<?php the_field( 'metarobots' , $term ); ?>">
        <?php endif; ?>

    <?php the_field('custom_meta' , $term); ?>

<title><?php the_field( 'title' , $term ); ?></title>
<meta name="og:title" content="<?php 
if (get_field('og_title' , $term)){
    the_field('og_title' , $term);
} else {the_field( 'title' , $term);} ?>">

<meta name="twitter:title" content="<?php 
if (get_field('twitter_title' , $term)){
    the_field('twitter_title' , $term);} 
elseif (get_field('og_title' , $term)) {the_field( 'og_title' , $term);}
else{the_field('title' , $term);}?>">

    <?php if ( in_category('festivales')){

        $metadesc_festi = 'Los mejores festivales para asistir este verano es el ' .  get_field( 'nombre_festival' ) .' ' . 'en la fecha' .' '. get_field( 'fechas' ); ?>
        <meta name="description" content= "<?php echo $metadesc_festi ;?>">
        <meta name="og:description" content="<?php echo $metadesc_festi ;?>">
        <meta name="twitter:description" content="<?php echo $metadesc_festi ;?>">
        <?php 
            }
         else {
        ?>
<meta name="desciption" content="<?php the_field( 'metadesciption' ,$term ); ?>">

<meta name="og:description" content="<?php 
if (get_field('og_description' , $term)){
    the_field( 'og_description' , $term );
} else {the_field( 'metadescription' , $term);} ?>">

<meta name="twitter:description" content="<?php 
if (get_field('twitter_description' , $term)){
    the_field('twitter_description' , $term);} 
elseif (get_field('og_description' , $term)) {the_field( 'og_description' , $term);}
else{the_field('metadescription' , $term);}?>">
<?php ;} ?>


<link rel="canonical" href="<?php
 if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} 
 else{echo $url_sin_string;}?>">

<meta name="og:url" content="<?php
 if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} 
 else{echo $url_sin_string;}?>">

<meta name="twitter:url" content="<?php
 if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} 
 else{echo $url_sin_string;}?>">

<meta name="og:image" content="<?php 
if (get_field('og_image' , $term)){
    the_field( 'og_image' , $term );
} else {echo $imagenbranding;}?>">

<meta name="og:image:source_url" content="<?php 
if (get_field('og_image' , $term)){
    the_field( 'og_image' , $term );
} else {echo $imagenbranding;}?>">

<meta name="twitter:image" content="<?php 
if (get_field('og_image' , $term)){
    the_field( 'og_image' , $term );
} else {echo $imagenbranding;}?>">

<meta name="og:image:alt" content="<?php the_field( 'title' , $term ); ?>">

<meta name="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:site" content="@blog_UI/UX">
<meta name="twitter:creator" content="@blog_UI/UX">

<!--<meta name="rating" content="adult"> -->