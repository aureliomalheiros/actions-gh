<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function projeto_scripts() {
	wp_deregister_script('jquery');

	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', [], false, true );
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/all.min.js', array('plugins-script' ), false, true );

	wp_enqueue_script( 'main-script' );
}

function projeto_styles() {
	wp_register_style( 'plugins-styles', get_template_directory_uri() . '/css/plugins.css', [], false, false );
  wp_register_style( 'main-styles', get_template_directory_uri() . '/css/main.css', array('plugins-styles'), false, false );
  
	wp_enqueue_style( 'main-styles' );

}

add_action( 'wp_enqueue_scripts', 'projeto_scripts' );
add_action( 'wp_enqueue_scripts', 'projeto_styles' );


function register_my_menus() {
    register_nav_menus(
      array(
        'institucional-menu' => __( 'Institucional Menu' ),
        'conteudotech-menu' => __( 'Ceonteúdo Tech' ),
        'blogs-menu' => __( 'Blogs Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Editar Footer',
			'menu_title'	=> 'Editar Footer',
			'menu_slug' 	=> 'dashicons-align-wide',
			'icon_url' 		=> 'dashicons-align-wide',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}

	// adicione o suporte para CORS
	function add_cors_http_header(){
		header("Access-Control-Allow-Origin: *");
	}
	
	add_action('init','add_cors_http_header');
?>