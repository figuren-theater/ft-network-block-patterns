<?php
/**
 * Subscribe to my content in 1000 ways
 * 
 * Including RSS, iCal, Newsletter etc.
 *
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'       => __( 'Theater Contents Subsciptions', 'ft-network-block-patterns' ),
	'description' => __( 'Button-Groups to subscribe to all channels of the website.', 'ft-network-block-patterns' ),
	'keywords'    => array( 
		__( 'RSS', 'ft-network-block-patterns' ),
		__( 'Abo', 'ft-network-block-patterns' ),
		__( 'Feed', 'ft-network-block-patterns' ),
		__( 'Newsletter', 'ft-network-block-patterns' ),
	),
	'categories'  => array( 'text', 'buttons', 'call-to-action', 'theatrebase' ),
	'content'     => '<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Alle Inhalte im Abo, mit diesen RSS-Feeds:</p>
<!-- /wp:paragraph -->

<!-- wp:figurentheater/social-links -->
<div class="wp-block-figurentheater-social-links"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"1em","left":"1em"}}}} -->
<ul class="wp-block-social-links has-visible-labels is-style-default"><!-- wp:social-link {"url":"/feed/","service":"feed","label":"Aktuelles"} /-->

<!-- wp:social-link {"url":"/produktionen/feed/","service":"feed","label":"Neue Produktionen"} /-->

<!-- wp:social-link {"url":"#","service":"feed","label":"Termine"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:figurentheater/social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Wahlweise per Email im monatlichen</p>
<!-- /wp:paragraph -->

<!-- wp:figurentheater/social-links -->
<div class="wp-block-figurentheater-social-links"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"1em","left":"1em"}}}} -->
<ul class="wp-block-social-links has-visible-labels is-style-default"><!-- wp:social-link {"url":"#","service":"mail","label":"Newsletter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:figurentheater/social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Im Chat auch ganz "persönlich"</p>
<!-- /wp:paragraph -->

<!-- wp:figurentheater/social-links -->
<div class="wp-block-figurentheater-social-links"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"1em","left":"1em"}}}} -->
<ul class="wp-block-social-links has-visible-labels is-style-default"><!-- wp:social-link {"url":"#","service":"skype","label":"via Skype"} /-->

<!-- wp:social-link {"url":"#","service":"telegram","label":"auf Telegram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:figurentheater/social-links --></div>
<!-- /wp:group -->',
);
