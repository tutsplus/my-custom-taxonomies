<?php

/**
 * The core plugin class file
 *
 * Defines the functions necessary to register our custom taxonomies with
 * WordPress.
 *
 * @link       http://code.tutsplus.com/series/the-beginners-guide-to-wordpress-taxonomies--cms-706
 * @since      1.0.0
 *
 * @package    Custom_Taxonomies
 * @author     Tom McFarlin <tom@tommcfarlin.com>
 */
class My_Custom_Taxonomies {

	/**
	 * Initializes the plugin by registering the hooks necessary
	 * for creating our custom taxonomies within WordPress.
	 *
	 * @since    1.0.0
	 */
	public function init() {

		add_action( 'init', array( $this, 'init_photographs' ) );
		add_action( 'init', array( $this, 'init_videos' ) );
		add_action( 'init', array( $this, 'init_film_type' ) );

	}

	/**
	 * Creates the Photographs taxonomy that appears on all Post dashboard
	 * pages.
	 *
	 * @since    1.0.0
	 */
	public function init_photographs() {

		$labels = array(
			'name'          => 'Photographs',
			'singular_name' => 'Photograph',
			'edit_item'     => 'Edit Photograph',
			'update_item'   => 'Update Photograph',
			'add_new_item'  => 'Add New Photograph',
			'menu_name'     => 'Photographs'
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'photograph' )
		);

		register_taxonomy( 'photograph', 'post', $args );

	}

	/**
	 * Creates the Videos taxonomy that appears on all Post dashboard
	 * pages.
	 *
	 * @since    1.0.0
	 */
	public function init_videos() {

		$labels = array(
			'name'          => 'Videos',
			'singular_name' => 'Video',
			'edit_item'     => 'Edit Video',
			'update_item'   => 'Update Video',
			'add_new_item'  => 'Add New Video',
			'menu_name'     => 'Videos'
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'video' )
		);

		register_taxonomy( 'video', 'post', $args );

	}

	/**
	 * Creates the Film Type taxonomy that appears on all Post dashboard
	 * pages.
	 *
	 * @since    1.0.0
	 */
	public function init_film_type() {

		$labels = array(
			'name'          => 'Film Type',
			'singular_name' => 'Film Type',
			'edit_item'     => 'Edit Film Type',
			'update_item'   => 'Update Film Type',
			'add_new_item'  => 'Add New Film Type',
			'menu_name'     => 'Film Type'
		);

		$args = array(
			'hierarchical'      => false,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'film-type' )
		);

		register_taxonomy( 'film-type', 'post', $args );

	}

}