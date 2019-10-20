<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "timermaster";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Timermaster Theme Options', 'Timermaster' ),
        'page_title'           => __( 'Timermaster Theme Options', 'Timermaster' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'Timermaster' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'Timermaster' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'Timermaster' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'Timermaster' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'Timermaster' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'Timermaster' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'Timermaster' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Timermaster' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'Timermaster' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Timermaster' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'Timermaster' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    

    Redux::setSection( $opt_name, array(
        'title' => __( 'Front Page', 'Timermaster' ),
        'id'    => 'front_page',
        'desc'  => __( 'Front Page Theme Option', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header Section', 'Timermaster' ),
        'desc'       => __( 'Header Section Theme Option ', 'Timermaster' ),
        'id'         => 'header_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo_image',
                'type'     => 'media',
                'title'    => __( 'Logo Image', 'Timermaster' ),
                'desc'     => __( 'Upload Your Logo Image', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/images/logo.png',
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Latest News', 'Timermaster' ),
        'desc'       => __( 'Latest News Title ', 'Timermaster' ),
        'id'         => 'news_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'news_title',
                'type'     => 'text',
                'title'    => __( 'Latest News Title', 'Timermaster' ),
                'desc'     => __( 'Input Your News Title', 'Timermaster' ),
                'default'  => 'Latest Work'
            ),

            array(
                'id'       => 'news_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Latest News Subtitle', 'Timermaster' ),
                'desc'     => __( 'Input Your News Subtitle', 'Timermaster' ),
                'default'  => 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque 
                auctor neque nec urna. Nulla sit amet est. Aenean posuere
                tortor sed cursus feugiat, nunc augue blandit nunc, eu 
                sollicitudin urna dolor sagittis lacus.'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Me News', 'Timermaster' ),
        'desc'       => __( 'About Me News Title ', 'Timermaster' ),
        'id'         => 'aboutme_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'aboutme_title',
                'type'     => 'text',
                'title'    => __( 'About Me News Title', 'Timermaster' ),
                'desc'     => __( 'Input Your About Me Title', 'Timermaster' ),
                'default'  => 'ABOUT ME'
            ),

            array(
                'id'       => 'aboutme_subtitle',
                'type'     => 'editor',
                'title'    => __( 'About Me Subtitle', 'Timermaster' ),
                'desc'     => __( 'Input Your About Me Subtitle', 'Timermaster' ),
                'default'  => "Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia.
                 I hold a master degree of Web Design from the World University.
                And scrambled it to make a type specimen book. It has survived not only five centuries

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae,
                 natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero."
            ),

            array(
                'id'       => 'aboutme_image',
                'type'     => 'media',
                'title'    => __( 'About Me Image', 'Timermaster' ),
                'desc'     => __( 'Upload Your About Me Image', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/images/about/about.jpg',
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Offer From Me', 'Timermaster' ),
        'desc'       => __( 'Offer FromMe Title ', 'Timermaster' ),
        'id'         => 'offerme_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'offerme_title',
                'type'     => 'text',
                'title'    => __( 'Offer From Me Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Offer Me Title', 'Timermaster' ),
                'default'  => 'OFFER FROM ME'
            ),

            array(
                'id'       => 'offerme_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Offer Me Subtitle', 'Timermaster' ),
                'desc'     => __( 'Input Your Offer Me Subtitle', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,
                quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum'
            ),
        
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Me Section', 'Timermaster' ),
        'desc'       => __( 'Contact With Me Section', 'Timermaster' ),
        'id'         => 'contactme_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'contactme_title',
                'type'     => 'text',
                'title'    => __( 'Contact Me Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Me Title', 'Timermaster' ),
                'default'  => 'SO WHAT YOU THINK ??'
            ),

            array(
                'id'       => 'contactme_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Contact Me Subtitle', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Me Subtitle', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,
                possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.'
            ),
            array(
                'id'       => 'contactme_btn',
                'type'     => 'text',
                'title'    => __( 'Contact Me Button', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Me Button Label', 'Timermaster' ),
                'default'  => 'CONTACT WITH ME'
            ),
            array(
                'id'       => 'contactme_btn_url',
                'type'     => 'text',
                'title'    => __( 'Contact Button Url', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Button Url', 'Timermaster' ),
                'default'  => ''
            ),

        
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Section', 'Timermaster' ),
        'desc'       => __( 'Footer Section Title ', 'Timermaster' ),
        'id'         => 'footer_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer_title',
                'type'     => 'editor',
                'title'    => __( 'Footer Section Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Footer Section Title', 'Timermaster' ),
                'default'  => 'Copyright: 2019 Design and Developed by Themefisher.
                Get More Free Bootstrap Templates'
            ),

            array(
                'id'       => 'social_icon',
                'type'     => 'slides',
                'title'    => __( 'Social Icons', 'Timermaster' ),
                'desc'     => __( 'Input Your Social Icons Logo', 'Timermaster' ),
                'placeholder'=>array(
                    'title'=>'Input Your Social Icon',
                    'description'=>'No Need To Input Here',
                    'url'  =>'input your social link'
                )
            ),
        
        )
    ) );


    //about page field

    Redux::setSection( $opt_name, array(
        'title' => __( 'About Page', 'Timermaster' ),
        'id'    => 'about_page',
        'desc'  => __( 'About Page Theme Option', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Company', 'Timermaster' ),
        'desc'       => __( 'About Company Title ', 'Timermaster' ),
        'id'         => 'about_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'about_title',
                'type'     => 'text',
                'title'    => __( 'About Page Title', 'Timermaster' ),
                'desc'     => __( 'Input Your About Page Title', 'Timermaster' ),
                'default'  => 'ABOUT COMPANY'
            ),

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Company Description', 'Timermaster' ),
        'desc'       => __( 'About Companies Description ', 'Timermaster' ),
        'id'         => 'company_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'company_desc',
                'type'     => 'media',
                'title'    => __( 'Company Page Image', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Page Image', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/images/about/about-company.jpg',
                ),
            ),
            array(
                'id'       => 'company_title',
                'type'     => 'text',
                'title'    => __( 'Company Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Title', 'Timermaster' ),
                'default'  => 'WHY WE ARE UNIQUE'
            ),
            array(
                'id'       => 'company_subtitle',
                'type'     => 'editor',
                'title'    => __( 'Company SubTitle', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle', 'Timermaster' ),
                'default'  => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.'
            ),
            

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Company Subtitle', 'Timermaster' ),
        'desc'       => __( 'Companies Subtitle', 'Timermaster' ),
        'id'         => 'subtitle_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'company_subtitle1',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-1', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle No-1', 'Timermaster' ),
                'url'      =>true,
                'default'  =>'Why Choose US'
            ),
            array(
                'id'       => 'company_subtitle1_desc',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-1 Desc', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle-1 Desc', 'Timermaster' ),
                'default'  => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.'
            ),
            array(
                'id'       => 'company_subtitle_2',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-2', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle-2', 'Timermaster' ),
                'default'  => 'What You Get'
            ),
            array(
                'id'       => 'company_subtitle2_desc',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-2 Desc', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle-2 Desc', 'Timermaster' ),
                'default'  => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.'
            ),
            array(
                'id'       => 'company_subtitle_3',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-3', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle-3', 'Timermaster' ),
                'default'  => 'Meet The Energy'
            ),
            array(
                'id'       => 'company_subtitle3_desc',
                'type'     => 'text',
                'title'    => __( 'Company SubTitle-3 Desc', 'Timermaster' ),
                'desc'     => __( 'Input Your Company SubTitle-3 Desc', 'Timermaster' ),
                'default'  => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.'
            ),

            

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Team Member', 'Timermaster' ),
        'desc'       => __( 'Companies Teammembers', 'Timermaster' ),
        'id'         => 'team_member',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'member_title',
                'type'     => 'text',
                'title'    => __( 'Member Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Title', 'Timermaster' ),
                'url'      =>true,
                'default'  =>'MEET THE TEAM'
            ),
            array(
                'id'       => 'member_image',
                'type'     => 'media',
                'title'    => __( 'Member Image', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Image', 'Timermaster' ),
                'url'      =>true,
                'default'  =>array(
                    'url' =>get_template_directory_uri().'/images/team/team-1.jpg',
                ),
            ),
            
            array(
                'id'       => 'member_name',
                'type'     => 'text',
                'title'    => __( 'Member Name', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Name', 'Timermaster' ),
                'default'  => 'Jonathon Andrew'
            ),
            array(
                'id'       => 'member_pos',
                'type'     => 'text',
                'title'    => __( 'Member Position', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Position', 'Timermaster' ),
                'default'  => 'CEO, Project Manager'
            ),
            array(
                'id'       => 'member_desc',
                'type'     => 'editor',
                'title'    => __( 'Member Description', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Description', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'
            ),
            array(
                'id'       => 'member_social',
                'type'     => 'slides',
                'title'    => __( 'Member Social Icons', 'Timermaster' ),
                'desc'     => __( 'Input Your Member Social Icons Logo', 'Timermaster' ),
                'placeholder'=>array(
                    'title'=>'Input Your Social Icon',
                    'description'=>'No Need To Input Here',
                    'url'  =>'input your social link'
                )
            ),

            array(
                'id'       => 'member_image2',
                'type'     => 'media',
                'title'    => __( 'Member Image 2', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Image 2', 'Timermaster' ),
                'url'      =>true,
                'default'  =>array(
                    'url' =>get_template_directory_uri().'/images/team/team-2.jpg',
                ),
            ),
            
            array(
                'id'       => 'member_name2',
                'type'     => 'text',
                'title'    => __( 'Member Name 2', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Name 2', 'Timermaster' ),
                'default'  => 'Jesmin Martina'
            ),
            array(
                'id'       => 'member_pos2',
                'type'     => 'text',
                'title'    => __( 'Member Position 2', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Position 2', 'Timermaster' ),
                'default'  => 'CEO, Project Manager'
            ),
            array(
                'id'       => 'member_desc2',
                'type'     => 'editor',
                'title'    => __( 'Member Description 2', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Description 2', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'
            ),
            array(
                'id'       => 'member_social2',
                'type'     => 'slides',
                'title'    => __( 'Member Social Icons 2', 'Timermaster' ),
                'desc'     => __( 'Input Your Member Social Icons Logo 2', 'Timermaster' ),
                'placeholder'=>array(
                    'title'=>'Input Your Social Icon',
                    'description'=>'No Need To Input Here',
                    'url'  =>'input your social link'
                )
            ),
            array(
                'id'       => 'member_image3',
                'type'     => 'media',
                'title'    => __( 'Member Image 3', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Image 3', 'Timermaster' ),
                'url'      =>true,
                'default'  =>array(
                    'url' =>get_template_directory_uri().'/images/team/team-3.jpg',
                ),
            ),
            
            array(
                'id'       => 'member_name3',
                'type'     => 'text',
                'title'    => __( 'Member Name 3', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Name 3', 'Timermaster' ),
                'default'  => 'Jesmin Martina'
            ),
            array(
                'id'       => 'member_pos3',
                'type'     => 'text',
                'title'    => __( 'Member Position 3', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Position 3', 'Timermaster' ),
                'default'  => 'CEO, Project Manager'
            ),
            array(
                'id'       => 'member_desc3',
                'type'     => 'editor',
                'title'    => __( 'Member Description 3', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Description 2', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'
            ),
            array(
                'id'       => 'member_social3',
                'type'     => 'slides',
                'title'    => __( 'Member Social Icons 3', 'Timermaster' ),
                'desc'     => __( 'Input Your Member Social Icons Logo 3', 'Timermaster' ),
                'placeholder'=>array(
                    'title'=>'Input Your Social Icon',
                    'description'=>'No Need To Input Here',
                    'url'  =>'input your social link'
                )
            ),
            array(
                'id'       => 'member_image4',
                'type'     => 'media',
                'title'    => __( 'Member Image 4', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Image 4', 'Timermaster' ),
                'url'      =>true,
                'default'  =>array(
                    'url' =>get_template_directory_uri().'/images/team/team-4.jpg',
                ),
            ),
            
            array(
                'id'       => 'member_name4',
                'type'     => 'text',
                'title'    => __( 'Member Name 4', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Name 4', 'Timermaster' ),
                'default'  => 'Deu John'
            ),
            array(
                'id'       => 'member_pos4',
                'type'     => 'text',
                'title'    => __( 'Member Position 4', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Position 4', 'Timermaster' ),
                'default'  => 'CEO, Project Manager'
            ),
            array(
                'id'       => 'member_desc4',
                'type'     => 'editor',
                'title'    => __( 'Member Description 4', 'Timermaster' ),
                'desc'     => __( 'Input Your Company Member Description 4', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'
            ),
            array(
                'id'       => 'member_social4',
                'type'     => 'slides',
                'title'    => __( 'Member Social Icons 4', 'Timermaster' ),
                'desc'     => __( 'Input Your Member Social Icons Logo 4', 'Timermaster' ),
                'placeholder'=>array(
                    'title'=>'Input Your Social Icon',
                    'description'=>'No Need To Input Here',
                    'url'  =>'input your social link'
                )
            ),
            

            

        )
    ) );

    
    Redux::setSection( $opt_name, array(
        'title' => __( 'Our Clients', 'Timermaster' ),
        'id'    => 'client_page',
        'desc'  => __( 'Our Happy Clients', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Clients Info', 'Timermaster' ),
        'desc'       => __( 'Happy Clients Title ', 'Timermaster' ),
        'id'         => 'client_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'client_title',
                'type'     => 'text',
                'title'    => __( 'Client Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Title', 'Timermaster' ),
                'default'  => 'OUR HAPPY CLINETS'
            ),
            array(
                'id'       => 'client_desc',
                'type'     => 'text',
                'title'    => __( 'Client Description', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Description', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.'
            ),


        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Clients Image', 'Timermaster' ),
        'desc'       => __( 'Happy Clients Title ', 'Timermaster' ),
        'id'         => 'happy_client',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'client_image1',
                'type'     => 'media',
                'title'    => __( 'Client Image1', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Image No-1', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/clients/logo-1.jpg',
                ),
                
            ),
            array(
                'id'       => 'client_image2',
                'type'     => 'media',
                'title'    => __( 'Client Image2', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Image No-2', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/clients/logo-2.jpg',
                ),
            ),
            array(
                'id'       => 'client_image3',
                'type'     => 'media',
                'title'    => __( 'Client Image3', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Image No-3', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/clients/logo-3.jpg',
                ),
            ),
            array(
                'id'       => 'client_image4',
                'type'     => 'media',
                'title'    => __( 'Client Image4', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Image No-4', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/clients/logo-4.jpg',
                ),
            ),
            array(
                'id'       => 'client_image5',
                'type'     => 'media',
                'title'    => __( 'Client Image5', 'Timermaster' ),
                'desc'     => __( 'Input Your Happy Clients Image No-5', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/clients/logo-5.jpg',
                ),
            ),
           
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Gallery Images', 'Timermaster' ),
        'id'    => 'gallery_page',
        'desc'  => __( 'About Gallery', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Gallery Images', 'Timermaster' ),
        'desc'       => __( 'Gallery Images Will Appear Hear ', 'Timermaster' ),
        'id'         => 'gallery_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'gallery_title',
                'type'     => 'text',
                'title'    => __( 'About Page Title', 'Timermaster' ),
                'desc'     => __( 'Input Your About Page Title', 'Timermaster' ),
                'default'  => 'GALLERY IMAGES'
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Contact Page', 'Timermaster' ),
        'id'    => 'contact_page',
        'desc'  => __( 'About Contact', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Section', 'Timermaster' ),
        'desc'       => __( 'Contact Section Will Appear Hear ', 'Timermaster' ),
        'id'         => 'contact_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'contact_title',
                'type'     => 'text',
                'title'    => __( 'Contact Page Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page Title', 'Timermaster' ),
                'default'  => 'CONTACT'
            ),

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Section left Site', 'Timermaster' ),
        'desc'       => __( 'Contact Section left Sidebar Will Appear Here', 'Timermaster' ),
        'id'         => 'contact_left',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'contact_leftsite',
                'type'     => 'text',
                'title'    => __( 'Contact Page left Site Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page left Site Title', 'Timermaster' ),
                'default'  => 'CONTACT WITH ME'
            ),
            array(
                'id'       => 'contact_leftsite_txt',
                'type'     => 'text',
                'title'    => __( 'Contact Page left Site Text', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page left Site Text', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea! consectetur adipisicing elit. Dolore, ea!'
            ),
            array(
                'id'       => 'contact_leftsite_form',
                'type'     => 'editor',
                'title'    => __( 'Contact Page Form', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page Form', 'Timermaster' ),
                'default'  => ''
            ),


        )
     

    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Section right Site', 'Timermaster' ),
        'desc'       => __( 'Contact Section right Sidebar Will Appear Here', 'Timermaster' ),
        'id'         => 'contact_right',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'contact_righttsite',
                'type'     => 'text',
                'title'    => __( 'Contact Page right Site Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page right Site Title', 'Timermaster' ),
                'default'  => 'FIND US'
            ),

            array(
                'id'       => 'contact_rightsite_txt',
                'type'     => 'text',
                'title'    => __( 'Contact Page right Site Text', 'Timermaster' ),
                'desc'     => __( 'Input Your Contact Page right Site Text', 'Timermaster' ),
                'default'  => 'Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, 
                o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi'
            ),

        )
     

    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Service Page', 'Timermaster' ),
        'id'    => 'service_page',
        'desc'  => __( 'About Service', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Title', 'Timermaster' ),
        'desc'       => __( 'Service Title Will Appear Hear ', 'Timermaster' ),
        'id'         => 'service_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_title',
                'type'     => 'text',
                'title'    => __( 'Service Page Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Service Page Title', 'Timermaster' ),
                'default'  => 'SERVICES'
            ),

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Description', 'Timermaster' ),
        'desc'       => __( 'Service Description Will Appear Hear ', 'Timermaster' ),
        'id'         => 'service_desc',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_header',
                'type'     => 'text',
                'title'    => __( 'Service Page Header', 'Timermaster' ),
                'desc'     => __( 'Input Your Service Page Header', 'Timermaster' ),
                'default'  => 'WHAT WE LOVE TO DO'
            ),
            array(
                'id'       => 'service_par',
                'type'     => 'text',
                'title'    => __( 'Service Page Paragraph', 'Timermaster' ),
                'desc'     => __( 'Input Your Service Page Paragraph', 'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Perspiciatis porro recusandae non quibusdam iure adipisci.

                '
            ),
            array(
                'id'       => 'service_img',
                'type'     => 'media',
                'title'    => __( 'Service Page Image', 'Timermaster' ),
                'desc'     => __( 'Input Your Service Page Image', 'Timermaster' ),
                'url'      =>true,
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/team.jpg',
                ),
            ),



        )
    ) );
    Redux::setSection( $opt_name, array(
        'title' => __( 'Feature  Page', 'Timermaster' ),
        'id'    => 'feature_page',
        'desc'  => __( 'About Feature', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Feature Section', 'Timermaster' ),
        'desc'       => __( 'Feature Section Will Appear Hear ', 'Timermaster' ),
        'id'         => 'feature_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'feature_title',
                'type'     => 'text',
                'title'    => __( 'Feature Page Title', 'Timermaster' ),
                'desc'     => __( 'Input Your Feature Page Title', 'Timermaster' ),
                'default'  => 'SOME OF OUR FEATURES WORKS'
            ),
            array(
                'id'       => 'feature_desc',
                'type'     => 'editor',
                'title'    => __( 'Feature Page Desc', 'Timermaster' ),
                'desc'     => __( 'Input Your Feature Page Description', 'Timermaster' ),
                'default'  => 'Aliquam lobortis. Maecenas vestibulum mollis diam.
                 Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
                tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.'
            ),


        )
    ) );










   
    /*
     * <--- END SECTIONS
     */
