<?php

    namespace Theme\NotFound;

    /*
	|------------------------------------------------------------------
	| 404 Controller
	|------------------------------------------------------------------
	|
	| The template controller for displaying 404 error pages.
	| It is displayed when website content was not found.
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
    \Timber::render( '404.twig', $context );
