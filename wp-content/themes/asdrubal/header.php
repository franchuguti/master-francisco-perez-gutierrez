<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">
<?php
    wp_head();
?>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="logo">
            <li class="franblog"><a href="/">Blog de Fran</a></li>
            </ul>
            <ul class="nav-links">
                <li><a href="/">Inicio</a></li>
                <li><a href="/sobre-mi/">Sobre mi</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>