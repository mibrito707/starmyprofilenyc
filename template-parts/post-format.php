<?php if ( has_post_format('gallery') ) : ?>
    <?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
    <?php if ( $images ) : ?>
    <div class="post-format post-gallery owl-carousel" data-nav="true" data-nav="true" data-items="1" data-autoplay="true">
        <?php foreach ( $images as $image_id ) : ?>
            <?php
                $image_url = napoli_resize_image( $image_id, null, 1170, 650, true, true );
                $image_url = $image_url['url'];
                $imgage_caption = get_post_field( 'post_excerpt', $image_id );
            ?>
            <div class="slide-item"><img src="<?php echo esc_url($image_url); ?>" alt="" <?php if ($imgage_caption) : ?>title="<?php echo esc_attr($imgage_caption); ?>"<?php endif; ?> /></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
<?php elseif ( has_post_format('video') ) : ?>
    <div class="post-format post-video">
        <?php $video = get_post_meta( get_the_ID(), '_format_video_embed', true ); ?>
        <?php if ( wp_oembed_get($video) ) : ?>
            <?php echo wp_oembed_get($video,array()); ?>
        <?php else : ?>
            <?php print apply_filters( 'the_content',$video ); ?>
        <?php endif; ?>
    </div>
<?php elseif ( has_post_format('audio') ) : ?>
    <div class="post-format post-audio">
        <?php $audio = get_post_meta( get_the_ID(), '_format_audio_embed', true ); ?>
        <?php if ( wp_oembed_get($audio) ) : ?>
            <?php echo wp_oembed_get($audio); ?>
        <?php elseif($audio !="") : ?>
            <?php print apply_filters( 'the_content', $audio ); ?>
            <?php // echo wp_kses_post($audio); ?>
        <?php endif; ?>

    </div>
<?php else: ?>
    <?php if ( has_post_thumbnail() ) : ?>
        <?php
            $thumb_id = get_post_thumbnail_id();
            $image_url = napoli_resize_image( $thumb_id, null, 1170, 650, true, true );
            $image_url = $image_url['url'];
        ?>
    <div class="post-format post-standard">
        <?php if ( !is_single() ) : ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_url); ?>" alt="" /></a>
        <?php else : ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="" />
        <?php endif; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>
