<?php
namespace Jr;
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package jeffpack-theme
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function _s_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '\Jr\_s_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', '\Jr\_s_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function _s_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'lib/css/template-parts/content', 'search' );
		else :
			get_template_part( 'lib/css/template-parts/content', get_post_format() );
		endif;
	}
}
