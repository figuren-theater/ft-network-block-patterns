<?php
/**
 * Dark footer wtih title and citation
 */
return array(
	'title'      => __( 'Dark footer with title and citation', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"nowrap"}} -->
					<div class="wp-block-group"><!-- wp:pattern {"slug":"__ft_global/copyright"} /-->

					<!-- wp:site-title {"level":0} /--></div>
					<!-- /wp:group -->

					<!-- wp:pattern {"slug":"__ft_global/merch-websfft-and-wp"} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
