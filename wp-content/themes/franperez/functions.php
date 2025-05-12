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
<?php
// ==============================
// Schema Personalizado para www.franperezg.com
// ==============================

// Schema para la front page
function agregar_schema_general() {
    if (is_front_page()) { 
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Fran Perez - SEO Técnico & UX/UI Design",
          "url": "https://www.franperezg.com",
          "description": "Francisco Perez, especialista en SEO Técnico y UX/UI Design.",
          "author": {
            "@type": "Person",
            "name": "Francisco Perez",
            "url": "https://www.franperezg.com",
            "sameAs": [
              "https://www.linkedin.com/in/tuusuario",
              "https://twitter.com/tuusuario"
            ],
            "jobTitle": "Especialista en SEO Técnico y UX/UI Design"
          }
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'agregar_schema_general');

// Schema específico para el Blog y sus listados
function agregar_schema_blog() {
    if (is_page('blog')) { 
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Blog",
          "name": "Blog de Fran Perez",
          "url": "https://www.franperezg.com/blog",
          "description": "Artículos sobre SEO Técnico, UX y UI escritos por Francisco Perez.",
          "author": {
            "@type": "Person",
            "name": "Francisco Perez",
            "url": "https://www.franperezg.com",
            "jobTitle": "Especialista en SEO Técnico y UX/UI Design"
          }
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'agregar_schema_blog');

// Schema específico para la página de Servicios
function agregar_schema_servicios() {
    if (is_page('servicios')) {  // Cambia 'servicios' si tu slug es diferente
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Service",
          "name": "Servicios de SEO Técnico y UX/UI Design",
          "url": "https://www.franperezg.com/servicios",
          "provider": {
            "@type": "Person",
            "name": "Francisco Perez",
            "url": "https://www.franperezg.com"
          },
          "description": "Optimiza tu presencia digital con los servicios de SEO Técnico, UX y UI que ofrece Francisco Perez."
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'agregar_schema_servicios');

function agregar_schema_post_individual_acf() {
    if (is_single() && get_post_type() === 'post') {
        global $post;

        // Obtener campos personalizados de ACF
        $schema_titulo = get_field('schema_titulo', $post->ID);
        $schema_descripcion = get_field('schema_descripcion', $post->ID);

        // Si no hay campos personalizados, usa los datos por defecto
        if (empty($schema_titulo)) {
            $schema_titulo = get_the_title($post->ID);
        }
        if (empty($schema_descripcion)) {
            $schema_descripcion = wp_strip_all_tags(get_the_excerpt($post->ID));
        }

        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "headline": "<?php echo esc_js($schema_titulo); ?>",
          "url": "<?php echo esc_url(get_permalink($post->ID)); ?>",
          "description": "<?php the_field( 'metadesciption' ); ?>",
          "author": {
            "@type": "Person",
            "name": "Francisco Perez",
            "url": "https://www.franperezg.com"
            "sameAs": [
            "https://www.linkedin.com/in/tuusuario",
            "https://twitter.com/tuusuario"
        ],
          },
          "publisher": {
            "@type": "Person",
            "name": "Fran Perez",
            "url": "https://www.franperezg.com"
          },
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo esc_url(get_permalink($post->ID)); ?>"
          }
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'agregar_schema_post_individual_acf');