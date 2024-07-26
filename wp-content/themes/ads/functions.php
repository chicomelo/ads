<?php
require_once get_theme_file_path().'/inc/functions/thumbnail-size.php';
require_once get_theme_file_path().'/inc/functions/featured-posts.php';
require_once get_theme_file_path().'/inc/functions/category-featured-post.php';
require_once get_theme_file_path().'/inc/functions/posts-list.php';
require_once get_theme_file_path().'/inc/functions/sidebar-list.php';
require_once get_theme_file_path().'/inc/functions/breadcrumbs.php';
require_once get_theme_file_path().'/inc/functions/most-read-posts.php';

// Função para limitar tamanho de texto
function max_title_length( $title, $limite = 70 ) {
	$contador = strlen($title);
	if ( $contador >= $limite ) {
		$title = substr($title, 0, strrpos(substr($title, 0, $limite), ' ')) . ' ...';
	  	return $title;
	}
	else{
		return $title;
	}
}

// Muda processador de imagens
function hs_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );

if ( ! function_exists( 'ads_assets' ) ) :

	function ads_assets() {

		global $wp_query;

		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// styles
		wp_register_style( 
			'main-style', 
			get_template_directory_uri() . '/assets/css/main-style.css',
			array(),
			$version_string
		);

		// scripts
		wp_register_script( 
			'main-scripts', 
			get_template_directory_uri() . '/assets/js/main-scripts.js',
			array('jquery'),
			$version_string,
			true
		);
		wp_register_script( 
			'slick-slider', 
			get_template_directory_uri() . '/assets/js/slick.min.js',
			array('jquery'),
			$version_string,
			true
		);
		wp_register_script( 
			'fancybox', 
			get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js',
			array('jquery'),
			$version_string,
			true
		);
		wp_register_script( 
			'jquery-mask', 
			get_template_directory_uri() . '/assets/js/jquery.mask.min.js',
			array('jquery'),
			$version_string,
			true
		);
		
		wp_enqueue_style( 'main-style' );
		wp_enqueue_script( 'main-scripts' );
		wp_enqueue_script( 'slick-slider' );
		wp_enqueue_script( 'fancybox' );
		wp_enqueue_script( 'jquery-mask' );

		wp_localize_script( 'main-scripts', 'load_more_params', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'posts' => json_encode( $wp_query->query_vars ),
			'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
			'max_page' => $wp_query->max_num_pages
		) );
	}

endif;
add_action( 'wp_enqueue_scripts', 'ads_assets' );




function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);




function loadmore_ajax_handler(){
    $args = json_decode( stripslashes( $_POST['query'] ), true );

	$page = $_POST['page'] + 1;
    $args['paged'] = $page;
    $args['post_status'] = 'publish';
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
    $args['posts_per_page'] = 5;

	if ($args['category_name'] !== ''): 
		$args['offset'] = 1 + ( ($page - 1) * 5 );
	else: 
		$args['offset'] = 3 + ( ($page - 1) * 5 );
	endif; 

	$args['post_type'] = 'post'; 
	$args['no_found_rows'] = true;
	$args['update_post_meta_cache'] = false; 
	$args['update_post_term_cache'] = false; 

    $query = new WP_Query( $args );

    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
            // Exibe o conteúdo do post
            get_template_part( 'template-parts/layout/posts-list');
        endwhile;
    else :
        //echo 'Nenhum post encontrado';
    endif;

    wp_die(); // Termina a execução para retornar um resultado limpo
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // Para usuários logados
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // Para usuários não logados



// Add Shortcode
function img_url() {
    return get_template_directory_uri().'/assets/img/'; 
}
add_shortcode( 'img-url', 'img_url' );

// Register a new navigation menu
function add_Main_Nav() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );


function ads_custom_logo_setup() {
	$defaults = array(
		'height'               => 180,
		'width'                => 105,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ads_custom_logo_setup' );

add_theme_support( 'custom-logo' );

// remove br e p no classic editor
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>