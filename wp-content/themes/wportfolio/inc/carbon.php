<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    $basic_options_container = Container::make('theme_options', __('Theme Options'))
        ->set_icon('dashicons-welcome-widgets-menus')
        ->add_fields(array(
            Field::make("header_scripts", "crb_header_scripts", __('Header scripts', 'wportfolio')),
            Field::make("footer_scripts", "crb_footer_scripts", __('Footer scripts', 'wportfolio')),
        ));

    // Header
    Container::make('theme_options', 'header_logo', __('Header', 'wportfolio'))
        ->set_page_parent($basic_options_container)// reference to a top level container
        ->add_fields(array(
            Field::make('image', 'logo', __('Logo', 'wportfolio'))
                ->set_value_type('url')
                ->set_help_text('Format Supported .svg'),
        ));

    // Footer
    Container::make('theme_options', 'footer', __('Footer', 'wportfolio'))
        ->set_page_parent($basic_options_container)// reference to a top level container
        ->add_fields(array(
            Field::make('complex', 'social', __('Social', 'wportfolio'))
                ->add_fields(array(
                    Field::make('text', 'social_icon', __('Social icon', 'wportfolio')),
                    Field::make('text', 'social_link', __('Social link', 'wportfolio')),
                )),
        ));

    // Главная страница
    Container::make('post_meta', 'main-page', __('Main Page Content', 'wportfolio'))
        ->where('post_type', '=', 'page')
        ->where('post_template', '=', 'main-page.php')
        ->add_fields(array(
            Field::make('text', 'main_head', __('Main head', 'wportfolio')),
            Field::make('text', 'main_slag', __('Main slag', 'wportfolio')),
            Field::make('image', 'main_image', __('Main image', 'wportfolio'))
                ->set_value_type('url'),

            Field::make('complex', 'our_partners', __('Our partners', 'wportfolio'))
                ->add_fields(array(
                    Field::make('image', 'our_partners_image', __('Partners image', 'wportfolio'))
                        ->set_value_type('url'),
                )),

        ));

    // Содержимое Статьи
    Container::make('post_meta', 'page-article', __('Article Content', 'wportfolio'))
        ->where('post_type', '=', 'post')
        ->where('post_template', '=', 'post-page.php')
        ->add_fields(array(
            Field::make('text', 'article_num', __('Services Number', 'wportfolio'))
                ->help_text("1 = Masks; 2 = Antibody tests; 3 = Gloves; 4 = On-demand"),

            Field::make('textarea', 'article_text', __('Article Text', 'wportfolio')),
            Field::make('text', 'article_link_text', __('Article link text', 'wportfolio')),
            Field::make('text', 'article_link_link', __('Article link link', 'wportfolio')),
        ));
}

