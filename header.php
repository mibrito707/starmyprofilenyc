<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
            <meta charset="<?php bloginfo( 'charset' ); ?>"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <?php wp_head(); ?>
    </head>
    <body  <?php body_class( ); ?>>
    <div class="sampleContainer">
        <div class="loading">
            <h2><?php echo   esc_html(get_bloginfo('name') ); ?></h2>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
      <?php echo '<!-- ' .napoli_basename(get_page_template()) . ' -->'; ?>

    <?php if(napoli_basename(get_page_template()) != 'full-width.php' ): ?>
        <?php
            $show_social = 'yes';
            ?>
        <!--==========Start header area==========-->

        <header class="header " id="home">
            <nav class="container-fluid header-navigation">
                <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php _e('Toggle navigation','napoli'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                </div>
                <div class="left-side pull-left">
                    <div class="logo">
                    <h1>
                    <a href="<?php echo  esc_url( home_url() );?>" title="<?php echo esc_html(get_bloginfo( 'description' ) ); ?>">
                    <?php
                        $image_id = cs_get_option( 'napoli_logo' );
                        if(!empty($image_id)):
                        $attachment = wp_get_attachment_image_src( $image_id, 'full' );
                         ?>
                        <img src="<?php echo  esc_url($attachment[0] ); ?>" title="<?php echo esc_html(get_bloginfo( 'description' ) ); ?>" alt="<?php echo esc_html(get_bloginfo('sitename' ) ); ?>">
                    <?php else:  ?>
                        <?php bloginfo('name' ); ?>
                    <?php endif; ?>
                    </a>
                    </h1>
                    </div>
                </div>

                <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                           <?php
                               /**
                                * Displays a navigation menu
                                * @param array $args Arguments
                                */
                                $args = array(
                                    'theme_location' => 'primary',
                                    'menu' => 'test',
                                    'container' => 'div',
                                    'container_class' => 'menu-primary-container',
                                    'container_id' => '',
                                    'menu_class' => 'nav-menu nav navbar-nav',
                                    'menu_id' => 'primary-menu',
                                    'echo' => true,
                                    'fallback_cb' => 'wp_page_menu',
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                    'depth' => 0,
                                    'walker' => ''
                                );

                                wp_nav_menu( $args );
                           ?>

                    <div class="right-side mobile-social">
                        <ul class="nav social pull-left">
                            <?php if(cs_get_option('social_facebook')):  ?><li><a href="<?php echo esc_url(cs_get_option('social_facebook') ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_twitter')):  ?><li><a href="<?php echo esc_url(cs_get_option('social_twitter') ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_instagram')): ?><li><a href="<?php echo esc_url(cs_get_option('social_instagram') ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php endif; ?>
                             <?php if(cs_get_option('social_Pinterest')): ?><li><a href="<?php echo esc_url(cs_get_option('social_Pinterest') ); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_google_plus')): ?><li><a href="<?php echo esc_url(cs_get_option('social_google_plus') ); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a></li><?php endif; ?>

                        </ul>
                    </div>
                </div>
                <div class="right-side mobile">
                    <ul class="nav social pull-left">
                            <?php if(cs_get_option('social_facebook')):  ?><li><a href="<?php echo esc_url(cs_get_option('social_facebook') ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_twitter')):  ?><li><a href="<?php echo esc_url(cs_get_option('social_twitter') ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_instagram')): ?><li><a href="<?php echo esc_url(cs_get_option('social_instagram') ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php endif; ?>
                             <?php if(cs_get_option('social_Pinterest')): ?><li><a href="<?php echo esc_url(cs_get_option('social_Pinterest') ); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li><?php endif; ?>
                            <?php if(cs_get_option('social_google_plus')): ?><li><a href="<?php echo esc_url(cs_get_option('social_google_plus') ); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a></li><?php endif; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!--==========End header area==========-->
    <?php endif; ?>

    <?php
    if ( !is_single()  &&  napoli_basename(get_page_template()) != 'full-width.php' )
        {
            if ( is_page() ) {
                $napoli_page_title = get_the_title() ? get_the_title() : null;
            } elseif ( is_home() ) {
                $napoli_page_title = cs_get_option('blog_title') ? cs_get_option('blog_title') : esc_html__('The Blog', 'napoli');
            } elseif ( is_category() ) {
                $napoli_page_title = esc_html__('Browsing Category', 'napoli') . ': ' . single_cat_title('', false);
            } elseif ( is_tag() ) {
                $napoli_page_title = esc_html__('Browsing Tag', 'napoli') . ': ' . single_tag_title('', false);
            } elseif ( is_author() ) {
                $napoli_page_title = esc_html__('All Posts By', 'napoli') . ': ' . get_the_author();
            } elseif ( is_day() ) {
                $napoli_page_title = esc_html__('Daily Archives', 'napoli') . ': ' . get_the_date();
            } elseif ( is_month() ) {
                $napoli_page_title = get_the_date( _x( 'F Y', 'monthly archives date format', 'napoli' ) );
            } elseif ( is_year() ) {
                $napoli_page_title = get_the_date( _x( 'Y', 'yearly archives date format', 'napoli' ) );
            } elseif ( is_search() ) {
                $napoli_page_title = esc_html__('Search results for', 'napoli') . ': ' . get_search_query();
            } elseif ( is_tax() ) {
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                $napoli_page_title = $term->name;
            } else {
                $napoli_page_title = esc_html__('Archives', 'napoli');
            }

            $napoli_image_url = get_template_directory_uri() . '/assets/images/blog/banner.jpg';
            if ( is_page() ) {
                if ( has_post_thumbnail() ) {
                     $napoli_image_url =get_the_post_thumbnail_url();
                }else{
                    if(cs_get_option('page_image')){

                       $napoli_image_url =  wp_get_attachment_image_src( cs_get_option('page_image'),'full')[0];
                    }else{
                        $napoli_image_url = get_template_directory_uri() . '/assets/images/blog/banner.jpg';
                    }
                }
            } else {
                $napoli_image_url = cs_get_option('blog_image') ? wp_get_attachment_image_src( cs_get_option('blog_image'), 'full' )[0] : get_template_directory_uri() . '/assets/images/blog/banner.jpg';
            }

            if ( (is_page() && !is_front_page()) ) {
                if ( cs_get_option('show_banner_page') ) { ?>
                <div class="az-page-banner text-center bg-parallax" <?php if ($napoli_image_url) : ?>style="background-image: url(<?php echo esc_url($napoli_image_url); ?>);"<?php endif; ?>>
                    <h2><?php echo esc_attr($napoli_page_title); ?></h2>
                </div><?php
                }
            } elseif(!is_front_page()) { ?>
            <!-- Do something-->
                <div class="not-is-page az-page-banner text-center bg-parallax" <?php if ($napoli_image_url) : ?>style="background-image: url(<?php echo esc_url($napoli_image_url); ?>);"<?php endif; ?>>
                    <h2><?php echo esc_attr($napoli_page_title); ?></h2>
                </div>
               <?php
            }
        }
     ?>
