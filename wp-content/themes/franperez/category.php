<?php include_once 'components/header.php'; ?>

<!-- # site main content================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Categoría</span>
                    <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>
    </section>

    <section class="s-pagecontent pagecontent">
        <div class="row">
            <div class="column xl-12 grid-block">
                <?php echo do_shortcode('[ultimos_posts_categoria]'); ?>
            </div> <!-- end grid-block-->
        </div> <!-- end row -->
    </section>
</section>

<!-- # cta ================================================== -->
<section id="cta" class="s-cta">
    <?php include_once __DIR__ . '/components/cta.php'; ?>                                 
</section>

<?php include_once __DIR__ . '/components/footer.php'; ?>