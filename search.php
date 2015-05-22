<?php get_header(); ?>
		<?php get_template_part( "/templates/beforeloop", "search" ) ?> 

					<?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>
        
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
     

                                <h3 class=""><a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


                                <div class="post_content">
                                        <div class="entry">

                                            <?php the_excerpt(); ?>

                                            <div class="clearfix"></div>
                                        </div><!-- /entry -->

                                </div><!-- /post_content -->

                                <?php get_template_part( "meta", "search" ); ?>

                                <div class="clearfix"></div>

                            </article>
        
                        <?php endwhile; ?>
        
                        
                   
                    <div class="pagination_wrap">
                        <?php get_template_part( "pagination", "index" ); ?>
                    </div><!-- /pagination_wrap -->
        
                    <?php else : ?>
        
                    <article>
                        <h2 class="post_title">Not Found</h2>
                        <p>Sorry, but the requested resource was not found on this site.</p>
                        <div class="clear"></div>
                    </article>
        
                    <?php endif; ?>
                    
              <?php get_template_part( "/templates/afterloop", "search" ) ?> 

<?php get_footer(); ?>