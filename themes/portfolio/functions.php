<?php

// -------------------------
// WordPress thumbnail sizes
// -------------------------

add_theme_support('post-thumbnails');

// ----------------------
// Include CSS & JS files
// ----------------------

function portfolio_theme_scripts() {

  // Vendor Scripts

  wp_enqueue_script('slick-scripts', get_template_directory_uri().'/assets/vendor/slick/slick.min.js', array( 'jquery' ), filemtime(get_stylesheet_directory().'/assets/vendor/slick/slick.min.js') , true );

	// Theme Styles
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), filemtime(get_stylesheet_directory().'/assets/css/style.css'));

	// Theme Scripts
	wp_enqueue_script('theme-scripts', get_template_directory_uri().'/assets/js/script-min.js', array( 'jquery' ), filemtime(get_stylesheet_directory().'/assets/js/script-min.js') , true );
}

add_action('wp_enqueue_scripts' , 'portfolio_theme_scripts');

function register_the_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_the_menus' );

// Simple wysiwyg option
add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );

function my_toolbars( $toolbars ) {
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('bold' , 'italic' , 'underline');

	return $toolbars;
}

// ACF options page

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'General Information',
      'menu_title'    => 'General Information',
      'parent_slug'   => 'theme-general-settings',
  ));

  // ACF custom admin titles

add_filter('acf/fields/flexible_content/layout_title', 'my_acf_fields_flexible_content_layout_title', 10, 4);
function my_acf_fields_flexible_content_layout_title( $title, $field, $layout, $i ) {

    // This allows the user to add their own title for ACF flexible content layouts. Instead of a vague, "Image and Text" block, users can change it to "About Us".
    
    if( $admin_title = get_sub_field('admin_title') ) {
        $title = $admin_title;
    }
    return $title;
}

add_filter( 'get_the_archive_title', function ( $title ) { 
  // This can be used to edit the result of get_the_archive_title. At the moment, I am only uisng the post_type_archive, so this is sort of redundant right now. However, you can add more options as and hwen needed.
  if( is_post_type_archive()) {
    $title  = post_type_archive_title( '', false );
  } elseif (is_tax()) {
    $title = single_cat_title('', false) . ' Archive';
  }
  return $title;

});

// Custom Taxonomies

include_once __DIR__ . '/inc/custom-taxonomies.php';
include_once __DIR__ . '/inc/custom-post-types.php';

function asterisks_to_colour($text) {

  // This function will find words wrapped in asterisks and surround the words with a span element using the text-gradient class.

  $pattern = "/(?<=\*).+?(?=\*)/";

  preg_match($pattern, $text, $matches);    

  for($i=0;$i<count($matches);$i++){    
      $text=str_replace($matches[$i],"<span class='text-gradient'>".$matches[$i]."</span>",$text);       
  }
  return str_replace("*","",$text);
}

}