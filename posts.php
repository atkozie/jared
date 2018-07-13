<?php /* Template Name: AdditionalBlogPosts */ ?>
<?php
/* Experimental Template File*/
get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <main itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

                    <?php if ( have_posts() ) : ?>

                        <?php //query the database
                            $temp = $wp_query; $wp_query= null;
                            $wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
                            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?>
                                <small><a href="<?php the_permalink(); ?>" title="Read more">Read More >>></a></small></p>

                            <?php endwhile; ?>

                            <?php if ($paged > 1) { ?>

                            <nav id="nav-posts">
                                <p>Here's the pagination nav</p>
                                <div class="prev"><p><?php next_posts_link('&laquo; Previous Posts'); ?></p></div>
                                <div class="next"><p><?php previous_posts_link('Newer Posts &raquo;'); ?></p></div>
                            </nav>

                            <?php } else { ?>

                            <nav id="nav-posts"><p>Here's the pagination nav</p>
                                <div class="prev"><p><?php next_posts_link('&laquo; Previous Posts'); ?></p></div>
                            </nav>

                        <?php } ?>

                        <?php wp_reset_postdata(); ?>


                    <?php else : ?>

                        <?php get_template_part( 'content', 'none' ); ?>

                    <?php endif; ?>

                </main><!-- main -->
	        </div><!-- .col-lg-8 -->
        </div><!-- .row -->
    </div><!-- .container -->
<?php
get_footer();