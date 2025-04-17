<?php
/**
 
* Plugin Name: custom_post_type
*/
function simplon_custom_post_type() {
    register_post_type('activity',
        array(
            'labels'      => array(
                'name'          =>__('activities', 'textdomain'),
                'singular_name' =>__('activity', 'textdomain'),
            ),
                'public'      => true,
                'hierarchical' => false, //Hierarchique enfant par exemple
        'has_archive'=> true,
        )
    );
}
add_action('init', 'simplon_custom_post_type');