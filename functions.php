<?php


function personal_side(){

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_image_size('our_image',750,800 );

register_nav_menu('header-menu',__('main menu','sakline'));

}
add_action("after_setup_theme","personal_side");


function sakline_stylesheet_link(){
    wp_enqueue_style('style_make', get_stylesheet_uri () );
    wp_enqueue_style('bootstreat_add',"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_script('main-script',get_theme_file_uri().'/assets/js/scripts.js',array('jquery'),'1.0.0', true);
}
add_action('wp_enqueue_scripts','sakline_stylesheet_link');


function sakline_widgets(){
register_sidebar(array(
    'name'                  =>__('Sakline Right sidebar','Sakline') ,
    'id'                    => 'mostak-right-sidebar',
    'description'           => __('This is right sideber for sakline theme','Sakline'),
    'before_widget'         => '<section class="right-sidebar">',
    'after_sideber'         => '</section>',
    'before_title'          => '<h2>',
    'after_title'           => '</h2>',
));
register_sidebar(array(
    'name'                  =>__('footer widget here','sakline'),
    'id'                    =>'footer-widget',
    'description'           =>__('this is widget for footer','sakline'),
    'before_widget'         =>'',
    'after_widget'          =>'',
    'before_title'          =>'',
    'after_title'           =>'',
));
}
add_action('widgets_init','sakline_widgets');


function sakline_protected_format(){
    return 'Locked content: %s';
}
add_filter('protected_title_format','sakline_protected_format');
