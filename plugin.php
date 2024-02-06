<?php
/**
 * Load the ft-network-block-patterns WordPress plugin.
 * 
 * Replaces block-patterns taken from themes,
 * with customized versions for the figuren.theater WordPress multisite network.
 *
 * @package           figuren-theater/ft-network-block-patterns
 * @author            figuren.theater
 * @copyright         2024 figuren.theater
 * @license           GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name:       f.t | NETWORK Block Patterns
 * Plugin URI:        https://github.com/figuren-theater/ft-network-block-patterns
 * Description:       Replaces block-patterns taken from themes with customized versions for the figuren.theater WordPress multisite network.
 * Version:           1.0.5
 * Requires at least: 6.0
 * Requires PHP:      7.1
 * Author:            figuren.theater
 * Author URI:        https://figuren.theater
 * Text Domain:       ft-network-block-patterns
 * Domain Path:       /languages
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/figuren-theater/ft-network-block-patterns
 */

namespace Figuren_Theater\Site_Editing\FT_Network_Block_Patterns;

use function add_action;

const DIRECTORY = __DIR__;

/**
 * TO REMOVE 
 * 
 * @todo https://github.com/figuren-theater/ft-network-block-patterns/issues/7 Add (composer) autoloading strategy
 */
require_once DIRECTORY . '/inc/namespace.php'; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

add_action( 'init', __NAMESPACE__ . '\\register' );
