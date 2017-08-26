<?php get_header(); ?>
    <div class="container">
        <div id="main">
            <div class="error-page">
				<h1>404</h1>
				<p><?php esc_html_e( 'It seems we can not find what you are looking for. Perhaps searching can help.', 'napoli' ); ?></p>
				<?php get_search_form(); ?>
			</div>
        </div>
    </div>
<?php get_footer(); ?>