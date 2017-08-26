<?php get_header(); ?>
<div class="napoli-wrapper">
    <div class="container">
        <div class="row">
            <?php if(cs_get_option('layout_option') == 'left' && is_active_sidebar('sidebar') ): ?>
            <div class="col-md-3  col-xs-12">
                <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
            <div class="<?php if(cs_get_option('layout_option') != 'full' || !is_active_sidebar('sidebar') ):?>col-md-9<?php else:?>col-md-12<?php endif;?> col-xs-12">
                <div class="anzio-blog">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php $sticky_class = ( is_sticky() ) ? 'is_sticky' : null; ?>
                        <div <?php post_class("blog-item {$sticky_class}"); ?>>
                            <?php get_template_part('template-parts/post', 'format'); ?>
                            <div class="main-content-post">
                                <h3 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="cats-post"><?php the_category(', '); ?></div>
                                <div class="excerpt-post"><?php napoli_the_excerpt_max_charlength(350); ?></div>
                                <ul class="meta-post">
                                    <li><a href="<?php echo get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') ); ?> "><i class="fa fa-clock-o"></i><?php the_time(get_option('date_format')); ?></a></li>
                                    <li><?php comments_popup_link( '<i class="fa fa-comment-o"></i><span></span> No comment', '<i class="fa fa-comment-o"></i><span> 1</span>', '<i class="fa fa-comment-o"></i><span> %</span>', '', ''); ?></li>
                                    <li><?php echo wp_kses_post( napoli_add_love() ); ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php napoli_pagination(); ?>
                </div>
            </div>
             <?php if((cs_get_option('layout_option') == 'right' || cs_get_option('layout_option') == null) && is_active_sidebar('sidebar') ) : ?>
                <div class="col-md-3  col-xs-12">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
