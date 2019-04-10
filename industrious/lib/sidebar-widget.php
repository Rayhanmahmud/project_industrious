<?php



function industrious_sidebar(){


register_sidebar(array(

        'name' => __('right_sidebar','industrious'),
        'id'  => __('sidebar1'),
        'description' => __('this is right sidebar','industrious'),
        'before-widget' => '<ul>',
        'after-widget' => '</ul>',
        'before-title' => '<h2>',
        'after-title' => '<h2>'

));

register_sidebar(array(

    'name' => __('footer_area','industrious'),
    'id'  => __('footer1'),
    'description' => __('this is right sidebar','industrious'),
    'before-widget' => '',
    'after-widget' => '',
    'before-title' => '',
    'after-title' => ''

));

}
add_action("widgets_init","industrious_sidebar");






?>