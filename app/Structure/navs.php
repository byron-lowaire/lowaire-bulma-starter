<?php

    namespace Theme\App\Structure;

    /*
	|----------------------------------------------------------------
	| Theme Navigation Areas
	|----------------------------------------------------------------
	|
	| This file is for registering your theme custom navigation areas
	| where various menus can be assigned by site administrators.
	|
	*/

    use function Theme\App\config;

    /**
     * Registers navigation areas.
     *
     * @return void
     */
    function register_navigation_areas() {
        register_nav_menus( [
            'primary-menu' => __( 'Primary Menu', config( 'funalmanac' ) ),
            'mobile-menu'  => __( 'Mobile Menu', config( 'funalmanac' ) ),
        ] );
    }

    add_action( 'after_setup_theme', 'Theme\App\Structure\register_navigation_areas' );
