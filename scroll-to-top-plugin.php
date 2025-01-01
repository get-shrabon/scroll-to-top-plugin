<?php

/**  
 * Plugin Name: Scroll To Top  
 * Plugin URI: https://github.com/get-shrabon/scroll-to-top-plugin
 * Description: A simple WordPress plugin for beginners. Learning plugin development in WordPress.  
 * Version: 1.0.0  
 * Author: Shrabon  
 * License: GPLv2 or later
 * Text Domain: sttp
 */


// Add HTML Button
// Add Scroll to Top Button
function sttp_add_scroll_button()
{
    echo '<div id="sc_btn" class="sc_btn" title="Scroll to Top">Scroll</div>';
}
add_action('wp_footer', 'sttp_add_scroll_button');


//  Style Enqueue
function sttp_enqueue_style() {
    wp_enqueue_style('sttp-style', plugins_url('assets/css/sttp.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'sttp_enqueue_style');


// Script Enqueue
function sttp_enqueue_script() {
    wp_enqueue_script('sttp-script', plugins_url('assets/js/sttp.js', __FILE__), array(), '1.0', true) ;
}
add_action('wp_enqueue_scripts', 'sttp_enqueue_script');


?>
