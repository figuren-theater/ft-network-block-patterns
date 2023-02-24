<?php declare(strict_types=1); # -*- coding: utf-8 -*-
/*
* Plugin Name:  f.t | NETWORK Block Patterns
* Description:  Removes and Re-Ads BlockPatterns taken from themes and customized for user use cases.
* Plugin URI:   https://websites.fuer.figuren.theater/
* Version:      1.0.3
* Author:       Carsten Bach
* Author URI:   https://carsten-bach.de
* License:      MIT
*/
namespace Figuren_Theater\Network\Blocks;

use Figuren_Theater\inc\EventManager;

/**
 * Manage (aka Remove & Replace) Block Patterns
 */
class Block_Patterns_Manager implements EventManager\SubscriberInterface
{
	/**
	 * [$block_patterns description]
	 * @var array
	 */
	public $block_patterns = [];

	/**
	 * [$current_theme description]
	 * @var WP_Theme
	 */
	protected $current_theme;

	/**
	 * [$template description]
	 * @var String
	 */
	protected $template;


	/**
	 * Returns an array of hooks that this subscriber wants to register with
	 * the WordPress plugin API.
	 *
	 * @return array
	 */
	public static function get_subscribed_events() : Array
	{
		return array(
			'init' => 'manage_theme_patterns',
		);
	}


	public function manage_theme_patterns() : void
	{

		/**
		 * Load i18n
		 */
		\load_plugin_textdomain( 
			'ft-network-block-patterns',
			false,
			dirname( \plugin_basename( __FILE__ ) ) . '/languages'
		);


		/**
		 * Remove WordPress Core Block Patterns
		 * if the current Theme brings some own,
		 * because
		 * Less is More
		 * 
		 * 1. Update: do so on every theme, every time, ever ...
		 */
		\remove_theme_support( 'core-block-patterns' );



		// used by all (child-) themes
		if ( $this->do_block_patterns_exist( '__ft_global' ) )
		{
			$this->register_patterns( '__ft_global' );
			$this->register_block_pattern_category();
		}

		// Load Theme and patterns to replace
		if ( ! $this->load() )
			// or say good bye early
			return;

		// theme and child-theme replacements
		// $this->unregister_patterns( $this->template );
		$this->register_patterns( $this->template );

	}



	protected function load() : bool
	{
		// get current theme
		$this->current_theme = \wp_get_theme();
		// and template (could be same as above as a String, in case it's not a Child Theme)
		$this->template      = $this->current_theme->__get('template');



		return ( 
			$this->current_theme->exists()
			&&
			$this->do_block_patterns_exist( $this->template )
		);
	}


	protected function do_block_patterns_exist( string $folder ) : bool
	{
		// could be here ...
		$patterns_of_theme = \plugin_dir_path(__FILE__) . '/inc/patterns/' . $folder . '_patterns.php';
		if ( !file_exists( $patterns_of_theme ) )
			return false;

		// load pattern-names array
		$this->block_patterns[ $folder ] = require $patterns_of_theme;
		return ( 
			isset( $this->block_patterns[ $folder ] )
			&&
			!empty( $this->block_patterns[ $folder ] )
		);
	}

/*
	protected function unregister_patterns( string $_namespace )
	{
		array_map( function( String $pattern ) use ( $_namespace )
		{
			\unregister_block_pattern( $_namespace . '/' . $pattern );
		},
			$this->block_patterns[ $_namespace ]
		);
	}*/



	protected function register_patterns( string $_namespace )
	{
		/**
		 * Filters the theme block patterns.
		 *
		 * @param array $block_patterns List of block patterns by name.
		 */
		$block_patterns = \apply_filters( 
			__NAMESPACE__ . '\\' . $_namespace . '_block_patterns',
			$this->block_patterns[ $_namespace ]
		);

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = \plugin_dir_path(__FILE__) . 'inc/patterns/'  . $_namespace . '/' . $block_pattern . '.php';

			\register_block_pattern(
				$_namespace . '/' . $block_pattern,
				require $pattern_file
			);
		}

	}

	protected function register_block_pattern_category()
	{
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

}

// 7.4. Register the Manager to our site
\Figuren_Theater\FT::site()->EventManager->add_subscriber( new Block_Patterns_Manager );
