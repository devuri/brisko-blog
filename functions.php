<?php
/**
 * Brisko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brisko
 */
function brisko_blog_google_fonts() {

	wp_enqueue_style( 'brisko-blog-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
	wp_enqueue_style( 'brisko-blog-font-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', false );

}

add_action( 'wp_enqueue_scripts', 'brisko_blog_google_fonts' );
