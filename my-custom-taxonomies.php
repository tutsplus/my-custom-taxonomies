<?php
/**
 * My Custom Taxonomies
 *
 * Demonstrates how to create custom taxonomies using the WordPress API.
 * Showcases both hierarchical and non-hierarchical taxonomies.
 *
 * @link              http://code.tutsplus.com/series/the-beginners-guide-to-wordpress-taxonomies--cms-706
 * @since             1.0.0
 * @package           Custom_Taxonomies
 *
 * @wordpress-plugin
 * Plugin Name:       My Custom Taxonomies
 * Plugin URI:        http://code.tutsplus.com/series/the-beginners-guide-to-wordpress-taxonomies--cms-706
 * Description:       Demonstrates how to create custom taxonomies using the WordPress API.
 * Version:           1.0.0
 * Author:            Tom McFarlin
 * Author URI:        http://tommcfarlin.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/** Loads the custom taxonomy class file. */
require_once( dirname( __FILE__ ) . '/class-my-custom-taxonomies.php' );

/**
 * Creates an instance of the My_Custom_Taxonomies class
 * and calls its initialization method.
 *
 * @since    1.0.0
 */
function custom_taxonomies_run() {

	$custom_tax = new My_Custom_Taxonomies();
	$custom_tax->init();

}
custom_taxonomies_run();