<?php
// Exit if accessed directly
include 'funciones.php';
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

//Jquery OPTIMIZADO
/** Remove jQuery and jQuery-ui scripts loading from header */
add_action('wp_enqueue_scripts', 'crunchify_script_remove_header');
function crunchify_script_remove_header() {
      wp_deregister_script( 'jquery' );
      wp_deregister_script( 'jquery-ui' );
}
 
/** Load jQuery and jQuery-ui script just before closing Body tag */
add_action('genesis_after_footer', 'crunchify_script_add_body');
function crunchify_script_add_body() {
      wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, null);
      wp_enqueue_script( 'jquery');
      
      wp_register_script( 'jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', false, null);
      wp_enqueue_script( 'jquery-ui');
}
// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/grid/bootstrap-grid.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

function dcms_insertar_js(){
    
    wp_register_script('miscript', get_stylesheet_directory_uri(). '/js/script.js', array('jquery'), '1', true );
    //wp_register_script('miscript-masonry', get_stylesheet_directory_uri(). '/js/masonry.pkgd.min.js', array('jquery'), '3', true );
    //wp_register_script('isotopeadd', get_site_url(). '/wp-content/themes/salient/js/isotope.min.js', array('jquery'), '2', true );
   
   // wp_enqueue_script('miscript-masonry');
    //wp_enqueue_script('isotopeadd');
    wp_localize_script( 'miscript', 'ajax_call', [ 'ajaxurl' => admin_url('admin-ajax.php' ) ] );    
    wp_enqueue_script('miscript');
    
}
add_action("wp_enqueue_scripts", "dcms_insertar_js");






//Borrar funciones de wordpress
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
     $src = remove_query_arg( 'ver', $src );
    return $src;
    }
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
remove_action( 'wp_head', 'rsd_link' ) ;
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
function disable_embed(){
    wp_dequeue_script( 'wp-embed' );
    }
add_action( 'wp_footer', 'disable_embed' );
add_filter('xmlrpc_enabled', '__return_false');
remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' ) ;
function deregister_qjuery() { 
    if ( !is_admin() ) {
    wp_deregister_script('jquery');
    }
   } 
   add_action('wp_enqueue_scripts', 'deregister_qjuery');
   function disable_pingback( &$links ) {
    foreach ( $links as $l => $link )
    if ( 0 === strpos( $link, get_option( 'home' ) ) )
    unset($links[$l]);
   }
add_action( 'pre_ping', 'disable_pingback' );

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
function wpdocs_dequeue_dashicon() {
    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
}


function custom_mimes( $mimes = array() ) {
	// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mimes' );
function remove_genesis_blocks_fontawesome() {
	wp_dequeue_style( 'genesis-blocks-fontawesome' );
}
add_action( 'init', 'remove_genesis_blocks_fontawesome', 20 );
add_action( 'enqueue_block_editor_assets', 'remove_genesis_blocks_fontawesome', 20 );
add_filter('use_block_editor_for_post', '__return_false', 10);


function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'datos-productos' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'datos-productos', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );

include 'Mobile_Detect.php';


function ejr_woocommerce_genesis() {
  woocommerce_content();
}
add_theme_support( 'woocommerce' );
add_action('after_setup_theme', 'bp_no_admin_bar');

function bp_no_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
add_filter( 'show_admin_bar', '__return_false' );
}
}
function bbloomer_hide_admin_bar_if_non_admin( $show ) {
    if ( ! current_user_can( 'administrator' ) ) $show = false;
    return $show;
    }
    
    add_filter( 'show_admin_bar', 'bbloomer_hide_admin_bar_if_non_admin', 20, 1 );

/* Cambiar imagen que aparece en wp-login */
function jc_change_image_logo() { 
    ?>
      <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url('https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/21085156/logo-1.svg');
          background-repeat: no-repeat;
          background-size: contain;
          height: 150px;
          width: 150px;
    
        }
        #login #wp-submit:hover{
            cursor: pointer;
    border: solid 1px #ff4a34 !important;
    background-color: transparent;
    padding: 1px 20px;
    color: #ff4a34;
    font-family: 'Gotham Rounded';
        }
        #login #wp-submit{
            cursor: pointer;
    background-color: #ff4a34;
    border: solid 1px #ff4a34;
    padding: 1px 20px;
    color: white;
    font-family: 'Gotham Rounded';
    border-radius: 6px;
        }
        input:focus{
            border: solid 1px #ff4a34 !important;
            border-color: #ff4a34 !important;
        }

      </style>
    <?php 
    }
    
    add_action( 'login_enqueue_scripts', 'jc_change_image_logo' );


function my_theme_modify_stripe_fields_styles($styles)
{
    return array(
        'base' => array(
            'iconColor' => '#666EE8',
            'color' => 'white',
            'fontSize' => '15px',
            '::placeholder' => array(
                'color' => 'white',
            ),
        ),
    );
}

add_filter('wc_stripe_elements_styling', 'my_theme_modify_stripe_fields_styles');
