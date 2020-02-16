<?php
    function testTheme_setup(){
        wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=Lato|Miriam+Libre&display=swap');
        wp_enqueue_style( 'googleIcons', '//fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_style( 'codePrismBlock', get_stylesheet_uri(  '/css/prism/prism.css'));
        wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime());
        wp_enqueue_script( 'main', get_theme_file_uri( '/js/main.js' ), NULL, microtime(), true );
        wp_enqueue_script( 'prism', get_theme_file_uri( '/js/prism.js' ), NULL, microtime(), true );
    }

    add_action( 'wp_enqueue_scripts', 'testTheme_setup' );

    // Adding themem support
    function testTheme_init(){
        add_theme_support( 'post-thumbnails' ); //Featured image under  'post -> add new' menu
        add_theme_support( 'title-tag' );
    }
    
    add_action( 'after_setup_theme', 'testTheme_init' );

    // Adding custom post type to the theme
    function testTheme_custom_post_project(){
        register_post_type( 'Projects', array(
            'rewrite'=>array('slug'=>'Projects'),
            'labels'=>array(
                'name'=>'Projects',
                'singular_name'=>'Project',
                'add_new_item'=>'add new projectos',
                'edit_item'=>'edit the project'
            ),
            'menu-icon'=>'dashicons-admin-appearance',
            'public'=>true,
            'has_archive'=>true,
            'supports'=>array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
            ) 
        );
    }

    add_action( 'init', 'testTheme_custom_post_project' );
?>