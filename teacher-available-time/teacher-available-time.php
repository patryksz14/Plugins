<?php
/*
Plugin Name: Teacher available time
Description: Custom plugin for filtering custom type posts
Version: 1.0
Author: Patryk Szczepański
*/
if(!defined('ABSPATH'))
{
    die;
}

$path = str_replace('\\', '/', plugin_dir_path(__FILE__));
require($path.'includes/teacher-available-time-scripts.php');
require($path.'includes/show-teacher-available-time-class.php');
require($path.'includes/teacher-available-time-class.php');

function register_tat()
{
    register_widget('Teacher_Available_Time');
    register_widget('Show_Teacher_Available_Time');
}
add_action('widgets_init','register_tat');

