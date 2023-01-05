<?php
/**
 * Production Subsite Audio PLaylist
 *
 * @package ..
 */

return array(
	'title'      => __( 'Production Subsite Audio Playlist', 'ft-network-block-patterns' ),
	// 'viewportWidth' => 300,
	'categories' => array( 'page', 'columns','theatrebase' ),
	'postTypes'  => array('tb_prod_subsite','ft_production'), // unsupported, yet.
	'blockTypes' => array('core/post-content'),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"foreground","textColor":"background"} -->
		<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3vw"}}}} -->
		<div class="wp-block-group alignwide" style="padding-top:3vw"><!-- wp:columns {"verticalAlignment":null} -->
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo {"width":50,"className":"is-style-rounded"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"textColor":"background","fontSize":"large"} /-->

		<!-- wp:create-block/cbstdsys-post-subtitle {"textColor":"secondary","fontSize":"medium"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"textColor":"background","backgroundColor":"foreground","overlayMenu":"always","overlayBackgroundColor":"foreground","overlayTextColor":"background","layout":{"type":"flex","justifyContent":"right","orientation":"vertical"}} /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"color":{"background":"#1a1a1a"}},"textColor":"background"} -->
		<div class="wp-block-group alignfull has-background-color has-text-color has-background has-link-color" style="background-color:#1a1a1a"><!-- wp:group {"align":"full","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull"><!-- wp:heading {"align":"wide","style":{"color":{"text":"#3b3b3b"}},"fontSize":"x-large"} -->
		<h2 class="alignwide has-text-color has-x-large-font-size" style="color:#3b3b3b">1. Szene: <em>Der Morgen</em></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"bottom":{"color":"#d4d4b621","style":"dashed","width":"3px"}},"spacing":{"padding":{"bottom":"2vw"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center" style="border-bottom-color:#d4d4b621;border-bottom-style:dashed;border-bottom-width:3px;padding-bottom:2vw"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>01:30</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>Der Morgen tritt auf<br>Anschließend singen die Vögel &amp; die Musik beginnt ...</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:audio {"id":521} -->
		<figure class="wp-block-audio"><audio controls src="https://websites.fuer.figuren.theater/__media/2022/07/loremipsum.mp3" preload="none"></audio></figure>
		<!-- /wp:audio --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:heading {"align":"wide","style":{"color":{"text":"#3b3b3b"}},"fontSize":"x-large"} -->
		<h2 class="alignwide has-text-color has-x-large-font-size" style="color:#3b3b3b">2. Szene: <em>Vormittag</em></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"bottom":{"color":"#d4d4b621","style":"dashed","width":"3px"}},"spacing":{"padding":{"bottom":"2vw"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center" style="border-bottom-color:#d4d4b621;border-bottom-style:dashed;border-bottom-width:3px;padding-bottom:2vw"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>17:30</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>Der Morgen tritt wieder ab</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:audio {"id":521} -->
		<figure class="wp-block-audio"><audio controls src="https://websites.fuer.figuren.theater/__media/2022/07/loremipsum.mp3" preload="none"></audio></figure>
		<!-- /wp:audio --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:heading {"align":"wide","style":{"color":{"text":"#3b3b3b"}},"fontSize":"x-large"} -->
		<h2 class="alignwide has-text-color has-x-large-font-size" style="color:#3b3b3b">3. Szene: <em>Mittag</em></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"bottom":{"color":"#d4d4b621","style":"dashed","width":"3px"}},"spacing":{"padding":{"bottom":"2vw"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center" style="border-bottom-color:#d4d4b621;border-bottom-style:dashed;border-bottom-width:3px;padding-bottom:2vw"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>31:30</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>Das Telefon klingelt</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:audio {"id":521} -->
		<figure class="wp-block-audio"><audio controls src="https://websites.fuer.figuren.theater/__media/2022/07/loremipsum.mp3" preload="none"></audio><figcaption>Deutsch</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:audio {"id":521} -->
		<figure class="wp-block-audio"><audio controls src="https://websites.fuer.figuren.theater/__media/2022/07/loremipsum.mp3" preload="none"></audio><figcaption>Englisch</figcaption></figure>
		<!-- /wp:audio --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:pattern {"slug":"__ft_global/copyright"} /-->

		<!-- wp:site-title {"level":0} /--></div>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"__ft_global/merch-websfft-and-wp"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
