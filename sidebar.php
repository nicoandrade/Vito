        <aside id="sidebar" class="col-md-4">

            <div class="sidebar-inside">
        	     	
                <ul class="nav nav_social">

                    <?php
                    $vito_options = get_option('quemalabs_options');
                    ?>
                    <?php if(!empty($vito_options['social_facebook'])){ ?> <li class="n_facebook"><a href="<?php echo esc_url( $vito_options['social_facebook'] ); ?>" target="_blank" data-toggle="" title="Facebook" ><i class="fa fa-facebook"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_twitter'])){ ?> <li class="n_twitter"><a href="<?php echo esc_url( $vito_options['social_twitter'] ); ?>" target="_blank" data-toggle="" title="Twitter"><i class="fa fa-twitter"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_instagram']) ){ ?> <li class="n_instagram"><a href="<?php echo esc_url( $vito_options['social_instagram'] ); ?>" target="_blank" data-toggle="" title="Instagram"><i class="fa fa-instagram"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_flickr'])){ ?> <li class="n_flickr"><a href="<?php echo esc_url( $vito_options['social_flickr'] ); ?>" target="_blank" data-toggle="" title="Flickr"><i class="fa fa-flickr"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_linkedin'])){ ?> <li class="n_linkedin"><a href="<?php echo esc_url( $vito_options['social_linkedin'] ); ?>" target="_blank" data-toggle="" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_youtube'])){ ?> <li class="n_youtube"><a href="<?php echo esc_url( $vito_options['social_youtube'] ); ?>" target="_blank" data-toggle="" title="YouTube"><i class="fa fa-youtube"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_vimeo-square'])){ ?> <li class="n_vimeo-square"><a href="<?php echo esc_url( $vito_options['social_vimeo-square'] ); ?>" target="_blank" data-toggle="" title="Vimeo"><i class="fa fa-vimeo-square"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_skype']) ){ ?> <li class="n_skype"><a href="<?php echo esc_url( $vito_options['social_skype'] ); ?>" target="_blank" data-toggle="" title="Skype"><i class="fa fa-skype"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_dribbble']) ){ ?> <li class="n_dribbble"><a href="<?php echo esc_url( $vito_options['social_dribbble'] ); ?>" target="_blank" data-toggle="" title="Dribbble"><i class="fa fa-dribbble"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_google-plus']) ){ ?> <li class="n_google-plus"><a href="<?php echo esc_url( $vito_options['social_google-plus'] ); ?>" target="_blank" data-toggle="" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_tumblr']) ){ ?> <li class="n_tumblr"><a href="<?php echo esc_url( $vito_options['social_tumblr'] ); ?>" target="_blank" data-toggle="" title="Tumblr"><i class="fa fa-tumblr"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_foursquare']) ){ ?> <li class="n_foursquare"><a href="<?php echo esc_url( $vito_options['social_foursquare'] ); ?>" target="_blank" data-toggle="" title="Foursquare"><i class="fa fa-foursquare"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_pinterest']) ){ ?> <li class="n_pinterest"><a href="<?php echo esc_url( $vito_options['social_pinterest'] ); ?>" target="_blank" data-toggle="" title="Pinterest"><i class="fa fa-pinterest"></i></a></li> <?php } ?>
                    <?php if(!empty($vito_options['social_rss']) ){ ?> <li class="n_rss"><a href="<?php echo esc_url( $vito_options['social_rss'] ); ?>" target="_blank" data-toggle="" title="RSS"><i class="fa fa-rss"></i></a></li> <?php } ?>
                </ul>

                <?php 
							
				
				
				if ( is_active_sidebar( 'Sidebar Widgets' ) ) { 

    				if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
                        
                       
                    
                    <?php endif; ?>
                <?php }//if is_active_sidebar ?>                    
                        
                <div class="clearfix"></div>
            </div><!-- sidebar-inside -->
		</aside>