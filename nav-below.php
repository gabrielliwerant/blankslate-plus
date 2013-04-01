<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<!--<div class="nav-previous"><?php //next_posts_link(sprintf(__( '%s older articles', 'blankslate' ),'<span class="meta-nav">&larr;</span>')) ?></div>
		<div class="nav-next"><?php //previous_posts_link(sprintf(__( 'newer articles %s', 'blankslate' ),'<span class="meta-nav">&rarr;</span>')) ?></div>-->
		<div class="nav-next"><?php next_posts_link( __('<span class="meta-nav">&#171; Older Articles</span>', 'mysalesforcecrm' ) ) ?></div>
		<div class="nav-previous"><?php previous_posts_link( __('<span class="meta-nav">Newer Articles &#187;</span>', 'mysalesforcecrm' ) ) ?></div>
	</div>
<?php endif; ?>