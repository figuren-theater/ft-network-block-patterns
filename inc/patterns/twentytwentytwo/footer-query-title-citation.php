<?php
/**
 * Footer with query, title, and citation
 */
return array(
	'title'      => __( 'Footer with query, title, and citation', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"queryId":16,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template -->
					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

					<!-- wp:post-excerpt /-->

					<!-- wp:post-date {"isLink":true} /-->
					<!-- /wp:post-template --></div>
					<!-- /wp:query -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /-->

					<!-- wp:group {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-group"><!-- wp:pattern {"slug":"__ft_global/merch-websfft-and-wp"} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
