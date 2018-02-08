<?php

    namespace Theme\Page;

    /*
	|------------------------------------------------------------------
	| Page Controller
	|------------------------------------------------------------------
	|
	| Think about theme template files as some sort of controllers
	| from MVC design pattern. They should link application
	| logic with your theme view templates files.
	|
	*/

    $context           = \Timber::get_context();
    $post              = \Timber::query_post();
    $context[ 'post' ] = $post;
    /**
     * Renders single page.
     *
     * @see resources/templates/single.twig
     */
    \Timber::render( 'single.twig', $context );
