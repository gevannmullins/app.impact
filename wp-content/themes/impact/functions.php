<?php


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
        'rewrite' => array('slug' => 'impact'),
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




