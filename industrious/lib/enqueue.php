<?php


function industrious_header(){

wp_enqueue_style("project-main",get_theme_file_uri("/assets/css/main.css"),null,"2.0");

wp_enqueue_style("project-style",get_stylesheet_uri());

wp_enqueue_script("project-browser",get_theme_file_uri("/assets/js/browser.min.js"),array('jquery'),true,2.7);

wp_enqueue_script("project-breakpoints",get_theme_file_uri("/assets/js/breakpoints.min.js"),array('jquery'),true,2.0);

wp_enqueue_script("project-util",get_theme_file_uri("/assets/js/util.js"),array('jquery'),true,2.5);

wp_enqueue_script("main-js",get_theme_file_uri("/assets/js/main.js"),array('jquery'),true,2.9);
}


add_action("wp_enqueue_scripts","industrious_header");






?>