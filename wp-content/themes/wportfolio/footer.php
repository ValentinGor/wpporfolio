<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="social">
                    <?php $data_social = carbon_get_theme_option( 'social' ); ?>
                    <?php if ( ! empty( $data_social ) ): ?>
                        <?php foreach ( $data_social as $item_social ): ?>
                            <div class="social__link">
                                <a href="<?php echo $item_social['social_link'] ?>" target="_blank">
                                    <i class="<?php echo $item_social['social_icon'] ?>"></i>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                    Copyright ©<?php echo date('Y')?> All rights reserved
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
