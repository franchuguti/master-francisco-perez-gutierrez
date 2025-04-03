<?php
function remove_default_wp_styles() {
    // Elimina el CSS de bloques de Gutenberg
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');

    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_style('wp-block-library-theme');

    wp_dequeue_style('global-styles');
    wp_deregister_style('global-styles');

    // Elimina el CSS de WooCommerce (si lo usas)
    wp_dequeue_style('woocommerce-inline');
    wp_deregister_style('woocommerce-inline');

    wp_dequeue_style('wc-blocks-style');
    wp_deregister_style('wc-blocks-style');

    // Elimina los emojis
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('wp_enqueue_scripts', 'remove_default_wp_styles', 999);

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
                    <p><?php echo the_field( 'lead' ); ?></p>
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

?>