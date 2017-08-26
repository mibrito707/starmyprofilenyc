<?php
// Put in your theme functions.php to auto verify
// Make sure that you've registered your theme to valid this license
define('KC_LICENSE', 'l483kg4m-jxbv-ju7k-or7h-yhgd-q3jl1ec3fqyi');

define('NAPOLI_ASSETS_URL', get_template_directory_uri() . '/assets/');
define('NAPOLI_THEME_URL', get_template_directory_uri() );
if(!function_exists('cs_get_option')){
 	require_once get_template_directory() .'/includes/cs-framework/cs-framework.php' ;
}
require_once get_template_directory() .'/includes/init.php';
if ( !isset($content_width) ) { $content_width = 1170; }
function napoli_init(){
	load_theme_textdomain( 'napoli', get_template_directory() . '/languages' );
	add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('napoli-fullsize', 1170, 0, true);
    add_image_size('napoli-portfolio-slider', 1170, 780, true);
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'napoli')
        )
    );
    add_theme_support('post-formats', array('image', 'video', 'audio', 'gallery'));
}
add_action('after_setup_theme', 'napoli_init');

/** Enqueue script **/
add_action('wp_enqueue_scripts', 'napoli_enqueue_scripts');
function napoli_enqueue_scripts(){
    wp_enqueue_style( 'linearicons',NAPOLI_ASSETS_URL . 'vendors/elegant-icon/style.css');
    wp_enqueue_style( 'fontawesome',NAPOLI_ASSETS_URL . 'css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap',NAPOLI_ASSETS_URL . 'css/bootstrap.min.css');
    wp_enqueue_style( 'napoli-camera-slider',NAPOLI_ASSETS_URL . 'vendors/camera-slider/css/camera.css');
    wp_enqueue_style( 'owl-carousel',NAPOLI_ASSETS_URL . 'vendors/owl-carousel/owl.carousel.css');
    wp_enqueue_style( 'animate-css',NAPOLI_ASSETS_URL . 'vendors/animate-css/animate.css');
    wp_enqueue_style( 'napoli-magic',NAPOLI_ASSETS_URL . 'vendors/animate-css/magic.min.css');
    wp_enqueue_style( 'napoli-style-css',NAPOLI_ASSETS_URL . 'css/style.css');
    wp_enqueue_style( 'napoli-response-css',NAPOLI_ASSETS_URL . 'css/responsive.css');
    wp_enqueue_style( 'napoli-main-css',get_template_directory_uri(). '/style.css');
    //JS
     wp_enqueue_script( 'bootstrap-js', NAPOLI_ASSETS_URL . 'js/bootstrap.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'waypoints', NAPOLI_ASSETS_URL . 'vendors/waypoint/waypoints.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'napoli-counterup', NAPOLI_ASSETS_URL . 'vendors/couterup/jquery.counterup.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'carousel-js', NAPOLI_ASSETS_URL . 'vendors/owl-carousel/owl.carousel.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'wow', NAPOLI_ASSETS_URL . 'vendors/animate-css/wow.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'isotope', NAPOLI_ASSETS_URL . 'vendors/isotope/isotope.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'napoli-imagesloaded', NAPOLI_ASSETS_URL . 'vendors/imagesloaded/imagesloaded.pkgd.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'jquery-form', NAPOLI_ASSETS_URL . 'jquery.form.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'validate', NAPOLI_ASSETS_URL . 'js/jquery.validate.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'napoli-contact', NAPOLI_ASSETS_URL . 'js/contact.js',  array( 'jquery' ), false, true);
     $napoli_maps_url = '//maps.googleapis.com/maps/api/js';
     if ( cs_get_option( 'napoli_google_api' ) ) {
        $napoli_maps_url = 'https://maps.googleapis.com/maps/api/js?key='.cs_get_option('napoli_google_api').'&callback=initMap';
    }
    wp_enqueue_script( 'napoli-napoli-core-google-maps', esc_url($napoli_maps_url),  array( 'jquery' ), true, true);
     wp_enqueue_script( 'gmnaps', NAPOLI_ASSETS_URL . 'js/gmaps.min.js',  array( 'jquery' ), true, true);
     wp_enqueue_script( 'google-mnaps', NAPOLI_ASSETS_URL . 'js/google-map.js',  array( 'jquery' ), true, true);
     wp_enqueue_script( 'napoli-camera-js', NAPOLI_ASSETS_URL . 'vendors/camera-slider/js/camera.min.js',  array( 'jquery' ), false, true);
     wp_enqueue_script( 'napoli-main-js', NAPOLI_ASSETS_URL . 'js/main.js',  array( 'jquery' ), false, true);
     wp_localize_script( 'napoli-napoli-like-post', 'NapoliLike', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
		wp_enqueue_script( 'napoli-html5',NAPOLI_ASSETS_URL.'js/html5shiv.min.js', array( 'jquery' ),false,true);
		wp_script_add_data( 'napoli-html5','conditional','lt IE 9');
		wp_enqueue_script( 'napoli-respon',NAPOLI_ASSETS_URL.'js/respond.min.js', array( 'jquery' ),false,true);
		wp_script_add_data( 'napoli-respon','conditional','lt IE 9');


}
function napoli_google_fonts_url()
{
    $fonts_url       = null;
    $PlayfairDisplay = _x('on', 'Playfair Display font: on or off', 'napoli');
    $Montserrat      = _x('on', 'Montserrat font: on or off', 'napoli');
    $Lato            = _x('on', 'Lato font: on or off', 'napoli');
    if ( 'off' !== $PlayfairDisplay || 'off' !== $Montserrat || 'off' !== $Lato )
    {
        $font_families = array();
        if ('off' !== $PlayfairDisplay) { $font_families[] = 'Playfair Display:400,400italic'; }
        if ('off' !== $Montserrat) { $font_families[] = 'Montserrat:400,700'; }
        if ('off' !== $Lato) { $font_families[] = 'Lato:400,400italic,700'; }
        $fonts = cs_get_option('napoli_font_family');
        if( !empty($fonts)){
            $font_families = $fonts['family'].':'.$fonts['variant'];
        }
        $query_args = array(
            'family' => urlencode(implode('|', $font_families )),
            'subset' => urlencode('latin,latin-ext')
        );
        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }
    return esc_url_raw($fonts_url);
}

// Google fonts
function napoli_enqueue_googlefonts() {
    wp_enqueue_style( 'napoli-googlefonts', napoli_google_fonts_url(), array(), null );
}


function napoli_add_love()
{
    global $post;

    $post_id = (int)$post->ID;
    $love_count = get_post_meta($post_id, '_napoli_like_post', true);

    if( !$love_count )
    {
        $love_count = 0;
        add_post_meta($post_id, '_napoli_like_post', $love_count, true);
    }

    $class = 'napoli-like-post';
    $title = esc_html__('Like this', 'napoli');
    if( isset($_COOKIE['napoli_like_post_'. $post_id]) ){
        $class = 'napoli-like-post liked';
        $title = esc_html__('You already liked this!', 'napoli');
    }

    return '<a href="#" class="'. $class .'" id="napoli-like-post-'. $post_id .'" title="'. esc_attr($title) .'"><i class="fa fa-heart-o"></i> '.$love_count.'</a>';
}

// Custom excerpt max charlength
function napoli_the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;
    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo esc_attr($subex);
        }
        echo wp_kses_post(' [...]');
    } else {
        echo esc_attr($excerpt);
    }
}
// Comment Layout
function napoli_custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
        <div class="comment-author">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comment-content">
            <h4 class="author-name"><?php echo get_comment_author_link(); ?></h4>
            <span class="date-comment">
                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php printf( esc_html__('%1$s at %2$s', 'napoli'), get_comment_date(),  get_comment_time() ); ?></a>
            </span>
            <div class="reply">
                <?php edit_comment_link( esc_html__( '(Edit)', 'napoli' ), '  ', '' );?>
                <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'napoli' ); ?></em>
                <br />
            <?php endif; ?>
            <div class="comment-text"><?php comment_text(); ?></div>
        </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php
}

