<?php get_header(); ?>

    <div id="content">
                
    	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        	

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


                <?php get_template_part( "post_image", "single" ); ?>

                <div class="post-inside container-fluid">
                    <div class="row">
                        <div class="post-content col-md-9 col-lg-10">
                            <?php the_title( '<h1 class="post_title">', '</h1>' ); ?>

                            <div class="entry">
                        
                                <?php the_content(); //Read more button is in framework/functions/single_functions.php?>

                                <p class="tags"><i class="fa fa-tag"></i> <?php the_tags('', '', ''); ?></p>

                                <div class="clearfix"></div>
                            </div><!-- /entry -->

                            <div class="clearfix"></div>
                        </div><!-- /post_content -->


                        <div class="metadata col-md-3 col-lg-2">
                            <?php get_template_part( "meta", "single" ); ?>
                            <div class="clearfix"></div>
                        </div><!-- /metadata -->

                        </div><!-- /row -->
                    </div><!-- /post-inside -->

                <div class="clearfix"></div>
            </article>
                    
            <div class="clearfix"></div>
                    
        			
            <?php comments_template(); ?>

    
<?php endwhile; else: ?>
        
    <article>
        <p><?php _e('Sorry, but the requested resource was not found on this site.', 'eneaa'); ?></p>
    </article>
        
<?php endif; ?>
            
    <?php get_template_part( "/templates/afterloop", "single" ) ?> 

<?php get_footer(); ?>