<?php
/**
 * F.t GLOBAL: Block Patterns
 *
 * @package ft_network_block_patterns
 * @since 2022.05.16
 *
 * could be:
 *
 * 'footer-',
 * 'general-',
 * 'header-',
 * 'hidden-',
 * 'page-',
 * 'query-',
 */

return array(

	// 3rd-Party Handler for mkaz/copyright Block
	'copyright',

	// Navigation containing prepared Links to "Kontakt", "Impressum" & "Datenschutz".
	'footer-musthave-navigation',

	// Links to websfft & wp.
	'merch-websfft-and-wp',

	// TEMP disabled
	#'copy-paste-facts',

	'theater-faq',
	'theater-content-abos',

	// important parts of productions
	'production-important-metas', # <!-- wp:pattern {"slug":"__ft_global/production-important-metas"} /-->
	// 'production-important-metas-horizontal', # <!-- wp:pattern {"slug":"__ft_global/production-important-metas-horizontal"} /-->
	'production-important-metas-with-image',

	// Layouts can be used for Productions Details.
	'production-page',
	'production-page-dark',
	'production-page-dark-v2',


	// Typical full-page Layouts for typical production-subsites.
	'production-subsites-copy-paste-facts',
	'production-subsites-playlist',
	'production-subsites-playlist-v2',
	'production-subsites-todo',
);
