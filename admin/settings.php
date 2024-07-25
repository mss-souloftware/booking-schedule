<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Hook for registering plugin settings
add_action('admin_init', 'booking_schedule_settings');

// Function to register plugin settings
function booking_schedule_settings() {
    register_setting('booking_schedule_options_group', 'booking_schedule_option_name');
    add_settings_section(
        'booking_schedule_main_section',       // Section ID
        'Main Settings',                      // Section title
        'booking_schedule_section_text',       // Callback function
        'booking_schedule'                     // Page slug
    );
    add_settings_field(
        'booking_schedule_option_name',        // Field ID
        'Sample Option',                      // Field title
        'booking_schedule_setting_input',      // Callback function
        'booking_schedule',                    // Page slug
        'booking_schedule_main_section'        // Section ID
    );
}

// Callback function for the settings section
function booking_schedule_section_text() {
    echo '<p>Enter your settings below:</p>';
}

// Callback function for the settings field
function booking_schedule_setting_input() {
    $option = get_option('booking_schedule_option_name');
    echo '<input type="text" id="booking_schedule_option_name" name="booking_schedule_option_name" value="' . esc_attr($option) . '" />';
}
?>
