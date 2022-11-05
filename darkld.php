<?php
/**
 * Plugin Name: DarkLD | Dark Mode plugin for Learndash
 * Description: Turn your LearnDash website into a dark mode with a click. Simply activate this plugin, and your Learndash Platform will have it's beautiful Dark Mode ready.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/raiinsharwar
 * Version: 1.0.0
 */

function darkld_enqueue_styles() {
    $file_url = plugins_url('/css/stylesheet.css', __FILE__);
    wp_enqueue_style( 'darkld_sytlesheet', $file_url);
}

add_action('wp_enqueue_scripts', 'darkld_enqueue_styles' );
