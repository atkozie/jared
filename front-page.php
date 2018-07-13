<?php
/**
 * The static front page.
 */

get_header(); ?>

<div class="container">
           
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <main itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // End the loop.
                endwhile;
                ?>

            </main><!-- main -->
        </div><!-- .col-lg-8 -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>