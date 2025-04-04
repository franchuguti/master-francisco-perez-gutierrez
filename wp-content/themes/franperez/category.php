<?php include_once 'components/header.php'; 
?>
        <!-- # site main content================================================== -->
        <section id="content" class="s-content">

               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h1> <?php single_cat_title(); ?>
                            </h1>
                        </div>
                    </div>
               </section>   

               <section class="s-pagecontent pagecontent">

                    <div class="row">
                        <div class="column xl-12 grid-block">          
        
                            < <?php if (have_posts()) : ?>
    <ul>
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>No hay posts en esta categoría.</p>
  <?php endif; ?>!-- 
  <div class="grid-full">         -->
                        </div> <!-- end grid-block-->
                    </div> <!-- end row -->
               </section>
        </section> 
        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">
            <?php include_once __DIR__ . '/components/cta.php'; ?>                                 
        </section> <!-- end s-cta -->
<?php include_once __DIR__ . '/components/footer.php'; ?>
