<?php

/**
 * Plugin Name: Enqueue Rainbow.js
 * Description: Enqueues Rainbow.js requires php 5.3!
 * Plugin URI:  https://github.com/dnaber-de/enqueue-rainbow
 * Version:     2012.11.12
 * Author:      David Naber
 * Author URI:  http://dnaber.de/
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */

namespace Enqueue_Rainbow;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_rainbow_js' );

/**
 * enqueues the rainbow.js. in footer
 *
 * @wp-hook wp_enqueue_scripts
 * @return void
 */
function enqueue_rainbow_js() {

	wp_register_script(
		'rainbow_js',
		plugin_dir_url( __FILE__ ) . 'js/rainbow.min.js',
		array(),
		'1.1.8',
		TRUE
	);

	wp_enqueue_script( 'rainbow_js' );
}
