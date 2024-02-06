<?php
/**
 * Handler for copy-baste blockStyle
 *
 * Coming from: ft-network-block-editor
 *
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'         => __( 'Copy & Paste Fact', 'ft-network-block-patterns' ),
	'description'   => 'Klicke auf den Textbaustein den du benötigst um ihn in deine Zwischenablage zu kopieren.',
	'keywords'      => array( 
		__( 'clipboard', 'ft-network-block-patterns' ),
		__( 'cache', 'ft-network-block-patterns' ),
	),
	'viewportWidth' => 500,
	'categories'    => array( 'text', 'theatrebase' ),
	'postTypes'     => 'tb_prod_subsite',
	'blockTypes'    => array( 'core/group' ),
	'content'       => '<!-- wp:paragraph {"textColor":"cyan-bluish-gray","className":"has-text-align-left"} -->
<p class="has-text-align-left has-cyan-bluish-gray-color has-text-color"><em>Klicke auf den Textbaustein den du benötigst um ihn in deine Zwischenablage zu kopieren.</em></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size"></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
<p style="font-style:italic;font-weight:400">... kopier mich ;)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
);
