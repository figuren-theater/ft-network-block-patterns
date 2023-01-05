<?php
/**
 * Production Page: Dark variant
 *
 * @package ..
 */

return array(
	'title'         => __( 'Production Meta Data', 'ft-network-block-patterns' ),
	'description'   => __( 'All essential parts of a theater production.', 'ft-network-block-patterns' ),
	'keywords'      => array( 
		__( 'Targetgroup', 'ft-network-block-patterns' ),
		__( 'Duration', 'ft-network-block-patterns' ),
		__( 'Premiere', 'ft-network-block-patterns' ),
		__( 'Location', 'ft-network-block-patterns' ),
	),
	'viewportWidth' => 300,
	'categories'    => array( 'text', 'columns','theatrebase' ),
	'postTypes'     => array('ft_production'),
	'blockTypes'    => array('core/post-content'),
	'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
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
<!-- /wp:group -->',
);
