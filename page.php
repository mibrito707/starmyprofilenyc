<?php
/**
 * The template used for displaying page content
 * @package WordPress
 * @subpackage Apoli
 * @since Apoli 1.0
 */
get_header(); ?>
<div class="tea-page-content">
<div class="row">
	<div class="container">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
	?>
	</div>
	</div>
</div>
<?php get_footer(); ?>