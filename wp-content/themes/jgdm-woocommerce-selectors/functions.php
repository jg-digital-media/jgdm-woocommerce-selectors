<?php

    /* Remove wp version number from scripts and styles */
    function remove_css_js_version( $src ) {

        if( strpos( $src, '?ver=' ) )
            $src = remove_query_arg( 'ver', $src );
        return $src;
    }

    add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
    add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );


    /* ADD THEME SUPPORTS */
    add_theme_support("menus");
    add_theme_support("post-thumbnails");
    add_theme_support("widgets");


    /*Widgets - Dynamic SideBars */
    function register_widget_areas() {


        register_sidebar( 
            
            array(
                'name' =>__( 'WooCommerce Sidebar Area', 'wsa'),
                'id' => 'sidebar',
                'description' => __( 'WooCommerce Sidebar Area', 'wsa' ),
            )

        );

    }

    add_action( 'widgets_init', 'register_widget_areas' );


    /* Define the WooCommerce_sidebar callback 
    function action_woocommerce_sidebar( $woocommerce_get_sidebar, $int ) { 
        
        // make action magic happen here... 
    }; 
         

    // add the action 
    add_action( 'woocommerce_sidebar', 'action_woocommerce_sidebar', 10, 2 );  */


    /* Remove Versions from site assets in code */
    function remove_css_version() {
        return '';
    }

    add_filter('the_generator', 'remove_css_version');
 


    /* ENQUEUE STYLES AND SCRIPTS */
    function add_theme_scripts() {
    
       
        
        // ENQUEUE MAIN STYLESHEETS

        wp_enqueue_style( 'style', get_template_directory_uri() . "/style.css" ); 
    
        
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



    /* WOOCOMMERCE SUPPORT */

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>