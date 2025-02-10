<?php
    include_once 'header.php';
?>
<nav>
    <ul>
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<li class="categorias"><a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
        }
        ?>
    </ul>
</nav>
<div class="postpage">
<h1><?php the_title();?></h1>
    <div class="descorta"><?php the_field( 'descripcion' ); ?> </div>
    <section id="contenido">
        <?php if (in_category('festivales')){
           ?>         
           <div class="infofesti" >
           <img height="300px" class="aspectfesti" src="<?php the_field( 'imagen_blog' ); ?>" />
            <table class="festivalestabla">
                <tr><th></th>
                <th>Festivales 2025</th>
            </tr>
            <tr>
                <th>Nombre del Festival</th>
                <td><?php the_field( 'nombre_festival' ); ?></td> <!-- Quiero que aqui coja el titulo de la entrada -->
            </tr>
            <tr>
                <th>Fechas</th>
                <td><?php the_field( 'fechas' ); ?></td>
            </tr>
            <tr>
                <th>Número de días</th>
                <td><?php the_field( 'duracion' ); ?></td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td><?php the_field( 'ciudad' ); ?></td>
            </tr>
            <tr>
                <th>País</th>
                <td><?php the_field( 'pais' ); ?></td>
            </tr>
            <tr>
                <th>Tipo de música</th>
                <td><?php the_field( 'musica' ); ?></td>
            </tr>
            <tr>
                <th>Precio</th>
                <td><?php the_field( 'precio' ); ?></td>
            </tr>            
            </table>
            </div>
        <?php }
         else {;}

            echo the_content();
        ?>
    </section>
</div>

<?php include_once 'footer.php'; ?>