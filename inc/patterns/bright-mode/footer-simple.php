<?php
/**
 * Footer with text, links.
 */
return array(
	'title'         => __( 'Footer with text, links.', 'ft-network-block-patterns' ),
	// 'description'      => __( 'Navigation containing prepared Links to "Kontakt", "Impressum" & "Datenschutz"', 'ft-network-block-patterns' ),
	'viewportWidth' => 1280,
	'blockTypes'    => array( 'core/template-part/footer' ),
	'categories'    => array( 'bright-mode-footer','footer' ),
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"gradient":"primary-secondary"} -->
<div class="wp-block-group alignfull has-primary-secondary-gradient-background has-background" style="margin-top:0px"><!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"main","textColor":"base","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p>© 2022 Your Company LLC · <a href="https://wordpress.org/themes/bright-mode/" data-type="URL" data-id="https://wordpress.org/themes/bright-mode/">Bright Mode Theme</a> '. esc_html__( 'by', 'bright-mode' ) .' <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#">Facebook</a>&nbsp;·&nbsp;<a href="#">Twitter</a>&nbsp;·&nbsp;<a href="#">Instagram</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
