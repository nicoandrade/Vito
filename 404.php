	<?php get_header(); ?>
		<div id="content">
                        
             <article class="error-404 not-found">
                <div class="post-inside">
                        
                        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'vito' ); ?></h1>
                        
                        <p><?php _e( 'It looks like nothing was found at this location.', 'vito' ); ?></p>
                        
                    <div class="clearfix"></div>
                </div>
                            
             </article>
        <?php get_template_part( "/templates/afterloop", "404" ) ?> 
	
	<?php get_footer(); ?>