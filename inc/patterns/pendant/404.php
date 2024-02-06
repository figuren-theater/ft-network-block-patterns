<?php
/**
 * A 404 page
 *
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'   => __( 'A 404 page', 'twentytwentytwo' ),
	'content' => '<!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="alignwide has-text-align-left">' . esc_html__( "There's nothing here.", 'pendant' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"0.8em"} -->
<div style="height:0.8em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p class="has-text-align-left has-medium-font-size">
' . esc_html__( 'This page could not be found.', 'pendant' ) . '
</p>
<!-- /wp:paragraph -->


</div>
<!-- /wp:group -->',
);
