<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

// Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/site-login-logo.png);
			background-size:233px 17px;
            padding-bottom: 80px;
        }
		body.login {
			background-color:#ccc;
			}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action('init', 'bootstrap');
function bootstrap() {
   wp_enqueue_script('jquery','','','',true);
   wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js','','',true);
}

add_action('init', 'flexslider_scripts');
function flexslider_scripts() {
	wp_enqueue_script('jquery-scripts', get_stylesheet_directory_uri().'/js/st.js','','',true);
	wp_enqueue_script('jquery-flexslider', get_stylesheet_directory_uri().'/js/flexslider-min.js','','',true);
}

add_action('init', 'isotope_scripts');
function isotope_scripts() {
   wp_enqueue_script('jquery','','','',true);
   wp_enqueue_script('jquery-isotope', get_stylesheet_directory_uri().'/js/jquery.hoverdir.js','','',true);
}

add_theme_support( 'automatic-feed-links' );

// Menus
register_nav_menu( 'primary', 'Main Menu' );

// Sidebars
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	
	register_sidebar(array(
		'id' => 'blog',
		'name' => __( 'Blog' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'description' => __( 'Shown on the news page.' ),
		'before_title' => '',
		'after_title' => ''
		)
	);

}

add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'slideshow', 960, 320, true );
	add_image_size( 'wide', 400, 190, true );
}

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 60 );

function new_excerpt_more( $more ) {
	return ' »';
}
add_filter('excerpt_more', 'new_excerpt_more');


function remove_post_custom_fields() {
	remove_meta_box( 'postcustom' , 'artists' , 'normal' );
	remove_meta_box( 'postcustom' , 'events' , 'normal' );
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
	remove_meta_box( 'postcustom' , 'mixes' , 'normal' );
	remove_meta_box( 'postcustom' , 'releases' , 'normal' );
	remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' );
	remove_meta_box( 'pageparentdiv' , 'page' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

/* Show future posts */
function show_future_posts($posts)
{
   global $wp_query, $wpdb;
   if(is_single() && $wp_query->post_count == 0)
   {
      $posts = $wpdb->get_results($wp_query->request);
   }
   return $posts;
}
add_filter('the_posts', 'show_future_posts');


?>