<?php

function custom_post(){
    register_post_type('latest_work',array(
        labels=>array(
            'menu_name'=>'Latest Work Menu',
            'name'=>'Latest Work',
            'add_new'=>'Add New',
            'all_items'=>'All Latest Works',
            'add_new_item'=>'Add New Item'
        ),
        'public'=>true,
        'supports'=>array('thumbnail','title','custom-fields','editor'),
        'menu_icon'=>'dashicons-hammer',
    ));

    register_post_type('offer',array(
        labels=>array(
            'menu_name' => 'Offer Menu',
            'name'      =>'Offer',
            'add_new'   =>'Add New',
            'all_items' =>'All Offer',
            'add_new_item'=>'Add New Item'
        ),
        'public' => true,
        'supports'=>array('title'),
        'menu_icon'=>'dashicons-hammer',
    ));

    register_post_type('gallery',array(
        labels=>array(
            'menu_name' => 'Gallery Menu',
            'name'      =>'Gallery',
            'add_new'   =>'Add New',
            'all_items' =>'All Photos',
            'add_new_item'=>'Add New Item'
        ),
        'public' => true,
        'supports'=>array('thumbnail'),
        'menu_icon'=>'dashicons-hammer',
    ));
    register_post_type('contact',array(
        labels=>array(
            'menu_name' => 'Contact Section',
            'name'      =>'Contact',
            'add_new'   =>'Add New',
            'all_items' =>'All Addresses',
            'add_new_item'=>'Add New Address'
        ),
        'public' => true,
        'supports'=>array(''),
        'menu_icon'=>'dashicons-hammer',
    ));

    register_post_type('service',array(
        labels=>array(
            'menu_name' => 'Service Page',
            'name'      =>'Service Page',
            'add_new'   =>'Add New',
            'all_items' =>'All Services',
            'add_new_item'=>'Add New Address'
        ),
        'public' => true,
        'supports'=>array('title'),
        'menu_icon'=>'dashicons-hammer',
    ));

    register_post_type('feature',array(
        labels=>array(
            'menu_name' => 'Service Feature Page',
            'name'      =>'Service Feature Page',
            'add_new'   =>'Add New',
            'all_items' =>'All Service Features',
            'add_new_item'=>'Add New Feature'
        ),
        'public' => true,
        'supports'=>array('thumbnail'),
        'menu_icon'=>'dashicons-hammer',
    ));

    register_post_type('clients',array(
        labels=>array(
            'menu_name' => 'Service Client Page',
            'name'      =>'Service Client Page',
            'add_new'   =>'Add New',
            'all_items' =>'All Service Features',
            'add_new_item'=>'Add New Feature'
        ),
        'public' => true,
        'supports'=>array('thumbnail'),
        'menu_icon'=>'dashicons-hammer',
    ));

}
add_action('init','custom_post');


?>