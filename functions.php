<?php


function personal_side(){

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_image_size('our_image',750,800 );

}
add_action("after_setup_theme","personal_side");


function sakline_stylesheet_link(){

    wp_enqueue_style('style_make', get_stylesheet_uri () );

    wp_enqueue_style('bootstreat_add',"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts','sakline_stylesheet_link');