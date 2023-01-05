<?php
/**
 * Production Page: Light variant
 *
 * @package ..
 */

return array(
	'title'      => __( 'Production Page: Light variant', 'ft-network-block-patterns' ),
	// 'viewportWidth' => 300,
	'categories' => array( 'page', 'columns','theatrebase' ),
	'postTypes'  => array('ft_production'), // unsupported, yet.
	'blockTypes' => array('core/post-content'),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<h1 class="alignwide" id="flattern-eine-sammlung-vogelbezogener-ephemera-1" style="margin-bottom:0px;font-size:clamp(3rem, 6vw, 4.5rem)">Ein Stück übers <em>Flattern</em>:   Vogelbezogene Ephemera</h1>
<!-- /wp:heading -->

<!-- wp:create-block/cbstdsys-post-subtitle {"level":0} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
<div class="wp-block-column" style="padding-bottom:32px;flex-basis:70%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://juliaraab.figuren.test/wp-content/themes/twentytwentytwo/assets/images/bird-on-salmon.jpg" alt="Bild eines Vogels auf einem Ast"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"__ft_global/production-important-metas"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
