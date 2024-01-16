<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'add_menu');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

function theme_add_scripts()
{


    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');





    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);

    // Подключаем js файл baguettebox.js
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js', array(), null, true);

    // Подключаем js файл wow.js
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array(), null, true);

    // Подключаем основной main.js файл
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
    
    // Подключаем japan файл
    wp_enqueue_script('japan', get_template_directory_uri() . '/js/japan.js', array(), null, true);

    function my_scripts() {
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );


   
    
}

    add_filter( 'redirect_canonical', 'my_redirect_canonical_filter', 10, 2 );

    /**
     * Function for <code>redirect_canonical</code> filter-hook.
     * 
     * @param string $redirect_url  The redirect URL.
     * @param string $requested_url The requested URL.
     *
     * @return string
     */
    function my_redirect_canonical_filter( $redirect_url, $requested_url ){

        if (str_ends_with($requested_url,"=")) {
        return false;
        }
        return $redirect_url;
    }


    // Делает редирект disable
    function page_disable_redirect_canonical($redirect_url) {
        if(is_page())
            $redirect_url = false;

        return $redirect_url;
    }

    remove_action('template_redirect', 'redirect_canonical');



    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');    

    function add_jivo_script() {
        wp_enqueue_script( 'jivo_script', '//code.jivo.ru/widget/3S3KXnJwwC', array(), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'add_jivo_script' );

    function add_menu() {
        register_nav_menu('top-left', 'левое меню шапки');
        register_nav_menu('top-right', 'правое меню шапки');
        register_nav_menu('menu-catalog', 'меню-каталога');
    }

     // Добавляет вкладку "отзывы" для меню админки Wordpress"
     add_action('init', 'create_post_type');
     function create_post_type()
     {
         register_post_type('testimonial',
             array(
                 'public' => true,
                 'has_archive' => true,
                 'exclude_from_search' => false,
                 'publicly_queryable' => true,
                 'labels' => array(
                     'name' => 'Отзывы',
                     'singular_name' => 'Отзывы',
                     'menu_name' => 'Отзывы',
                     'all_items' => 'Все отзывы'
                 ),
                 'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
                 'taxonomies' => array('category'),
             ));
     }


     the_posts_pagination(array (
        'end_size' => 2,
     ) )

?>