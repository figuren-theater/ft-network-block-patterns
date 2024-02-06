<?php
/**
 * Figuren_Theater NETWORK Block Patterns.
 *
 * @package figuren-theater/ft-network-block-patterns
 */

namespace Figuren_Theater\Site_Editing\FT_Network_Block_Patterns;

use function apply_filters;
use function load_plugin_textdomain;
use function register_block_pattern;
use function remove_theme_support;
use function wp_get_theme;

/**
 * Register plugin.
 *
 * @return void
 */
function register(): void {

	/**
	 * Load i18n
	 */
	load_plugin_textdomain(
		'ft-network-block-patterns',
		false,
		dirname( DIRECTORY ) . '/languages'
	);


	/**
	 * Remove WordPress Core Block Patterns
	 * 
	 * Because 'Less is More'
	 * 
	 * 1. Update: do so on every theme, every time, ever ...
	 */
	remove_theme_support( 'core-block-patterns' );


	/**
	 * Check whether patterns exists, to load globally.
	 */
	if ( do_block_patterns_exist( '__ft_global' ) ) {
		// Registers two custom pattern-categories to WordPress.
		register_block_pattern_categories();
		// Register patterns to load globally.
		register_patterns( '__ft_global' );
	}

	// Get current theme.
	$current_theme = wp_get_theme();


	// Check whether the theme exists.
	if ( ! $current_theme->exists() ) {
		return;
	}

	// Get current template.
	// Could be same as $current_theme as a String, in case it's not a Child Theme.
	// Casted to String like hell.
	$template = '' . $current_theme->__get( 'template' );

	// Check whether some patterns to replace exists for the given parent-theme.
	if ( ! do_block_patterns_exist( $template ) ) {
		return;
	}

	// Finally, register the theme and child-theme replacements.
	register_patterns( $template );
}


function do_block_patterns_exist( string $folder ): bool {
	// could be here ...
	$patterns_of_theme = DIRECTORY . '/inc/patterns/' . $folder . '--patterns.php';
	if ( ! file_exists( $patterns_of_theme ) ) {
		return false;
	}

	// load pattern-names array
	$this_NEEDS2CHANGE__block_patterns[ $folder ] = require $patterns_of_theme;
	return (
		isset( $this_NEEDS2CHANGE__block_patterns[ $folder ] )
		&&
		! empty( $this_NEEDS2CHANGE__block_patterns[ $folder ] )
	);
}



function register_patterns( string $_namespace ): void {
	/**
	 * Filters the theme block patterns.
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters(
		__NAMESPACE__ . '\\' . $_namespace . '_block_patterns',
		$this_NEEDS2CHANGE__block_patterns[ $_namespace ]
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = DIRECTORY . 'inc/patterns/' . $_namespace . '/' . $block_pattern . '.php';

		register_block_pattern(
			$_namespace . '/' . $block_pattern,
			require $pattern_file
		);
	}
}

/**
 * Registers two custom pattern-categories to WordPress.
 * 
 * One for internal and administrative patterns, only to be used by the platform-crew.
 * And another for public use by all editors across the network, intended for theater-related patterns.
 *
 * @return void
 */
function register_block_pattern_categories(): void {
	\register_block_pattern_category(
		'theatrebase',
		[
			'label' => __( 'Theater', 'ft-network-block-patterns' ),
		]
	);
	\register_block_pattern_category(
		'figurentheater',
		[
			'label' => __( 'figuren.theater', 'ft-network-block-patterns' ),
		]
	);
}
