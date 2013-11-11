<?php

/**
 * Plugin Name: Enqueue Rainbow.js
 * Description: Enqueues Rainbow.js requires php 5.3!
 * Plugin URI:
 * Version:     2012.11.11
 * Author:      David Naber
 * Author URI:  http://dnaber.de/
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */

namespace Enqueue_Rainbow;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\for_frank' );

/**
 * enqueues the rainbow.js. in footer
 *
 * @wp-hook wp_enqueue_scripts
 * @return void
 */
function for_frank() {

	wp_register_script(
		'rainbow_js',
		plugin_dir_url( __FILE__ ),
		array(),
		'1.1.8',
		TRUE
	);

	wp_enqueue_script( 'rainbow_js' );
}
