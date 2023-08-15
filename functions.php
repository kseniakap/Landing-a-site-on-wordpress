<?php
add_action("wp_enqueue_scripts", "chilhood_styles");
add_action("wp_enqueue_scripts", "chilhood_scripts");


    function chilhood_styles(){
        wp_enqueue_style("chilhood-style", get_stylesheet_uri());
        // wp_enqueue_style("header-style", get_template_directory_uri() . '/assets/styles/main.min.css');
        // wp_enqueue_style("animate-style", "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css");
    };

    function chilhood_scripts(){
        wp_enqueue_script( "childhood-scripts", get_template_directory_uri() . "./assets/js/main.min.js", array(), null, true );
        //wp уже включает в себя jquery array("jquery")
    };

    add_theme_support( 'custom-logo' );//появится возможность вставки лого
    add_theme_support( 'post-thumbnails' );//изображение у поста
?>