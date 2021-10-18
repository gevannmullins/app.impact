<?php


/*Custom Post type start*/
function post_type_impact_case_studies() {
    $supports = array(
        'custom-fields', // custom fields
        'block-templates'
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
        'rewrite' => array('slug' => 'case-studies'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('case-studies', $args);
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

add_action('init', 'add_impact_fields');
function add_impact_fields() {
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_61697dce22beb',
            'title' => 'Block: Impact Slider',
            'fields' => array(
                array(
                    'key' => 'field_61697e00df16e',
                    'label' => 'Slides',
                    'name' => 'slides',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6169885cc218a',
                            'label' => 'Case Studies',
                            'name' => 'case_studies',
                            'type' => 'post_object',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'post_type' => array(
                                0 => 'case_studies',
                            ),
                            'taxonomy' => '',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'return_format' => 'object',
                            'ui' => 1,
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/impactslider',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_6167d3bf3c826',
            'title' => 'Case Study Field Group',
            'fields' => array(
                array(
                    'key' => 'field_6167d3e369c4a',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => 'Please enter a Case Study Title',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => 'Title',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6167d41e69c4b',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                    'instructions' => 'Give your Case Study a Description',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => 'Describe your Case Study',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_6167d4e669c4c',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'case_studies',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

    endif;
}


