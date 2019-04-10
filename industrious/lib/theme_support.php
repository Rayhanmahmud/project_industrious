<?php 
function industrious(){
load_theme_textdomain("industrious");
add_theme_support("title-tag");
add_theme_support("post-thumbnails");
add_theme_support("custom-background");
add_theme_support("post-formats",array("image","audio","video", "aside"));
register_nav_menu("topmenu",__("EX menu","industrious"));
}
add_action("after_setup_theme","industrious");








?>