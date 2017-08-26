<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Napoli
 * @since Napoli 1.0
 */
get_header(); ?>

<div class="tea-page-content <?php echo is_front_page() ? 'is-front-page' : 'simple-page' ?>">
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'page' );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
?>
</div>
<?php get_footer(); ?>
