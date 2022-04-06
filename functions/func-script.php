<?php
/**
 * Script functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme scripts
 */
function gulp_wp_theme_scripts() {
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

	//FontAwesome
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/db6a90ff89.js');


	//Slick Carousel
	wp_enqueue_script('slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');

	//IsotopeJS
	wp_enqueue_script('isotopejs', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js');

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	$theme_handle_prefix = 'dablueartist';

	/**
	 * Enqueue common scripts.
	 */
	wp_enqueue_script( $theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_scripts' );
