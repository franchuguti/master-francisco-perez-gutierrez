<?php include_once 'components/header.php'; 
/* Template Name: Blog */  
?>
        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">
               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                                <span class="page-title__small-type text-pretitle">Blog</span>
                                Artículos Recientes
                            </h1>
                        </div>
                    </div>
               </section>   

               <section class="s-pagecontent pagecontent">

                    <div class="row">
                        <div class="column xl-12 grid-block">          
        
                            <!-- <div class="grid-full">         -->
                                <div class="grid-full grid-list-items">
                                <?php echo do_shortcode('[ultimos_posts]'); ?>                              
                                </div> <!-- grid-list-items -->
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