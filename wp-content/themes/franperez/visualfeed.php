

<?php include_once 'components/headervisual.php'; 
        /* Template Name: Visual */
?>
        <!-- # Contenido Principal================================================== -->
        <section id="content" class="s-content">
               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                            UI/UX Design – Proyectos destacados
                            </h1>           
                        </div>
                    </div>
               </section> <!-- end pageheader --> 
               <section class="s-pagecontent pagecontent">
                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Interfaz. Experiencia. Diseño.</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                            <div class="video-container">
                                <iframe title="vimeo-player" 
                        src="https://player.vimeo.com/video/1072542616?h=7b7159dbeb" 
                        width="640" height="360" frameborder="0"    allowfullscreen></iframe>
                            </div>  
                        </div>                       
                    </div> <!-- end pageintro -->   
               </section> <!-- pagecontent -->
        </section> <!-- s-content-->
        <!-- # cta================================================== -->
        <section id="cta" class="s-cta">
            <?php include_once __DIR__ . '/components/cta.php'; ?>       
        </section> <!-- end s-cta -->

<?php include_once __DIR__ . '/components/footer.php'; ?>