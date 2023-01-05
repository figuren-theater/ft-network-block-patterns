<?php
/**
 * Production Page: 
 *
 * @package ..
 */

return array(
	'title'       => __( 'Production Meta Data incl. Hero Image and Subtitle ', 'ft-network-block-patterns' ),
	'description' => __( 'All essential parts of a theater production.', 'ft-network-block-patterns' ),
	'keywords'    => array( 
		__( 'Image', 'ft-network-block-patterns' ),
		__( 'Targetgroup', 'ft-network-block-patterns' ),
		__( 'Duration', 'ft-network-block-patterns' ),
		__( 'Premiere', 'ft-network-block-patterns' ),
		__( 'Location', 'ft-network-block-patterns' ),
	),
	// 'viewportWidth' => 300,
	'categories'  => array( 'featured', 'columns','theatrebase' ),
	'postTypes'   => array('ft_production'),
	'blockTypes'  => array('core/post-content'),
	'content'     => '<!-- wp:cover {"url":"https://assets.figuren.theater/parent-themes/ona/assets/img/minimal/ona_minimal_gallery_2.jpg","dimRatio":0,"focalPoint":{"x":"0.76","y":"0.64"},"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","isDark":false,"align":"wide","isc_image_source":"","isc_image_source_own":false,"isc_image_source_url":"","isc_image_licence":""} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-top-center" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://assets.figuren.theater/parent-themes/ona/assets/img/minimal/ona_minimal_gallery_2.jpg" style="object-position:76% 64%" data-object-fit="cover" data-object-position="76% 64%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>'.__( 'Targetgroup', 'ft-network-block-patterns' ).'</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-targetgroup /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>'.__( 'Duration', 'ft-network-block-patterns' ).'</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-duration {"suffix":"Minuten","humanReadable":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>'.__( 'Premiere', 'ft-network-block-patterns' ).'</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-premiere /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>'.__( 'Location', 'ft-network-block-patterns' ).'</em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Stadttheater <br>auf dem<br>Land</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"15vh"}}}} /-->

<!-- wp:create-block/cbstdsys-post-subtitle {"level":0} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
