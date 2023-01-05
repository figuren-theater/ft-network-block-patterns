<?php
/**
 * Footer with navigation and copyright
 */
return array(
	'title'      => __( 'Footer with navigation and copyright', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
					<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:pattern {"slug":"__ft_global/footer-musthave-navigation"} /-->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center","flexWrap":"nowrap"}} -->
					<div class="wp-block-group"><!-- wp:pattern {"slug":"__ft_global/copyright"} /-->

					<!-- wp:site-title {"level":0} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
