<?php

    namespace Theme\App\Structure;

    /*
    |-----------------------------------------------------------
    | Theme Custom Post Types
    |-----------------------------------------------------------
    |
    | This file is for registering your theme post types.
    | Custom post types allow users to easily create
    | and manage various types of content.
    |
    */

    use function Theme\App\config;

    /**
     * Registers `event` custom post type.
     *
     * @return void
     */
    function register_event_post_type() {
        register_post_type( 'event', [
            'description'   => __( 'Collection of events.', config( 'funalmanac' ) ),
            'public'        => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-calendar-alt',
            'supports'      => [ 'title', 'editor', 'excerpt', 'thumbnail' ],
            'labels'        => [
                'name'               => _x( 'Events', 'post type general name', config( 'funalmanac' ) ),
                'singular_name'      => _x( 'Event', 'post type singular name', config( 'funalmanac' ) ),
                'menu_name'          => _x( 'Events', 'admin menu', config( 'funalmanac' ) ),
                'name_admin_bar'     => _x( 'Event', 'add new on admin bar', config( 'funalmanac' ) ),
                'add_new'            => _x( 'Add New', 'event', config( 'funalmanac' ) ),
                'add_new_item'       => __( 'Add New Event', config( 'funalmanac' ) ),
                'new_item'           => __( 'New Event', config( 'funalmanac' ) ),
                'edit_item'          => __( 'Edit Event', config( 'funalmanac' ) ),
                'view_item'          => __( 'View Event', config( 'funalmanac' ) ),
                'all_items'          => __( 'All Events', config( 'funalmanac' ) ),
                'search_items'       => __( 'Search Events', config( 'funalmanac' ) ),
                'parent_item_colon'  => __( 'Parent Events:', config( 'funalmanac' ) ),
                'not_found'          => __( 'No events found.', config( 'funalmanac' ) ),
                'not_found_in_trash' => __( 'No events found in Trash.', config( 'funalmanac' ) ),
            ],
        ] );
    }

    add_action( 'init', 'Theme\App\Structure\register_event_post_type' );
