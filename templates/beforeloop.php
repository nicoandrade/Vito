<div id="container" class="container">
	<section id="main" role="main" class="row">
		<?php 
		if(!is_single()){
		?>
		<div class="col-md-12">
			<div class="page_title_wrap">
				<?php 
				if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_shop()) { 
					?>
					<h1 class="page_title"><?php woocommerce_page_title(); ?></h1>
					<?php
				}else{
					?>
					<h1 class="page_title"><?php single_post_title(); ?></h1>
					<?php
				}
				?>
			</div><!-- /page_title_wrap -->
		</div><!-- /col-md-12 -->
		<?php
		}
		?>
		<?php
        $sidebar_side = of_get_option("sidebar_side");
        $sidebar_prt = "";
        if ($sidebar_side == "left") {
            $sidebar_prt = "col-md-push-3";
        }
        ?>
		<div id="content" class="col-md-9 <?php echo esc_attr( $sidebar_prt ); ?>">

