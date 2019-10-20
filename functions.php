<?php


 include_once('inc/custom-post.php');
 include_once('inc/CssJs.php');
 require_once('class-wp-bootstrap-navwalker.php');
 require_once('inc/cmb2-custom-fields.php');
 require_once('inc/redux-framework/redux-framework.php');
 require_once('inc/timermaster_theme_options.php');


 function theme_support(){
     add_theme_support('title-tag');
     add_theme_support('post-thumbnails');
     add_image_size('custom-thumb',350,600,false);
     
     
 }
 add_action('after_setup_theme','theme_support');
 function set_excerpt_length(){
    return 20;
 }
add_filter('excerpt_length','set_excerpt_length');



register_nav_menus(array(
    'primary'=>__('Primary Menu')
));
function timermaster_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="search widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="author widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

}
add_action('widgets_init','timermaster_widgets_init');


?>