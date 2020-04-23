<?php

/**
 * Plugin Name: Rivendellweb variations
 * Plugin URI: https://github.com/WordPress/rivendellweb-variations
 * Description: Rivendellweb blocks variations.
 * Version: 0.0.1
 * Author: Carlos Araya
 *
 * @package rivendellweb-blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function rivendellweb_enqueue_variations() {
    wp_enqueue_script(
        'rivendellweb-script',
        plugins_url( './src/block-variations.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/block-variations.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'rivendellweb_enqueue_variations' );

function rivendellweb_variation_styles() {
	wp_enqueue_style(
		'rivendellweb_variations_css',
		plugins_url( './src/block-variations.css', __FILE__ ) );
}
add_action( 'enqueue_block_assets', 'rivendellweb_variation_styles' );

