<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	// 'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"left"} -->
		<p class="has-text-align-left">

		<!-- wp:pattern {"slug":"__ft_global/copyright"} /--></p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0} /-->

		<!-- wp:pattern {"slug":"__ft_global/merch-websfft-and-wp"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
