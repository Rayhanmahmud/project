<?php



function mamurjor_sidebar(){


register_sidebar(array(

        'name' => __('right_sidebar','mamurjor'),
        'id'  => __('sidebar1'),
        'description' => __('this is right sidebar','mamurjor'),
        'before-widget' => '<ul>',
        'after-widget' => '</ul>',
        'before-title' => '<h2>',
        'after-title' => '<h2>'

));

register_sidebar(array(

    'name' => __('footer_area','mamurjor'),
    'id'  => __('footer1'),
    'description' => __('this is right sidebar','mamurjor'),
    'before-widget' => '',
    'after-widget' => '',
    'before-title' => '',
    'after-title' => ''

));

}
add_action("widgets_init","mamurjor_sidebar");






?>