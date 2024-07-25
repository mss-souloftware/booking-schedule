<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Hook for adding admin menus
add_action('admin_menu', 'booking_schedule_menu');

// Function to add a menu item to the admin dashboard
function booking_schedule_menu() {
    add_menu_page(
        'Booking Schedule Settings',  // Page title
        'Booking Schedule',           // Menu title
        'manage_options',            // Capability
        'my-first-plugin',           // Menu slug
        'booking_schedule_settings_page', // Function to display the settings page
        'dashicons-admin-generic',   // Icon
        90                           // Position
    );
}

// Function to display the settings page
function booking_schedule_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Booking Schedule Settings', 'my-first-plugin'); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('booking_schedule_options_group');
            do_settings_sections('booking_schedule');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
?>
