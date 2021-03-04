<?php
/*
Template Name: Blog Page
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page__head">
                    <h1>Blog</h1>
                </div>
            </div>
            <div class="col-lg-12">

                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' => 4,
                    'order'   => 'DESC'
                );

                $query = new WP_Query( $args );

                // Цикл
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        include 'inc/list-post.php';
                    }
                } else {
                    // Постов не найдено
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>