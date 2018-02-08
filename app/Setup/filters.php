<?php

    namespace Theme\App\Setup;

    /*
	|-----------------------------------------------------------
	| Theme Filters
	|-----------------------------------------------------------
	|
	| This file purpose is to include your theme various
	| filters hooks, which changes output or behaviour
	| of different parts of WordPress functions.
	|
	*/

    /**
     * Hides sidebar on index template on specific views.
     *
     * @see apply_filters('theme/index/sidebar/visibility')
     * @see apply_filters('theme/single/sidebar/visibility')
     */

    use Timber\Menu;

    /**
     * Add menu to Timber context
     *
     * @param $context array Timber global context
     *
     * @return array
     *
     */
    function add_menus( $context ) {
        $context[ 'primary_menu' ] = new Menu( 'primary-menu' );
        $context[ 'mobile_menu' ]  = new Menu( 'mobile-menu' );

        return $context;
    }

    add_filter( 'timber/context', 'Theme\App\Setup\add_menus' );

