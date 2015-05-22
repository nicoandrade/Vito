<?php
/* Single Functions ----- */
		

		function ql_string_limit_words($string, $word_limit)
		{
		  $words = explode(' ', $string, ($word_limit + 1));
		  if(count($words) > $word_limit)
		  array_pop($words);
		  return implode(' ', $words);
		}


		function ql_excerpt($num) {
		$limit = $num+1;
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt)."…";
		return $excerpt;
		}
		
		//Function to make a limit content (maybe use in Portfolios)
		function ql_content($limit) {
		  $content = explode(' ', get_the_content(), $limit);
		  if (count($content)>=$limit) {
		    array_pop($content);
		    $content = implode(" ",$content).'…';
		  } else {
		    $content = implode(" ",$content);
		  }	
		  $content = preg_replace('/\[.+\]/','', $content);
		  $content = apply_filters('the_content', $content); 
		  $content = str_replace(']]>', ']]&gt;', $content);
		  return $content;
		}


	if ( ! function_exists( 'ql_new_content_more' ) ){
		function ql_new_content_more($more) {
		       global $post;
		       return ' <br><a href="' . esc_url( get_permalink() ) . '" class="more-link btn btn-ql">'.__('Read more', 'eneaa').'</a>';
		}   
	}// end function_exists
		add_filter( 'the_content_more_link', 'ql_new_content_more' );


	if ( ! function_exists( '_wp_render_title_tag' ) ) :
		function ql_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'ql_render_title' );
	endif;
?>