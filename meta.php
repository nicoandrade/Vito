<div class="metadata">
	<ul>
		<li class="meta_date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_time('F j, Y'); ?></a></time></li>
		<li class="meta_comments"><?php comments_popup_link(__('No Comments', 'vito'), __('1 Comment', 'vito'), __('% Comments', 'vito')); ?></li>
        <li class="meta_author"><?php the_author() ?></li>
        <li class="meta_category"><?php the_category(', ') ?></li>
        
    </ul>
    <div class="clearfix"></div>
</div><!-- /metadata -->
			            	
			            		