<?php
    function the_slug() {
        $post_data = get_post($post->ID, ARRAY_A);
        $slug = $post_data['post_name'];
        return $slug;
    }

    function my_function_admin_bar() { return false; }
    add_filter('show_admin_bar' , 'my_function_admin_bar');

    function new_excerpt_more($more) { return '...'; }
    add_filter( 'excerpt_more', 'new_excerpt_more' );
    function custom_excerpt_length($length) { return 32; }
    add_filter('excerpt_length', 'custom_excerpt_length', 32 );

    register_sidebar(array(
        'name' => 'Header', 'id' => 'header',
        'before_widget' => '<section class="widget" id="%2$s">', 'after_widget' => '</section>',
        'before_title' => '<h1>', 'after_title' => '</h1>'
    ));

    function register_my_menus() {
        register_nav_menus(array('headermenu' => __('Header Menu')));
    }
	add_action('init', 'register_my_menus');
?>