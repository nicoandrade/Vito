	<header id="header">
		<div class="container">
 			<div class="row">

	    		<div class="logo_container col-md-12">
	    			<div class="logo_move">
		                <a href="<?php echo home_url(); ?>/" class="ql_logo google-font"><?php if($logo = of_get_option('logo')){ ?><img src="<?php echo esc_url( $logo ); ?>" <?php if($logo_retina = of_get_option('logo_retina')){ ?> data-at2x="<?php echo esc_url( $logo_retina ); ?>" <?php } ?> alt="<?php bloginfo('name'); ?>"  /><?php }else{ bloginfo('name');}?></a>
	                </div>
	                <?php
	                $show_desc = of_get_option('show_desc');
	                global $wp_customize;
	                if ($show_desc) {
	                ?>
	                	<div class="logo_desc_wrap">
                            <hr class="hr-small">
		            		<p class="logo_desc"><?php bloginfo('description'); ?></p>
		            	</div>
		            <?php
		            }else if (!$show_desc && isset( $wp_customize )) {
		            ?>
		            	<div class="logo_desc_wrap">
                            <hr class="hr-small">
		            		<p class="logo_desc hidden"><?php bloginfo('description'); ?></p>
		            	</div>
		            <?php
		            }else if ($show_desc && isset( $wp_customize )) {
		            ?>
		            	<div class="logo_desc_wrap">
                            <hr class="hr-small">
		            		<p class="logo_desc"><?php bloginfo('description'); ?></p>
		            	</div>
		            <?php
		            }
	                ?>
	            </div><!-- /logo_container -->

	            <button class="ql_nav_btn"><i class="fa fa-navicon"></i><i class="fa fa-arrow-left"></i></button>


	            <?php 
			    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 
			    ?> 
			    <?php global $woocommerce; ?>
	            <?php 
	            	if($woocommerce->cart->cart_contents_count > 0){ 
	            		$cart_class = "cart_show";
	            	}else{
	            		$cart_class = "";
	            	}

	            ?>
			        <a href="#" class="ql_woo_cart_button <?php echo esc_attr( $cart_class ); ?>"><i class="fa fa-shopping-cart"></i>
						<?php if($woocommerce->cart->cart_contents_count > 0){ ?>
			            <span class="ql_woo_cart_qty"><?php echo esc_html( $woocommerce->cart->cart_contents_count );?></span>
			            <?php } ?>

			        </a>
			    <?php 
			    }
			    ?>

				<div class="clearfix"></div>
			</div><!-- row-->
		</div><!-- /container -->
    </header>