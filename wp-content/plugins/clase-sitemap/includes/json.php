<?php

// Schema para la Front page
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
add_action('wp_footer', 'agregar_schema_general');

// Schema específico para el Blog
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
add_action('wp_footer', 'agregar_schema_blog');

// Schema específico para la página de Servicios
function agregar_schema_servicios() {
    if (is_page('servicios')) {  
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
add_action('wp_footer', 'agregar_schema_servicios');

function agregar_schema_post_individual_acf() {
    if (is_single() && get_post_type() === 'post') {
        global $post;
        
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "headline": "<?php the_field( 'title' ); ?>",
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
add_action('wp_footer', 'agregar_schema_post_individual_acf');
?>