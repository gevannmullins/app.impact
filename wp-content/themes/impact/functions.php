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
        'rewrite' => array('slug' => 'case_studies'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('case_studies', $args);
}
add_action('init', 'post_type_impact_case_studies');
/*Custom Post type end*/
