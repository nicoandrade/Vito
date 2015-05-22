<?php get_header(); ?>

<?php get_template_part( "/templates/beforeloop", "archive" ) ?> 


<?php if (have_posts()) : ?>


    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                    <?php 
                    if(!get_post_format()) {
                        //Display the Post Image by default
                        get_template_part( "post_image", "index" );
                    } else {
                        get_template_part('format', get_post_format());
                    }
                    ?>

                    <div class="post_content row">
                        <div class="col-md-6">
                            <h2 class="post_title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                            <?php get_template_part( "meta", "index" ); ?>

                        </div><!-- /col-md-6 -->

                        <div class="col-md-6">
                            <div class="entry">
                                <?php the_content(); //Read more button is in framework/functions/single_functions.php?>
                                <div class="clearfix"></div>
                            </div>
                            

                        </div><!-- /col-md-6 -->

                    </div><!-- /post_content -->

                    <div class="clearfix"></div>
                </article>



        <?php endwhile; ?>

    <?php else : ?>

        <article>
            <h3><?php _e('Not Found','eneaa'); ?></h3>
            <p><?php _e('Sorry, but the requested resource was not found on this site.','eneaa'); ?></p>
            <div class="clear"></div>
        </article>

    <?php endif; ?>


    <?php get_template_part( "/templates/afterloop", "archive" ) ?> 

    <?php get_footer(); ?>
