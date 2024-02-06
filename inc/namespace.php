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
	$patterns_list = do_block_patterns_exist( '-ft-global' );
	if ( false !== $patterns_list ) {
		// Registers two custom pattern-categories to WordPress.
		register_block_pattern_categories();
		// Register patterns to load globally.
		register_patterns( '-ft-global', $patterns_list );
	}

	// Get current theme.
	$current_theme = wp_get_theme();


	// Check whether the theme exists.
	if ( ! $current_theme->exists() ) {
		return;
	}

	// Get current template.
	// Could be same as $current_theme as a String, in case it's not a Child Theme.
	$template = $current_theme->__get( 'template' );

	// Add some typesafety.
	if ( ! \is_string( $template ) ) {
		return;
	}

	/**
	 * Check whether some patterns to replace exists for the given parent-theme.
	 */
	$patterns_list = do_block_patterns_exist( $template );
	if ( false !== $patterns_list ) {
		// Finally, register the theme and child-theme replacements.
		register_patterns( $template, $patterns_list );
	}
}

/**
 * Checks if patterns exists for a given theme.
 * 
 * Returns false or a list of pattern slugs.
 *
 * @param  string $theme Slug of a theme.
 *
 * @return false|string[]
 */
function do_block_patterns_exist( string $theme ): false|array {
	// could be here ...
	$patterns_of_theme = DIRECTORY . '/inc/patterns/' . $theme . '--patterns.php';
	if ( ! file_exists( $patterns_of_theme ) ) {
		return false;
	}

	// Load pattern-names to replace into array.
	$pattern_list = require $patterns_of_theme; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingVariable

	// Check for the existence of patterns.
	if ( ! isset( $pattern_list ) || empty( $pattern_list ) ) {
		return false;
	}

	// Everything good, so return the list of patterns to replace within the current theme.
	return $pattern_list;
}


/**
 * Registers a bunch of given block-patterns.
 * 
 * Does this for a given theme by looking the paaterns up in a defined location for each theme.
 *
 * @param  string   $theme          Slug of a theme.
 * @param  string[] $block_patterns Array of block-pattern slugs.
 *
 * @return void
 */
function register_patterns( string $theme, array $block_patterns ): void {

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = DIRECTORY . 'inc/patterns/' . $theme . '/' . $block_pattern . '.php';

		register_block_pattern(
			$theme . '/' . $block_pattern,
			require $pattern_file  // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingVariable
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
