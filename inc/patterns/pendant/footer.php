<?php
/**
 * Default footer
 *
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"left"} -->
		<p class="has-text-align-left">

		<!-- wp:pattern {"slug":"-ft-global/copyright"} /--></p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0} /-->

		<!-- wp:pattern {"slug":"-ft-global/merch-websfft-and-wp"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
