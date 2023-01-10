<?php




// ************ Theme Function Add ***********************

add_action('after_setup_theme' , 'lava_theme_func');

function lava_theme_func(){
    
    // Theme Supports
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-background' , array(
        'default-color' => '#fff',
    ));
    
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');



    // Register Menu
    register_nav_menu('main-menu', __('Main Menu' , 'lava'));


    // Testmonial Custom Post Type

    if(current_user_can('administrator')){
        register_post_type('testmonial', array(
            'labels' =>  array(
                'name'          => __('Testmonials' , 'lava'),
                'singular_name' =>  __('Testmonials' , 'lava'),
                'edit_item' =>  __('Edit Testmonials' , 'lava'),
                'add_item' =>  __('Edit Testmonials' , 'lava'),
                'add_new_item' =>  __('Add New Testmonial' , 'lava'),
                'view_item' =>  __('View Testmonial' , 'lava'),
                'all_items' =>  __('All Testmonials' , 'lava'),
                'search_items' =>  __('Search Testmonials' , 'lava'),
              
            ),
            'public' => true,
            'supports'  =>   array('title', 'editor', 'thumbnail'),
            'menu_position'      => 20,
        ));
    }

}


// Register Sidebar


add_action('widgets_init', 'create_sidebar');

function create_sidebar(){

    register_sidebar(array(
        'name'          =>  __('Footer first area' , 'lava'),
        'id'            =>  'footer-first',
        'description'   => __('You can add footer first', 'lava'),
        'before_widget' =>  '<div class="contact-form">',
        'after_widget'  =>  '</div>',
    ));

    register_sidebar(array(
        'name'      =>  __('Footer second area' , 'lava'),
        'id'        =>  'footer-second',
        'description' => __('You can add second first', 'lava'),
    ));


    
    register_sidebar(array(
        'name'      =>  __('Footer last area' , 'lava'),
        'id'        =>  'footer-last',
        'description' => __('You can add last area', 'lava'),
    ));



    



}







// ************** Theme Function Style Add ***********

add_action('wp_enqueue_scripts', 'lava_theme_styles');

function lava_theme_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap', array() , $version , false );

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),$version, false);

    wp_enqueue_style('lava' , get_template_directory_uri().'/assets/css/templatemo-lava.css' , array() , $version, false);

    wp_enqueue_style('fontawesome' , get_template_directory_uri().'/assets/css/font-awesome.css' , array() , $version, false);

    wp_enqueue_style('carousel' , get_template_directory_uri().'/assets/css/owl-carousel.css' , array() , $version, false);

    wp_enqueue_style('style', get_stylesheet_uri(), false);


}



// ********************* Theme Function Scripts Add *************

add_action('wp_enqueue_scripts', 'lava_theme_scripts');

function lava_theme_scripts(){

    $version = wp_get_theme()->get('Version');

    // Jquery Script 
    wp_enqueue_script('jq' , get_template_directory_uri().'/assets/js/jquery-2.1.0.min.js', array() , $version , true );


    // Bootstrap Scripts
    wp_enqueue_script('popper' , get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jq') , $version , true );

    wp_enqueue_script('bootstrap' , get_template_directory_uri().'/assets/js/popper.js', array('jq') , $version , true );


    // Plugin Scripts
    wp_enqueue_script('carousel', get_template_directory_uri().'/assets/js/owl-carousel.js', array('jq',) , $version , true);

    wp_enqueue_script('scrollveal', get_template_directory_uri().'/assets/js/scrollreveal.min.js', array('jq'), $version, true);

    wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jq'), $version, true);
    #
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jq'), $version, true);

    wp_enqueue_script('imflix', get_template_directory_uri().'/assets/js/imgfix.min.js', array('jq'), $version, true);

    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', array('jq' , 'bootstrap'), $version, true);

    

}



// ******* Custom Nav Menu File Add

if(file_exists(dirname(__FILE__).'/custom-nav.php')){
    require_once(dirname(__FILE__).'/custom-nav.php');
}

// Shortcoder Php

if(file_exists(dirname(__FILE__).'/shortcodes/shortcoder.php')){
    require_once(dirname(__FILE__).'/shortcodes/shortcoder.php');
}


// Metabox File

if(file_exists(dirname(__FILE__).'/metabox/init.php')){
    require_once(dirname(__FILE__).'/metabox/init.php');
}

if(file_exists(dirname(__FILE__).'/metabox/config.php')){
    require_once(dirname(__FILE__).'/metabox/config.php');
}