<?php
/*
Plugin Name: Custom filter plugin
Description: Custom plugin for filtering custom type posts
Version: 1.0
Author: Patryk Szczepański
*/
if(!defined('ABSPATH'))
{
    die;
}
require(plugin_dir_path(__FILE__).'/includes/custom-filter-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/custom-filter-class.php');

add_action('wp_ajax_nopriv_handle_form', 'handle_form_function');
add_action('wp_ajax_handleform', 'handle_form_function');
function handle_form_function(){
echo 'hello';
exit();
}
function register_cft()
{
    register_widget('Custom_Filter_Widget');
}
add_action('widgets_init','register_cft');

?>
