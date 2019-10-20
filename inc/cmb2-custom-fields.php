<?php

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/CMB2/init.php';

function custom_fields(){
    $latest_work_metabox = new_cmb2_box( array(
		'id'            => 'work_metabox',
		'title'         => __( 'Latest Work Metabox', 'timermaster' ),
		'object_types'  => 'latest_work',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

   	// Regular text field
	$latest_work_metabox->add_field( array(
		'name'       => __( 'Demo Field', 'cmb2' ),
		'desc'       => __( 'input your demo label', 'timermaster' ),
		'id'         => 'demo_label',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    // Regular text field
	$latest_work_metabox->add_field( array(
		'name'       => __( 'Description Field', 'cmb2' ),
		'desc'       => __( 'input your description label', 'timermaster' ),
		'id'         => 'description_label',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    // Regular text field
	$latest_work_metabox->add_field( array(
		'name'       => __( 'Animation Fields', 'cmb2' ),
		'desc'       => __( 'input your animation class name', 'timermaster' ),
		'id'         => 'animate_class_name',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    $latest_work_metabox->add_field( array(
		'name'       => __( 'Animation Delay Fields', 'cmb2' ),
		'desc'       => __( 'input your animation delay time', 'timermaster' ),
		'id'         => 'animate_delay_time',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	//fron-page metabox
	$front_page_metabox = new_cmb2_box( array(
		'id'            => 'front_page_metabox',
		'title'         => __( 'Front Page Metabox', 'timermaster' ),
		'object_types'  => 'page',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		'show_on'       =>array(
			'key'       =>'id',
			'value'     =>88
		)
	) );

   	// Regular text field
	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider Title', 'cmb2' ),
		'desc'       => __( 'input your slider title', 'timermaster' ),
		'id'         => 'slider_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider Item', 'cmb2' ),
		'desc'       => __( 'input your slider item', 'timermaster' ),
		'id'         => 'slider_item',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
		'repeatable' =>true
	) );
	
	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider Description', 'cmb2' ),
		'desc'       => __( 'input your slider description', 'timermaster' ),
		'id'         => 'slider_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	
	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider Button', 'cmb2' ),
		'desc'       => __( 'input your slider button label', 'timermaster' ),
		'id'         => 'slider_btn_level',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	
	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider Button URL', 'cmb2' ),
		'desc'       => __( 'input your slider button url', 'timermaster' ),
		'id'         => 'slider_btn_url',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$front_page_metabox->add_field( array(
		'name'       => __( 'Slider BG', 'cmb2' ),
		'desc'       => __( 'input your background image', 'timermaster' ),
		'id'         => 'slider_bg',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	
	$offer_metabox = new_cmb2_box( array(
		'id'            => 'offer_metabox',
		'title'         => __( 'Offer Metabox', 'timermaster' ),
		'object_types'  => 'offer',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

   	// Regular text field
	$offer_metabox->add_field( array(
		'name'       => __( 'Offer Icon', 'cmb2' ),
		'desc'       => __( 'input your ion icon class', 'timermaster' ),
		'id'         => 'ion_icon_class',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$offer_metabox->add_field( array(
		'name'       => __( 'Offer Description', 'cmb2' ),
		'desc'       => __( 'input your offer description', 'timermaster' ),
		'id'         => 'offer_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$gallery_metabox = new_cmb2_box( array(
		'id'            => 'gallery_metabox',
		'title'         => __( 'Gallery Metabox', 'timermaster' ),
		'object_types'  => 'gallery',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

   	// Regular text field
	$gallery_metabox->add_field( array(
		'name'       => __( 'Gallery Image', 'cmb2' ),
		'desc'       => __( 'input your Gallery Image', 'timermaster' ),
		'id'         => 'gallery_image',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$gallery_metabox->add_field( array(
		'name'       => __( 'Gallery Demo', 'cmb2' ),
		'desc'       => __( 'input your Gallery Demo', 'timermaster' ),
		'id'         => 'gallery_demo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$contact_metabox = new_cmb2_box( array(
		'id'            => 'contact_metabox',
		'title'         => __( 'Contact Metabox', 'timermaster' ),
		'object_types'  => 'contact',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

   	// Regular text field
	$contact_metabox->add_field( array(
		'name'       => __( 'Contact Icon', 'cmb2' ),
		'desc'       => __( 'input your ion icon class', 'timermaster' ),
		'id'         => 'ion_ios_class',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$contact_metabox->add_field( array(
		'name'       => __( 'Contact address-1', 'cmb2' ),
		'desc'       => __( 'input your Contact Address-1', 'timermaster' ),
		'id'         => 'contact_add1',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$contact_metabox->add_field( array(
		'name'       => __( 'Contact address-2', 'cmb2' ),
		'desc'       => __( 'input your Contact Address-2', 'timermaster' ),
		'id'         => 'contact_add2',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$service_metabox = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'Service Metabox', 'timermaster' ),
		'object_types'  => 'service',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

   	// Regular text field
	$service_metabox->add_field( array(
		'name'       => __( 'Service Icon', 'cmb2' ),
		'desc'       => __( 'input your ion icon class', 'timermaster' ),
		'id'         => 'ion_ios_class',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$service_metabox->add_field( array(
		'name'       => __( 'Service Title', 'cmb2' ),
		'desc'       => __( 'input your Service Title', 'timermaster' ),
		'id'         => 'service_area',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$service_metabox->add_field( array(
		'name'       => __( 'Service Description', 'cmb2' ),
		'desc'       => __( 'input your Service Description', 'timermaster' ),
		'id'         => 'service_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$feature_metabox = new_cmb2_box( array(
		'id'            => 'feature_metabox',
		'title'         => __( 'Feature Page Metabox', 'timermaster' ),
		'object_types'  => 'feature',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

   	// Regular text field
	$feature_metabox->add_field( array(
		'name'       => __( 'Feature Image', 'cmb2' ),
		'desc'       => __( 'input your feature Image', 'timermaster' ),
		'id'         => 'feature_image',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$feature_metabox->add_field( array(
		'name'       => __( 'Feature Image Title', 'cmb2' ),
		'desc'       => __( 'input your Feature Image Title', 'timermaster' ),
		'id'         => 'feature_img_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$feature_metabox->add_field( array(
		'name'       => __( 'Feature Image Description', 'cmb2' ),
		'desc'       => __( 'input your Feature Image Description', 'timermaster' ),
		'id'         => 'feature_img_desc',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$feature_metabox->add_field( array(
		'name'       => __( 'Feature Demo Title', 'cmb2' ),
		'desc'       => __( 'input your Feature Demo Title', 'timermaster' ),
		'id'         => 'feature_demo_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$feature_metabox->add_field( array(
		'name'       => __( 'Feature Demo Description', 'cmb2' ),
		'desc'       => __( 'input your Feature Demo Description', 'timermaster' ),
		'id'         => 'feature_demo_desc',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$client_metabox = new_cmb2_box( array(
		'id'            => 'client_metabox',
		'title'         => __( 'Client Page Metabox', 'timermaster' ),
		'object_types'  => 'clients',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

   	// Regular text field
	$client_metabox->add_field( array(
		'name'       => __( 'Client Image', 'cmb2' ),
		'desc'       => __( 'input your Client Image', 'timermaster' ),
		'id'         => 'clients_image',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	



}
add_action( 'cmb2_admin_init', 'custom_fields' );


