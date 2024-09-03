<?php
class Outcomes_Post_Type {
    public function register() {
        $labels = array(
            'name' => __('Outcomes', 'ander-easy-accounting'),
            'singular_name' => __('Outcome', 'ander-easy-accounting'),
            'menu_name' => __('Outcomes', 'ander-easy-accounting'),
            'add_new' => __('Add New', 'ander-easy-accounting'),
            'add_new_item' => __('Add New Outcome', 'ander-easy-accounting'),
            'edit_item' => __('Edit Outcome', 'ander-easy-accounting'),
            'new_item' => __('New Outcome', 'ander-easy-accounting'),
            'view_item' => __('View Outcome', 'ander-easy-accounting'),
            'search_items' => __('Search Outcomes', 'ander-easy-accounting'),
            'not_found' => __('No Outcomes found', 'ander-easy-accounting'),
            'not_found_in_trash' => __('No Outcomes found in Trash', 'ander-easy-accounting')
        );

        $args = array(
            'labels' => $labels,
            'public' => false,
            'show_ui' => true,
            'supports' => array('title', 'custom-fields'),
            'capabilities' => array(
                'edit_post' => 'manage_options',
                'read_post' => 'manage_options',
                'delete_post' => 'manage_options',
                'edit_posts' => 'manage_options',
                'edit_others_posts' => 'manage_options',
                'publish_posts' => 'manage_options',
                'read_private_posts' => 'manage_options'
            ),
            'menu_icon' => 'dashicons-arrow-up-alt',
            'rewrite' => false,
        );

        register_post_type('outcomes', $args);
    }
}
