<?php
class Outcomes_Post_Type {
    public function register() {
        register_post_type('outcomes', array(
            'labels' => array(
                'name' => __('Outcomes'),
                'singular_name' => __('Outcome')
            ),
            'public' => false,
            'show_ui' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
            'capabilities' => array(
                'edit_post' => 'manage_options',
                'read_post' => 'manage_options',
                'delete_post' => 'manage_options',
                'edit_posts' => 'manage_options',
                'edit_others_posts' => 'manage_options',
                'publish_posts' => 'manage_options',
                'read_private_posts' => 'manage_options'
            )
        ));
    }
}

$outcomes_post_type = new Outcomes_Post_Type();
add_action('init', array($outcomes_post_type, 'register'));