function napoli_pagination()
{
    global $wp_query;
    if ( (int)$wp_query->found_posts > (int)get_option('posts_per_page') ) : ?>
    <div class="napoli-pagination"><?php
        $args = array(
            'prev_text' => '<span class="lnr lnr-chevron-left"><i class="fa fa-fast-backward" aria-hidden="true"></i></span>',
            'next_text' => '<span class="lnr lnr-chevron-right"><i class="fa fa-fast-forward" aria-hidden="true"></i></span>'
        );
        the_posts_pagination($args);
    ?>
    </div>
    <?php
    endif;
}

if(!function_exists('napoli_basename')){
   function napoli_basename($name){
       if(strpos($name, '/') >=0){
           $ex  = @explode('/', $name) ;
           return end($ex);
       }elseif(strpos($name, "\\") >=0){
            $ex  = @explode('\\', $name) ;
           return end($ex);
       }else{
           return $name;
       }
   }
}


add_action( 'widgets_init', 'napoli_widgets_init' );
function napoli_widgets_init()
{
    register_sidebar(array(
        'name'            => esc_html__('Sidebar','napoli'),
        'id'              => 'sidebar',
        'before_widget'   => '<div id="%1$s" class="widget %2$s">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'     => '</h4>'
    ));
}

if ( is_singular() ) {
	wp_enqueue_script( "comment-reply" );
}

class Napoli_Nav_Walker extends Walker_Nav_Menu{

}
?>
