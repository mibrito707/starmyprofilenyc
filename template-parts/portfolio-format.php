<?php if ( function_exists('rwmb_meta') ) : ?>
    <?php $portfolio_format = rwmb_meta('anzio_portfolio_format'); ?>        
    <?php if ($portfolio_format == 'audio' || $portfolio_format == 'video') : ?>
        <?php $field_id = ($portfolio_format == 'audio') ? 'audio' : 'video'; ?>
        <div class="post-format post-oembed"><?php echo rwmb_meta("{$field_id}", 'type=oembed'); ?></div>
    <?php elseif ($portfolio_format == 'slider') : ?>
        <div class="post-format post-gallery owl-carousel" data-nav="true" data-items="1" data-autoplay="true" data-dots="true">
        <?php $images = rwmb_meta( 'slider', 'type=image&size=anzio-portfolio-slider' ); ?>        
        <?php if ( !empty( $images ) ) : foreach ( $images as $image ) : ?>
            <?php
                $image_url = anzio_resize_image( $image['ID'], null, 1170, 580, true, true );
                $image_url = $image_url['url'];
            ?>
            <div class="slide-item"><img src="<?php echo esc_url($image_url); ?>" alt="" /></div>
        <?php endforeach; endif; ?>
        </div>
    <?php else: ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php $thumb_id = get_post_thumbnail_id(); ?>
            <?php $image_url = anzio_resize_image( $thumb_id, null, 1170, 780, true, true ); ?>
            <?php $image_url = $image_url['url']; ?>
            <div class="post-format post-standard"><img src="<?php echo esc_url($image_url); ?>" alt="" /></div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
