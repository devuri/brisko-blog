<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brisko
 */

?>
<div class="post-article">
	<?php Brisko\Theme::post_thumbnail(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="post-title">', '</h1>' );
		else :
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php brisko_before_entry_meta(); ?>
			<p class="post-meta" style="font-style: italic;color: #868e96;">
				<?php
				brisko_posted_on();
				brisko_posted_by();
				?>
			</p><!-- .entry-meta -->
		<?php brisko_after_entry_meta(); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brisko' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>
			<footer class="entry-footer ">
				<?php brisko_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php else : ?>
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<div class="read-more ">
			<a class="more-link <?php echo esc_html( Brisko\Theme::options()->button_border_radius( 0 ) ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo esc_html__( 'Read More', 'brisko' ); ?>
		</a>
	</div>

		<?php
	endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brisko' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- post-article -->
