<?php
/*
Template Name: Articles Page
Template Post Type: post
*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page__head">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="article">
                    <div class="work__info_txt-date">
                        <div class="work__info_txt-date-y"><?php echo get_the_date('Y'); ?></div>
                        <div class="blog__item_info-link"><?php echo get_the_tag_list('',', ','');?></div>
                    </div>
                    <div class="article__info mt-5">
                        <?php if ( carbon_get_post_meta( get_the_ID(), 'articles_except' ) ) { ?>
                            <p><?php echo carbon_get_post_meta( get_the_ID(), 'articles_except' ); ?></p>
                        <?php } ?>
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php $data_articles_slide = carbon_get_post_meta( get_the_ID(), 'articles_slide' ); ?>
                                <?php if ( ! empty( $data_articles_slide ) ): ?>
                                    <?php foreach ( $data_articles_slide as $item ): ?>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="<?php echo $item['articles_slide_image'] ?>" alt="img">
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                        <?php if ( carbon_get_post_meta( get_the_ID(), 'article_text' ) ) { ?>
                                <?php echo carbon_get_post_meta( get_the_ID(), 'article_text' ); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>