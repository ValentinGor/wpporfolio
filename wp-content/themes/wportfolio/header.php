<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wportfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top__line">

                    <?php if ( carbon_get_theme_option( 'logo' ) ) { ?>
                        <div class="top__line_logo">
                            <a href="<?php echo home_url()?>">
                                <img src="<?php echo carbon_get_theme_option( 'logo' ); ?>" alt="img">
                            </a>
                        </div>
                    <?php } ?>

                    <?php if ( carbon_get_post_meta( get_the_ID(), 'logo' ) ) { ?>
                        <?php echo carbon_get_post_meta( get_the_ID(), 'logo' ); ?>
                    <?php } ?>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'menu' => 'Primary',
                        'container' => 'div',
                        'container_class' => 'top__line_menu',
                        // 'container_id' => '',
                        // 'menu_class' => 'menu',
                        // 'menu_id' => '',
                        // 'echo' => true,
                        // 'fallback_cb' => 'wp_page_menu',
                        // 'before' => '',
                        // 'after' => '',
                        // 'link_before' => '',
                        // 'link_after' => '',
                        // 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        // 'depth' => 0,
                        // 'walker' => '',
                    ]);
                    ?>
                    <div class="mobile__menu">
                        <a id="mobile_menu_toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mobile__menus" class="mobile__menus">
        <div class="mobile__menus_logo">
            <a href="<?php echo home_url();?>">
                Logo
            </a>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'menu-1',
            'menu' => 'Primary',
            'container' => 'div',
            'container_class' => 'mobile__menus_list',
            // 'container_id' => '',
            // 'menu_class' => 'menu',
            // 'menu_id' => '',
            // 'echo' => true,
            // 'fallback_cb' => 'wp_page_menu',
            // 'before' => '',
            // 'after' => '',
            // 'link_before' => '',
            // 'link_after' => '',
            // 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            // 'depth' => 0,
            // 'walker' => '',
        ]);
        ?>
        <div class="mobile__menus_icon">
            <div class="social">
                <div class="social__link">
                    <a href="#">
                        <i class="res-fb"></i>
                    </a>
                </div>
                <div class="social__link">
                    <a href="#">
                        <i class="res-in"></i>
                    </a>
                </div>
                <div class="social__link">
                    <a href="#">
                        <i class="res-tw"></i>
                    </a>
                </div>
                <div class="social__link">
                    <a href="#">
                        <i class="res-ln"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>