<div class="clearfix"></div>
<?php

$temp_query = $wp_query;

if (isset($the_query)) {
	$wp_query = $the_query;
}
$pagination = get_the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'vito' ),
	'next_text'          => __( 'Next page', 'vito' )
) );
if ($pagination) {
	echo '<div class="pagination_wrap">';
	echo $pagination;
	echo '</div><!-- /pagination_wrap -->';
}
$wp_query = $temp_query;
wp_reset_postdata();
?>