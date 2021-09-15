<?php

function tat_add_scripts()
{
    wp_enqueue_script('jquery-ui');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('jquery-ui-slider');
    wp_register_script('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
    wp_enqueue_script('prefix_bootstrap');
    wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('prefix_bootstrap');
    
    wp_enqueue_style('tat-main-style',plugins_url().'/teacher-available-time/css/styles.css',[],1.4);
    wp_enqueue_script('tat-main-script',plugins_url().'/teacher-available-time/js/main.js',[],1.16);
    
}

add_action('wp_enqueue_scripts','tat_add_scripts');