<div id="container" class="container">
	<section id="main" role="main" class="row">
		<div class="col-md-12">
			<div class="page_title_wrap">
				<h1 class="page_title"><?php printf( __( 'Search Results for: %s', 'eneaa' ), get_search_query() ); ?></h1>
			</div><!-- /page_title_wrap -->
		</div><!-- /col-md-12 -->
		<?php
        $sidebar_side = of_get_option("sidebar_side");
        $sidebar_prt = "";
        if ($sidebar_side == "left") {
            $sidebar_prt = "col-md-push-3";
        }
        ?>
		<div id="content" class="col-md-9 <?php echo esc_attr( $sidebar_prt ); ?>">

