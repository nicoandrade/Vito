<div id="container" class="container">
    <section id="main" role="main" class="row">
        <div class="col-md-12">
            <div class="page_title_wrap"> 
                <?php 
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
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