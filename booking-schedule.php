<?php
/**
 * Plugin Name: Booking Schedules
 * Plugin URI: https://souloftware.com/
 * Description: A simple WordPress plugin example.
 * Version: 1.0
 * Author: M. Sufyan Shaikh
 * Author URI: https://souloftware.com/contact
 * License: GPL2
 */

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Include other plugin files
include(plugin_dir_path(__FILE__) . 'utils/functions.php');
include(plugin_dir_path(__FILE__) . 'admin/admin-menu.php');
include(plugin_dir_path(__FILE__) . 'admin/settings.php');