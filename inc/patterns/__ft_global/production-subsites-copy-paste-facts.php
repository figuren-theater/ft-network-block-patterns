<?php
/**
 * Production Subsites: Todo
 * Handler for copy-baste blockStyle
 *
 * coming from: ft-network-blocks-blockmanager
 */
return array(
	'title'       => __( 'Copy & Paste Facts for a production', 'ft-network-block-patterns' ),
	'description' => 'Klicke einfach auf die Textbausteine die du benötigst um sie in deine Zwischenablage zu kopieren.',
	// 'viewportWidth' => 300,
	'categories'  => array( 'page','theatrebase' ),
	'postTypes'   => array('tb_prod_subsite','ft_production'), // unsupported, yet.
	'blockTypes'  => array('core/post-content'),
	'content'     => '<!-- wp:heading -->
<h2>Copy &amp; Paste Fakten zum Stück </h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Alles Wichtige für die Öffentlichkeitsarbeit von Veranstalter*innen und zur Verwendung in Publikationen aller Art, auch zur Socialmedia Nutzung.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","textColor":"cyan-bluish-gray"} -->
<p class="has-text-align-left has-cyan-bluish-gray-color has-text-color"><em>Klicke auf den Textbaustein den du benötigst um ihn in deine Zwischenablage zu kopieren.</em></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":"1","pages":"1","offset":0,"postType":"ft_production","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Titel</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:post-title {"level":4,"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Untertitel</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:create-block/cbstdsys-post-subtitle {"level":0} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Kurztext</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Ankündigung</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Zielgruppe</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:theatrebase/theatrebase-production-targetgroup /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Dauer</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:theatrebase/theatrebase-production-duration {"textAlign":"left","suffix":"Minuten (ohne Pause)"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Premiere</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:theatrebase/theatrebase-production-premiere /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Förderer</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
<p style="font-style:italic;font-weight:400">Unterstützt durch das Land XYZ und die ABC Stiftung</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"right","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size">Website</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-copy-2-clipboard","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-copy-2-clipboard" style="font-style:italic;font-weight:400"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
<p style="font-style:italic;font-weight:400"><code>https://website-zum-stueck.puppen.theater</code></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->',
);
