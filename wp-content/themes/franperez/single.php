<?php include_once 'components/header.php'; 
        /* post template */  
?>
        <!-- # site main content
        ================================================== -->
        <article id="content" class="s-content entry">

            <div class="s-pageheader entry__header">
                <div class="row">
                    <div class="column xl-12">
                        <h1 class="entry__title">
                            <?php the_title(); ?>
                        </h1> <!-- end entry__title -->
                        <div class="entry__meta">
                            <div class="entry__meta-date">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                    <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                </svg>
                                <?php the_field( 'fecha' ); ?> 
                            </div>
                            <div class="entry__meta-cat">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                                </svg>                                      
                                <span class="cat-links">
                                    <?php $categoria = get_field( 'categoria' ); ?>
                                        <?php if ( $categoria ) : ?>
                                            <a href="<?php echo esc_url( get_term_link( $categoria ) ); ?>"><?php echo esc_html( $categoria->name ); ?></a>
                                        <?php endif; ?>
                                </span>
                            </div>
                        </div> <!-- end entry__meta -->

                    </div>
                </div>
            </div> <!-- end entry__header --> 
            <div class="s-pagecontent entry__content">
                <div class="row entry__media">
                    <div class="column xl-12">
                        <figure class="featured-image">
                            <?php $imagenuno = get_field( 'imagenuno' ); ?>
                            <?php if ( $imagenuno ) : ?>
                                <img src="<?php echo esc_url( $imagenuno['url'] ); ?>" alt="<?php echo esc_attr( $imagenuno['alt'] ); ?>" />
                            <?php endif; ?>
                        </figure>
                    </div>
                </div> <!-- end entry__media -->

                <div class="row entry__primary width-narrower">
                    <div class="column xl-12"> 

                            <p class="lead">
                            <?php the_field( 'lead' ); ?></p> 

                            <p class="drop-cap">
                            <?php the_field( 'drop-cap' ); ?>
                            </p>

                            <div class="row entry__media">
                                <div class="column xl-12">
                                    <figure class="featured-image">
                                        <?php $imagendos = get_field( 'imagendos' ); ?>
                                        <?php if ( $imagendos ) : ?>
                                            <img src="<?php echo esc_url( $imagendos['url'] ); ?>" alt="<?php echo esc_attr( $imagendos['alt'] ); ?>" />
                                        <?php endif; ?>
                                    </figure>
                                </div>
                            </div>
    
                            <p>
                            <?php the_field( 'drop-cap-dos' ); ?>
                            </p>
    
                            <h2><?php the_field( 'headingdos' ); ?></h2>
                            <div class="row entry__media">
                                <div class="column xl-12">
                                    <figure class="featured-image">
                                        <?php $imagentres = get_field( 'imagentres' ); ?>
                                        <?php if ( $imagentres ) : ?>
                                            <img src="<?php echo esc_url( $imagentres['url'] ); ?>" alt="<?php echo esc_attr( $imagentres['alt'] ); ?>" />
                                        <?php endif; ?>
                                    </figure>
                                </div>
                            </div>        
                            <p>
                            <?php the_field( 'p-uno' ); ?></p>
    
                            <blockquote>
                                <p>
                                <?php the_field( 'blockquote' ); ?>
                                </p>
                                <cite><?php the_field( 'cita' ); ?></cite>
                            </blockquote>
    
                            <p><?php the_field( 'p-dos' ); ?></p>
    
                            <h3><?php the_field( 'headingtres' ); ?></h3>
    
                            <p>
                            <?php the_field( 'p-tres' ); ?>
                            </p>
                            
                            <div class="post-nav">
                                <div class="post-nav__prev">
                                    <a href="single-standard.php" rel="prev">
                                        <span>Prev</span>
                                        5 Effective Web Design Principles. 
                                    </a>
                                </div>
                                <div class="post-nav__next">
                                <a href="single-standard.php" rel="prev">
                                        <span>Next</span>
                                        5 Effective Web Design Principles. 
                                    </a>
                                </div>
                            </div> <!-- end post-nav -->                                                   
                   
                    </div> <!-- end column-->
                </div> <!-- end entry__primary -->    
                
                <div class="row related-posts">
                    <div class="column xl-12">

                        <h4 class="text-center">Similar Posts</h4>

                        <div class="grid-list-items">
                
                            <div class="grid-list-items__item blog-card">
                                <div class="blog-card__header">
                                    <h3 class="blog-card__title"><?php $post_uno_similar = get_field( 'post-uno-similar' ); ?>
                                            <?php if ( $post_uno_similar ) : ?>
	                                        <a href="<?php echo esc_url( $post_uno_similar); ?>"><?php echo esc_html( $post_uno_similar ); ?></a>
                                    <?php endif; ?></h3>
                                </div>
                                <div class="blog-card__text">
                                    <p>
                                    <?php the_field( 'similar-uno-texto' ); ?>
                                    </p>
                                </div>
                            </div> <!-- end blog-card -->
                            <div class="grid-list-items__item blog-card">
                                <div class="blog-card__header">
                                    <h3 class="blog-card__title"><?php $post_dos_similar = get_field( 'post-dos-similar' ); ?>
                                            <?php if ( $post_dos_similar ) : ?>
                                            <a href="<?php echo esc_url( $post_dos_similar); ?>"><?php echo esc_html( $post_dos_similar ); ?></a>
                                    <?php endif; ?></h3>
                                </div>
                                <div class="blog-card__text">
                                    <p>
                                    <?php the_field( 'similar-dos-texto' ); ?>
                                    </p>
                                </div>
                            </div> <!-- end blog-card -->
                            <div class="grid-list-items__item blog-card">
                                <div class="blog-card__header">
                                    <h3 class="blog-card__title"><?php $post_tres_similar = get_field( 'post-tres-similar' ); ?>
                                            <?php if ( $post_tres_similar ) : ?>
                                            <a href="<?php echo esc_url( $post_tres_similar); ?>"><?php echo esc_html( $post_tres_similar ); ?></a>
                                    <?php endif; ?></h3>
                                </div>
                                <div class="blog-card__text">
                                    <p>
                                    <?php the_field( 'similar-tres-texto' ); ?>
                                    </p>
                                </div>
                            </div> <!-- end blog card -->
                        
                        </div> <!-- end grid-list-items -->
                          
                    </div> <!-- end column -->
                </div> <!-- end related-posts --> 

            </div> <!-- end entry__content -->

        </article> <!-- s-content entry-->
        

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">
             <?php include_once __DIR__ . '/components/cta.php'; ?>       
        </section> <!-- end s-cta -->

<?php include_once __DIR__ . '/components/footer.php'; ?>