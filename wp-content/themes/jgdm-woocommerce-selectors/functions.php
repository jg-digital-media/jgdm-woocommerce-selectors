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
    
        // ADD ANY SLICK STYLES
        //wp_enqueue_style( 'slick-main',  get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.1', '', null );
    
        //wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');   


        // ADD ANY LIGHTBOX STYLES
        //wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/assets/lightbox/src/css/lightbox.css',  array(), '1.1', 'all',  );
    
        // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/jquery/jquery.js' );
        wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), '1.1', 'lightbox-css', null );
        // wp_enqueue_script( 'jquery-min', get_template_directory_uri() .'/scripts/jquery-1.11.0.min.js' );

        wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/slick/slick.min.js',  array(), '1.1', 'jquery-min', ); 
        // wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/slick/slick.js',  array(), '1.1', 'slick-theme', ); 


        // ADD ANY LIGHTBOX SCRIPTS
        // wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/assets/lightbox/src/js/lightbox.js',  array(), '1.1', 'slick-script',  );    


        // ENQUEUE MAIN SCRIPT
        wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/scripts/app.js', array(), '1.1', 'lightbox-script' );    


        // ENQUEUE FOOGLE FONT
        // wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Bangers&family=Oswald:wght@200&display=swap', array(), '1.1');

        
        // ENQUEUE MAIN STYLESHEETS
        wp_enqueue_style( 'child-style', get_stylesheet_uri() . '/cb_cartoontheme-child/style.css', array(), '1.1' );    
        wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    
        /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }*/

    }

    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



    /* WOOCOMMERCE SUPPORT */

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>