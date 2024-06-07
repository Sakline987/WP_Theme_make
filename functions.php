<?php


function personal_side(){

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-header',array(
    'header-text'               => true,
    'default-header-color'    => '#000',
));
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('post-formats',array('image','video','audio','link','aside'));


add_image_size('our_image',750,800 );

register_nav_menu('header-menu',__('main menu','sakline'));

}
add_action("after_setup_theme","personal_side");

function my_header_image_custom (){
    if(is_front_page()){
        if(current_theme_supports('custom-header')){
            ?>
        <style>
        .header{
            background-image:url(<?php echo header_image(); ?>);
            background-size: cover;
            background-position:center center;
            margin-bottom:42px;
            color: #<?php echo get_header_textcolor(); ?>
        }
        .header a{
            color: #<?php echo get_header_textcolor(); ?>
        }

        </style>
        <?php
        }
    }
?> 
<style>
     .header a{
            color: #<?php echo get_header_textcolor(); ?>
        }
</style>
<?php
}
add_action("wp_head","my_header_image_custom");


if(site_url() ==  "http://localhost:10011"){
    define("VERSION", time());
}else {
    define ("VERSION", wp_get_theme() ->get("version"));
}
function sakline_stylesheet_link(){
    
    wp_enqueue_style('bootstreat_add',"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style('dashicons');
    wp_enqueue_style('style_make', get_stylesheet_uri () );

    wp_enqueue_script('main-script',get_theme_file_uri().'/assets/js/scripts.js',array('jquery'),VERSION, );
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

function remove_class($classess){
    unset($classess [array_search('jam', $classess)]);
    $classess[] ="anaros";
    return $classess;
}
add_filter('body_class','remove_class');