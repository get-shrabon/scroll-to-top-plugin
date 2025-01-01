<?php

/**  
 * Plugin Name: Scroll To Top  
 * Plugin URI: https://github.com/get-shrabon/scroll-to-top-plugin
 * Description: A simple WordPress plugin for beginners.  
 * Version: 1.0  
 * Author: Shrabon  
 */

// Prevent direct access to the file  
if (!defined('ABSPATH')) {
    exit;
}

// Include files  
include(plugin_dir_path(__FILE__) . 'includes/functions.php');

// Plugin activation hook  
function scroll_to_top_plugin_activate()
{
    // Code to run on activation  
}
register_activation_hook(__FILE__, 'scroll_to_top_plugin_activate');


// Plugin deactivation hook  
function scroll_to_top_plugin_deactivate()
{
    // Code to run on deactivation  
}
register_deactivation_hook(__FILE__, 'scroll_to_top_plugin_deactivate');

?>