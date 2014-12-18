<?php
/**
 * @package View_Count
 * @version 1.0
 */
/*
Plugin Name: View Count
Plugin URI: http://wordpress.org/plugins
Description: Article views counter
Author: Abdul Elahi
Version: 1.0
Author URI: http://wordpress.org
*/

define( 'VIEWCOUNT__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'VIEWCOUNT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( VIEWCOUNT__PLUGIN_DIR .'widget.php' );

/**
 * Save view count
 */
function vc_save_count() {
	global $post;
	
	$count = vc_get_views( $post->ID );
	
	update_post_meta( $post->ID, 'vc_views', ($count + 1) );
}
add_action('wp_head', 'vc_save_count');


/**
 * Get current post views
 *
 * @param int $id Post ID
 *
 * @return int Total view count the post.
 */
function vc_get_views( $id = '' ) {
	if( !$id )
		return false;
		
	return (int) get_post_meta( $id, 'vc_views', true );
}

/**
 * Register a widget
 */
function vc_register_widget() {
	register_widget( 'Viewcount_Widget' );
}
add_action( 'widgets_init', 'vc_register_widget' );

/**
 * For debug purpose
 */
function vc_debug_var( $arr = array(), $exit = false ) {
	if( !sizeof( $arr ) )
		return false;
		
	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
	
	if( $exit )
		exit;
}

