<?php
/**
 * Footer with social links and copyright
 * 
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'      => __( 'Footer with social links and copyright', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dforeground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground)","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center","flexWrap":"nowrap"}} -->
					<div class="wp-block-group"><!-- wp:pattern {"slug":"-ft-global/copyright"} /-->

					<!-- wp:site-title {"level":0} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
