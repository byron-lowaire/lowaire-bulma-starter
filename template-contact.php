<?php
    /*
     * Template Name: Contact Page
     */
    namespace Theme\template\Contact;

    /*
	|------------------------------------------------------------------
	| Single Controller
	|------------------------------------------------------------------
	|
	| Think about theme template files as some sort of controllers
	| from MVC design pattern. They should link application
	| logic with your theme view pages files.
	|
	*/

    $context           = \Timber::get_context();
    $post              = \Timber::query_post();
    $context[ 'post' ] = $post;
    /**
     * Renders single page.
     *
     * @see resources/pages/single.twig
     */
    \Timber::render( 'pages/contact.twig', $context );
