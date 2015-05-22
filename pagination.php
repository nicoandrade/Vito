<div class="clearfix"></div>
<?php

$temp_query = $wp_query;

if (isset($the_query)) {
	$wp_query = $the_query;
}

the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'eneaa' ),
	'next_text'          => __( 'Next page', 'eneaa' )
) );
$wp_query = $temp_query;
wp_reset_postdata();
?>