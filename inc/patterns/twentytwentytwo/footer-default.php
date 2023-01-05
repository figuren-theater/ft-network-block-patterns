<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"nowrap"}} -->
					<div class="wp-block-group"><!-- wp:pattern {"slug":"__ft_global/copyright"} /-->

					<!-- wp:site-title {"level":0} /--></div>
					<!-- /wp:group -->

					<!-- wp:pattern {"slug":"__ft_global/merch-websfft-and-wp"} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
