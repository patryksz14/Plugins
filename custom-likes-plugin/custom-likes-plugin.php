<?php
/*
Plugin Name: Custom likes plugin
Description: With this plugin students can give a like to teachers they like
Version: 1.0
Author: Patryk Szczepański
*/
if(!defined('ABSPATH'))
{
    die;
}
require(plugin_dir_path(__FILE__).'/includes/custom-likes-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/custom-likes-class.php');

function register_clp()
{
    register_widget('Custom_Likes_Widget');
}
add_action('widgets_init','register_clp');

?>
