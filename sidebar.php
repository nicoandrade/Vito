        <aside id="sidebar" class="col-md-4">

            <div class="sidebar-inside">
        	     	
                <ul class="nav nav_social">

                    <?php
                    $sidebar_hlink_facebook = "";
                    $sidebar_hlink_twitter = "";
                    $sidebar_hlink_flickr = "";
                    $sidebar_hlink_youtube = "";
                    $sidebar_hlink_vimeo = "";
                    $sidebar_hlink_skype = "";
                    $sidebar_hlink_linkedin = "";
                    $sidebar_hlink_dribbble = "";
                    $sidebar_hlink_forrst = "";
                    $sidebar_hlink_google = "";
                    $sidebar_hlink_tumblr = "";
                    $sidebar_hlink_instagram = "";
                    $sidebar_hlink_foursquare = "";
                    $sidebar_hlink_pinterest = "";
                    $sidebar_hlink_rss = "";
                    ?>
                    <?php if($sidebar_hlink_facebook){ ?> <li class="n_facebook"><a href="<?php echo esc_url( $sidebar_hlink_facebook ); ?>" target="_blank" data-toggle="tooltip" title="Facebook" ><i class="fa fa-facebook"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_twitter){ ?> <li class="n_twitter"><a href="<?php echo esc_url( $sidebar_hlink_twitter ); ?>" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_flickr){ ?> <li class="n_flickr"><a href="<?php echo esc_url( $sidebar_hlink_flickr ); ?>" target="_blank" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_linkedin){ ?> <li class="n_linkedin"><a href="<?php echo esc_url( $sidebar_hlink_linkedin ); ?>" target="_blank" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_youtube){ ?> <li class="n_youtube"><a href="<?php echo esc_url( $sidebar_hlink_youtube ); ?>" target="_blank" data-toggle="tooltip" title="YouTube"><i class="fa fa-youtube-play"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_vimeo){ ?> <li class="n_vimeo"><a href="<?php echo esc_url( $sidebar_hlink_vimeo ); ?>" target="_blank" data-toggle="tooltip" title="Vimeo"><i class="fa fa-vimeo"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_skype){ ?> <li class="n_skype"><a href="<?php echo esc_url( $sidebar_hlink_skype ); ?>" target="_blank" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_dribbble){ ?> <li class="n_dribbble"><a href="<?php echo esc_url( $sidebar_hlink_dribbble ); ?>" target="_blank" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_forrst){ ?> <li class="n_forrst"><a href="<?php echo esc_url( $sidebar_hlink_forrst ); ?>" target="_blank" data-toggle="tooltip" title="Forrst"><i class="fa fa-forrst"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_google){ ?> <li class="n_google"><a href="<?php echo esc_url( $sidebar_hlink_google ); ?>" target="_blank" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_tumblr){ ?> <li class="n_tumblr"><a href="<?php echo esc_url( $sidebar_hlink_tumblr ); ?>" target="_blank" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_instagram){ ?> <li class="n_instagram"><a href="<?php echo esc_url( $sidebar_hlink_instagram ); ?>" target="_blank" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_foursquare){ ?> <li class="n_foursquare"><a href="<?php echo esc_url( $sidebar_hlink_foursquare ); ?>" target="_blank" data-toggle="tooltip" title="Foursquare"><i class="fa fa-foursquare"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_pinterest){ ?> <li class="n_pinterest"><a href="<?php echo esc_url( $sidebar_hlink_pinterest ); ?>" target="_blank" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li> <?php } ?>
                    <?php if($sidebar_hlink_rss){ ?> <li class="n_rss"><a href="<?php echo esc_url( $sidebar_hlink_rss ); ?>" target="_blank" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li> <?php } ?>
                </ul>

                <?php 
							
				
				
				if ( is_active_sidebar( 'Sidebar Widgets' ) ) { 

    				if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
                        
                       
                    
                    <?php endif; ?>
                <?php }//if is_active_sidebar ?>                    
                        
                <div class="clearfix"></div>
            </div><!-- sidebar-inside -->
		</aside>