<?php

function clp_add_scripts()
{
    
    wp_enqueue_script('jquery-ui-tabs');
    
    wp_register_script('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
    wp_enqueue_script('prefix_bootstrap');
    wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('prefix_bootstrap');
    
    
    wp_enqueue_style('clp-main-style',plugins_url().'/custom-likes-plugin/css/styles.css',[],1.0);
    wp_enqueue_script('clp-main-script',plugins_url().'/custom-likes-plugin/js/main.js',[],1.8);
    
}

add_action('wp_enqueue_scripts','clp_add_scripts');