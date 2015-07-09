<?php
/*
Plugin Name: Dashicons SVGs
Plugin URI: https://wordpress.org/plugins/dashicons-svgs/
Description: Use SVGs for Dashicons instead of Dashicons-the-font.
Version: 0.0.1
Author: Dashicons Team
Author URI: https://make.wordpress.org/design/tag/dashicons/
Text Domain: dashicons
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

define( 'DASHICONS_SVG_URL', plugins_url( '/icons/dashicons.svg', __FILE__ ) );

/**
 * Return the SVG code for an icon
 *
 * @param string $icon  Slug for the desired SVG
 * @return string SVG code to display the selected icon
 */
function dashicons_svg_icon( $icon ){
	return sprintf( '<svg><use xlink:href="%s" /></svg>', esc_url( DASHICONS_SVG_URL . '#' . $icon ) );
}

// Admin Menu
require __DIR__ . '/admin-menu.php';
new WP_Dashicons_Admin_Menu;
