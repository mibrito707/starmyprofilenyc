<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Napoli
 * @since Napoli 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('main-contentpage'); ?>>
	<?php
		the_content();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'napoli' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
	?>
</div>