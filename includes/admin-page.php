<?php
// Add admin menu  
function my_custom_plugin_menu()
{
    add_menu_page('My Plugin Settings', 'Custom Plugin', 'manage_options', 'my-plugin', 'my_plugin_page');
}
add_action('admin_menu', 'my_custom_plugin_menu');

function my_plugin_page()
{
    echo '<h1>My Custom Plugin Settings</h1>';
}
