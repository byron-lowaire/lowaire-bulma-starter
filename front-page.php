<?php

    namespace Theme\FrontPage;

    /*
	|------------------------------------------------------------------
	| Index Controller
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
     * Renders front page.
     *
     * @see resources/templates/front-page.twig
     */
    \Timber::render( 'front-page.twig', $context );
