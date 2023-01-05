<?php
/**
 * Production Page: Dark variant
 *
 * @package ..
 */

return array(
	'title'      => __( 'Production Page: Dark variant', 'ft-network-block-patterns' ),
	// 'viewportWidth' => 300,
	'categories' => array( 'page', 'columns','theatrebase' ),
	'postTypes'  => array('ft_production'), // unsupported, yet.
	'blockTypes' => array('core/post-content'),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","right":"3rem","bottom":"6rem","left":"3rem"}}},"backgroundColor":"cyan-bluish-gray","textColor":"black","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide has-black-color has-cyan-bluish-gray-background-color has-text-color has-background" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><!-- wp:heading {"textAlign":"right","level":1,"align":"wide","style":{"typography":{"fontWeight":"900","lineHeight":"1.4"}},"textColor":"background","fontSize":"gigantic"} -->
<h1 class="alignwide has-text-align-right has-background-color has-text-color has-gigantic-font-size" id="and-so-with-trust-and-hope-and-yet-full-of-fear-we-go-eastward" style="font-weight:900;line-height:1.4">YET FULL OF FEAR <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">WE GO</mark> </h1>
<!-- /wp:heading -->

<!-- wp:fortepress/newspaper-columns {"columns":4,"minWidth":150,"align":"wide"} -->
<div style="columns:4 150px" class="wp-block-fortepress-newspaper-columns alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">In a little while, the Professor signalled to me, so I got up and joined him. He had found a wonderful spot, a sort of natural hollow in a rock, with an entrance like a doorway between two boulders. He took me by the hand and drew me in:&nbsp;"See!" he said, "here you will be in shelter;&nbsp;and if the wolves do come I can .</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">He brought in our furs, and made a snug nest for me, and got out some provisions and forced them upon me. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">But I could not eat; to even try to do so was repulsive to me, and, much as I would have liked to please him, I could not bring myself to the attempt. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:fortepress/newspaper-columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em","margin":{"top":"5vh","bottom":"5vh"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:5vh;margin-bottom:5vh"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>Targetgroup</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-targetgroup /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>Duration</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-duration {"suffix":"Minuten","humanReadable":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>Premiere</em></h3>
<!-- /wp:heading -->

<!-- wp:theatrebase/theatrebase-production-premiere /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em>Location</em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Stadttheater <br>auf dem<br>Land</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
