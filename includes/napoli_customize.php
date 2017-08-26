<?php
add_action('wp_head','napoli_customize_stylesheets' );
if(!function_exists('napoli_customize_stylesheets')){
	function napoli_customize_stylesheets(){
		$font =  cs_get_option('napoli_font_family',array('family'  => 'Open Sans', 'variant' => '800','font'    => 'google')); 
		?>
		<style type="text/css">
		body{
			font-family: <?php echo esc_html($font['family'] ); ?>;
			font-weight: <?php echo esc_html($font['variant'] ); ?>;
		}
			.header .header-navigation{
				background-color:<?php echo esc_html(cs_get_customize_option( 'menu_nav_color','#000' )) ?> ;
			}
			.section-title h2{
				border:3px solid <?php echo esc_html(cs_get_customize_option( 'section_border_color','#000' )) ?> ;
			}
			.section-title h2 i{
				border-left:3px solid <?php echo esc_html(cs_get_customize_option( 'section_border_color','#000' )) ?> ;
			}
			.section-title h2{
				color:<?php echo esc_html(cs_get_customize_option( 'section_header_color','#000' )) ?> ;
			}
			
		</style>
		<?php
	}
}
 ?>
