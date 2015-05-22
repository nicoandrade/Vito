					<form method="get" id="searchform" class="input-search" action="<?php echo home_url(); ?>/">
                        <input type="text" placeholder="Search" class="input-search" value="<?php the_search_query(); ?>" name="s" id="s">
                        <i class="fa fa-search"></i>
                        <input type="submit" class="search-button" id="searchsubmit" value="Search">
					</form>