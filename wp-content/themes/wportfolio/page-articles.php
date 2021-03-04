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
                    <h1>Designing Dashboards with usability in mind</h1>
                </div>
                <div class="article">
                    <div class="work__info_txt-date">
                        <div class="work__info_txt-date-y">2020</div>
                        <div class="work__info_txt-date-c">Dashboard</div>
                    </div>
                    <div class="article__info mt-5">
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                            duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>

                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>



                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpg" alt="img">
                        <h2>Heading 1</h2>
                        <h3>Heading 2</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                            duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-5.jpg" alt="img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-6.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>