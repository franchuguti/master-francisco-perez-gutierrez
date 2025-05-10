<?php

function mostrar_ultimos_posts() {
    ob_start(); // Captura la salida para devolverla correctamente

    $query = new WP_Query([
        'posts_per_page' => 8, // Número de posts a mostrar
        'post_status'    => 'publish', // Solo posts publicados
    ]);

    if ($query->have_posts()) :
        echo '<div class="grid-full grid-list-items">';

        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="grid-list-items__item blog-card">
                <?php 
                // Mostrar imagen destacada o fallback de ACF
                if (has_post_thumbnail()) {
                    echo '<div class="blog-card__thumbnail">';
                    the_post_thumbnail('medium');
                    echo '</div>';
                } else {
                    $thumbnail = get_field('thumbnail');
                    if ($thumbnail) {
                        echo '<div class="blog-card__thumbnail">';
                        echo '<img src="' . esc_url($thumbnail['url']) . '" alt="' . esc_attr($thumbnail['alt']) . '" />';
                        echo '</div>';
                    }
                }
                ?>

                <div class="blog-card__header">
                    <div class="blog-card__cat-links">
                        <?php 
                        $categoria = get_the_category();
                        if (!empty($categoria)) {
                            echo '<a href="' . esc_url(get_category_link($categoria[0]->term_id)) . '">' . esc_html($categoria[0]->name) . '</a>';
                        }
                        ?>
                    </div>
                    <h3 class="blog-card__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </div>
                <div class="blog-card__text">
                    <p><?php the_field('lead'); ?></p>
                </div>
            </div> <!-- end blog-card -->
        <?php endwhile;

        echo '</div>'; // Cierra grid-full grid-list-items
        wp_reset_postdata();
    else :
        echo '<p>No hay posts disponibles.</p>';
    endif;

    return ob_get_clean(); // Devuelve el contenido capturado
}
add_shortcode('ultimos_posts', 'mostrar_ultimos_posts');

function mostrar_tres_posts() {
    ob_start(); // Captura la salida para devolverla correctamente

    $query = new WP_Query([
        'posts_per_page' => 3, // Solo 3 posts
        'post_status'    => 'publish',
    ]);

    if ($query->have_posts()) :
        echo '<div class="grid-full grid-list-items">';

        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="grid-list-items__item blog-card">
                <div class="blog-card__header">
                    <div class="blog-card__cat-links">
                        <?php 
                        $categoria = get_the_category();
                        if (!empty($categoria)) {
                            echo '<a href="' . esc_url(get_category_link($categoria[0]->term_id)) . '">' . esc_html($categoria[0]->name) . '</a>';
                        }
                        ?>
                    </div>
                    <h3 class="blog-card__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </div>
                <div class="blog-card__text">
                    <p><?php echo the_field('lead'); ?></p>
                </div>
            </div> <!-- end blog-card -->
        <?php endwhile;

        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No hay posts disponibles.</p>';
    endif;

    return ob_get_clean();
}
add_shortcode('tres_posts', 'mostrar_tres_posts');

function mostrar_ultimos_posts_categoria() {
    ob_start(); // Captura la salida para devolverla correctamente

    // Detectar la categoría actual si estamos en una página de categoría
    $categoria_actual = get_queried_object();

    if ($categoria_actual && isset($categoria_actual->term_id)) {
        $query_args = [
            'posts_per_page' => 8,
            'post_status'    => 'publish',
            'cat'            => $categoria_actual->term_id,
        ];
    } else {
        $query_args = [
            'posts_per_page' => 8,
            'post_status'    => 'publish',
        ];
    }

    $query = new WP_Query($query_args);

    if ($query->have_posts()) :
        echo '<div class="grid-full grid-list-items">';

        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="grid-list-items__item blog-card">
                <?php 
                if (has_post_thumbnail()) {
                    echo '<div class="blog-card__image">';
                    echo '<a href="' . get_the_permalink() . '">';
                    echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium') . '" alt="' . the_title_attribute(['echo' => false]) . '">';
                    echo '</a></div>';
                } else {
                    $thumbnail = get_field('thumbnail');
                    if ($thumbnail) {
                        echo '<div class="blog-card__image">';
                        echo '<a href="' . get_the_permalink() . '">';
                        echo '<img src="' . esc_url($thumbnail['url']) . '" alt="' . esc_attr($thumbnail['alt']) . '" />';
                        echo '</a></div>';
                    }
                }
                ?>

                <div class="blog-card__header">
                    <div class="blog-card__cat-links">
                        <?php 
                        $categoria = get_the_category();
                        if (!empty($categoria)) {
                            echo '<a href="' . esc_url(get_category_link($categoria[0]->term_id)) . '">' . esc_html($categoria[0]->name) . '</a>';
                        }
                        ?>
                    </div>
                    <h3 class="blog-card__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </div>
                <div class="blog-card__text">
                    <p><?php the_field('lead'); ?></p>
                </div>
            </div>
        <?php endwhile;

        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No hay posts disponibles.</p>';
    endif;

    return ob_get_clean();
}
add_shortcode('ultimos_posts_categoria', 'mostrar_ultimos_posts_categoria');

?>

