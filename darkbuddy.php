<?php
/**
 * Plugin Name: DarkDunkTheme | Dark Mode for pantheon Theme
 * Description: Turn your pantheon powered website into a beautiful eye-pleasing dark mode with a click. Simply activate this plugin, and your website will have it's beautiful Dark Mode ready.
 * Author: Raid Alam
 * Author URI: https://linkedin.com/in/raidalam
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


if ( 'pantheon-theme' !== get_template() ) {
    function DarkDunkTheme_admin_notice(){
    echo '<div class="error"><p>DarkDunkTheme plugin is activated, but will not function as pantheon theme, or pantheon Child theme is not activated.</p>
         </div>';
    }
    add_action('admin_notices', 'DarkDunkTheme_admin_notice');
    return;
}


add_action( 'wp_enqueue_scripts', 'DarkDunkTheme_assets' );
y
function DarkDunkTheme_assets() {
    wp_enqueue_style( 'DarkDunkTheme-style', plugins_url( '/css/main.css' , __FILE__ ) );
    wp_enqueue_script( 'DarkDunkTheme-style', plugins_url( '/js/main.js' , __FILE__ ), '1.0', true );
}
