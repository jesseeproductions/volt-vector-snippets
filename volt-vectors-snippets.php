<?php
/*
Plugin Name: Volt Vectors Snippets
Plugin URI: http://voltvectors.com/wp
Description: A Plugin to store snippets for the Volt Vectors Pro
Author: brianjessee
Version: 1.0
Author URI: http://voltvectors.com/wp
*/

/* Enter First Snippet below without the opening php tag ( <?php ) */

/**
 * Append custom meta to post content for all post types.
 *
 * @since 0.1.0
 *
 * @param string  $content The original content.
 * @param WP_Post $post    The post object.
 *
 * @return string Modified content with appended custom meta.
 */
function pngx_volt_append_meta_to_content( $content, $post ) {
    $additional_info = get_post_meta( $post->ID, 'additional_info', true );
    return $content . ' ' . $additional_info;
}
add_filter( 'pngx_volt_vectors_post_loader_content', 'pngx_volt_append_meta_to_content', 10, 2 );
