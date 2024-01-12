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

/**
 * Header Image
 */
function briskoblog_header_image() {

	$header_image_width = get_theme_mod( 'header_image_width', 'container' );

	$header_image_display = esc_attr( get_theme_mod( 'header_image_display', 'this-entire-site' ) );

	if ( 'this-disabled' === $header_image_display ) {
		return false;
	}

	if ( 'this-home-page-only' === $header_image_display ) {
		if ( false === is_front_page() ) {
			return false;
		}
	}

	?>
		<div class="<?php echo esc_attr($header_image_width) ?> brisko-header-img" style="padding:0px">
			<?php
				the_header_image_tag( array( 'class' => 'brisko-header-img' ) );
			?>
		</div>
	<?php
}

/**
 * Display Post Categories.
 */
function briskoblog_display_post_categories() {
	if ( ! get_theme_mod( 'display_post_categories', 1 ) ) {
		return sanitize_html_class( 'this-display-none' );
	} else {
		return '';
	}
}

/**
 * Display tags.
 */
function briskoblog_display_tags() {
	if ( ! get_theme_mod( 'display_tags', 1 ) ) {
		return sanitize_html_class( 'this-display-none' );
	} else {
		return sanitize_html_class( 'this-display-show' );
	}
}

/**
 * Button border radius
 *
 * @param  integer $defualt .
 * @return string .
 */
function briskoblog_button_border_radius( $defualt = 1 ) {
	if ( ! get_theme_mod( 'read_more_border_radius', $defualt ) ) {
		return sanitize_html_class( 'this-button-border-radius-none' );
	} else {
		return sanitize_html_class( 'this-button-border-radius' );
	}
}

function briskoblog_post_thumbnail() {
	$thumbnail_display = get_theme_mod( 'featured_image', 'container' );
	?><div class="post-thumbnail <?php echo esc_attr( $thumbnail_display ); ?>">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->
	<?php
}
