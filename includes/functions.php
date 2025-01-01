<?php
// Add custom shortcode  
function my_custom_shortcode()
{
    return '<p>Hello, this is my custom plugin!</p>';
}
add_shortcode('my_shortcode', 'my_custom_shortcode');
