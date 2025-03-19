<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> AQUI VA PHP GET THE TITLE FROM WORDPRESS </title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">

        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.php">
                            <img src="images/francisco-perez-logo.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
                <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
                        <ul class="s-header__menu-links">
                                <li class="<?= ($currentPage == 'sobremi.php') ? 'current' : '' ?>"><a href="sobremi.php">Sobre mi</a></li>
                                <li class="<?= ($currentPage == 'servicios.php') ? 'current' : '' ?>"><a href="servicios.php">Servicios</a></li>
                                <li class="<?= ($currentPage == 'blog.php') ? 'current' : '' ?>"><a href="blog.php">Blog</a></li>
                                <li class="<?= ($currentPage == 'contacto.php') ? 'current' : '' ?>"><a href="contacto.php">Contacto</a></li>
                        </ul> <!-- s-header__menu-links -->
                    <div class="s-header__contact">
                        <a href="contacto.php" class="btn btn--primary s-header__contact-btn">Trabajemos Juntos</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->
