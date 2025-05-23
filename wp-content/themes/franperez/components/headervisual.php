<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- Meta Tags ================================================== -->
    <?php include_once get_template_directory() . '/components/metatags.php'; ?>

    <!-- CSS================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

    <!-- favicons================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/franperez/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/franperez/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/franperez/site.webmanifest">

    <?php wp_head(); ?>
</head>
        <header class="s-header">
            <div class="row s-header__inner width-sixteen-col">
                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/">
                            <img src="/wp-content/themes/franperez/images/francisco-perez-logo.svg" alt="Logotipo Francisco Perez SEO" title="Logotipo Francisco Perez SEO">
                        </a>
                    </div>
                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->
                <nav class="s-header__nav">
                    <ul class="s-header__menu-links">
                        <li><a href="/servicios">Servicios</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <!--  <li><a href="/visual-feed">Visual Feed</a></li>-->
                        <li><a href="/sobre-mi">Sobre mi</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                    </ul> <!-- s-header__menu-links -->
                    <div class="s-header__contact">
                        <a href="contact.html" class="btn btn--primary s-header__contact-btn">Trabajemos juntos</a>                        
                    </div> 
                </nav> 
            </div> 
        </header>
