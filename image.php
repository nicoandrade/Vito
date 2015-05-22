<?php get_header(); ?>

    <div id="content">
                
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


                <?php get_template_part( "post_image", "image" ); ?>

                <div class="post-inside container-fluid">
                    <div class="row">
                        <div class="post-content col-md-9 col-lg-10">
                            <?php the_title( '<h1 class="post_title">', '</h1>' ); ?>

                            <div class="entry">
                                <?php
                                    echo wp_get_attachment_image( get_the_ID(), 'large' );
                                ?>
                        
                                <?php if ( has_excerpt() ) : ?>
                                    <div class="entry-caption">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .entry-caption -->
                                <?php endif; ?>


                                <div class="clearfix"></div>
                            </div><!-- /entry -->
                            <?php
                            wp_link_pages( array(
                                'before'      => '<div class="page-links">',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                'pagelink'    => __( 'Page', 'eneaa' ) . ' %',
                                'separator'   => '',
                            ) );
                            ?>

                            <div class="clearfix"></div>
                        </div><!-- /post_content -->


                        <div class="metadata col-md-3 col-lg-2">
                            <?php get_template_part( "meta", "image" ); ?>
                            <div class="clearfix"></div>
                        </div><!-- /metadata -->

                        </div><!-- /row -->
                    </div><!-- /post-inside -->

                <div class="clearfix"></div>
            </article>
                    
            <div class="clearfix"></div>
                    
                    
            <?php comments_template(); ?>

    
<?php endwhile; else: ?>
        
    
        <?php get_template_part( "/templates/content-none", "image" ); ?>
    
        
<?php endif; ?>
            
    <?php get_template_part( "/templates/afterloop", "image" ) ?> 

<?php get_footer(); ?>