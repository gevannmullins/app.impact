<?php

add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles() {

    wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array( 'jquery' ), '1.6.0', true );
    wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/assets/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );

    wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/assets/slick/slick.css', '1.6.0', 'all');
    wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/assets/slick/slick-theme.css', '1.6.0', 'all');

}

/*Custom Post type start*/
function post_type_impact_case_studies() {
    $supports = array(
        'custom-fields', // custom fields
    );
    $labels = array(
        'name' => _x('Case Studies', 'plural'),
        'singular_name' => _x('Case Study', 'singular'),
        'menu_name' => _x('Case Studies', 'admin menu'),
        'name_admin_bar' => _x('Case Studies', 'admin bar'),
        'add_new' => _x('Add New Case Study', 'add new'),
        'add_new_item' => __('Add New Case Study'),
        'new_item' => __('New Case Study'),
        'edit_item' => __('Edit Case Study'),
        'view_item' => __('View Case Study'),
        'all_items' => __('All Case Studies'),
        'search_items' => __('Search Case Studies'),
        'not_found' => __('No Case Studies found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'case_studies'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('case_studies', $args);
}
add_action('init', 'post_type_impact_case_studies');
/*Custom Post type end*/


// Register a slider block.
add_action('acf/init', 'impact_register_blocks');
function impact_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('A custom slider block.'),
            'render_template'   => 'block-template-parts/slider/slider.php',
            'category'          => 'formatting',
            'icon' 				=> 'images-alt2',
            'align'				=> 'full',
            'enqueue_assets' 	=> function(){
                wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
                wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
                wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

                wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/block-template-parts/slider/slider.css', array(), '1.0.0' );
                wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/block-template-parts/slider/slider.js', array(), '1.0.0', true );
            },
        ));
    }
}



// Register a Images Carousel ACF Block
if( function_exists('acf_register_block') ) {

    $result = acf_register_block(array(
        'name'              => 'image_carousel', // Name of our block
        'title'             => __('Image Carousel'), // Title of our block
        'description'       => __('A custom Image Carousel block.'), // Description of our block
        'render_callback'   => 'image_carousel_block_html',// Callback function ( the once that contain the template of our block )
        'category'          => 'layout',// The category in which the block will be inserted
        'icon'              => 'format-gallery', // The icon associated with the block ( choose from wordpress dashicons )
        //'keywords'        => array(),
    ));
}

// Callback to render the testimonial ACF Block
function image_carousel_block_html() {

}


// Register a slider block.
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'impactSlider',
            'title'             => __('ImpactSlider'),
            'description'       => __('A custom slider block for impact.'),
            'render_template'   => 'block-template-parts/blocks/slider/slider.php',
            'category'          => 'formatting',
            'icon' 				=> 'images-alt2',
            'align'				=> 'full',
            'enqueue_assets' 	=> function(){
                wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.8.1' );
                wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '1.8.1' );
                wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), '1.8.1', true );

                wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/block-template-parts/blocks/slider/slider.css', array(), '1.0.0' );
                wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/block-template-parts/blocks/slider/slider.js', array(), '1.0.0', true );
            },
        ));
    }
}