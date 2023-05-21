<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Hook pour ajouter Admin si connecté 
function my_wp_nav_menu_args (
    $args ='' ) {
        if (is_user_logged_in() )
            {
                $args['menu'] = 6 ;
            } else {
                $args['menu'] = 5;
            }
            return $args;    
    }
    add_filter(
        'wp_nav_menu_args',
        'my_wp_nav_menu_args'
    );  
   

   
        
    
