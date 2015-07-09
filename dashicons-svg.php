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

// Admin Menu
require __DIR__ . '/admin-menu.php';
new WP_Dashicons_Admin_Menu;
