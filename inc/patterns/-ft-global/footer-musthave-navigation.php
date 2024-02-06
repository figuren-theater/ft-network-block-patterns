<?php
/**
 * Must-have Navigation
 *
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'         => __( 'Minimal Navigation', 'ft-network-block-patterns' ),
	'description'   => __( 'Navigation containing prepared Links to "Kontakt", "Impressum" & "Datenschutz"', 'ft-network-block-patterns' ),
	'viewportWidth' => 400,
	'categories'    => array( 'footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
	'content'       => '<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Kontakt</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/impressum/">Impressum</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/datenschutz/">Datenschutz</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);
