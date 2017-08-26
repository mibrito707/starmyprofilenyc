 <!--=============Start footer area============-->
        <section class="footer-area sect-pad">
            <div class="container">
                <div class="footer-content">
                    <?php if(cs_get_option('napoli_scroll_top')){ ?>
                    <div class="scroll-t"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                    <?php } ?>
                    <a href="#" class="logo wow fadeInDown" data-wow-delay="0.6s">
                    	<?php
                            $image_id = cs_get_option( 'napoli_footer_logo' );
                            if(!empty($image_id)){
                            $attachment = wp_get_attachment_image_src( $image_id, 'full' );
                        ?>
                        <img src="<?php echo esc_url( $attachment[0]) ?>" alt="<?php echo  esc_html__('Footer logo','napoli') ?>">
                        <?php } ?>
                    </a>
                    <?php echo wp_kses_post(cs_get_option('napoli_copyright') ); ?>

                </div>
            </div>
        </section>
        <!--=============End footer area============-->
    <?php wp_footer(); ?>
</body>
</html>
