<?php 

define('THEME_DIR', get_template_directory());

/**
 * Init all classes
 */
function init_classes() {
  foreach (glob(THEME_DIR . '/classes/*.php') as $class) {
    include_once $class;
  }
}
add_action('init', 'init_classes');

// /**
//  * Add Post types
// */
// function init_post_types() {
//   Stape_Post_Type::initPostTypes();
// }
// add_action( 'init', 'init_post_types' );

// /**
//  * Add Menu placements for header and footer sections
//  */
// add_action( 'init', 'register_menus', 'register_sidebar_menu' );

// function register_menus() {
//   register_nav_menus(
//     array(
//       'main-nav' => __( 'main-nav' ),
//       // 'footer-menu' => __( 'Footer Menu' )
//     )
//   );
// }

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

// function register_sidebar_menu() {
//   register_sidebar(
//     array(
//       'name'          => ('resource'),
//       'id'            => "sidebar-$i",
//       'description'   => 'This will display beside a resource',
//       'class'         => '',
//       'before_widget' => '<li id="%1$s" class="widget %2$s">',
//       'after_widget'  => "</li>\n",
//       'before_title'  => '<h2 class="widgettitle">',
//       'after_title'   => "</h2>\n",
//     )
//   );
// }

/**
 * Add theme support
 */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 330, 220, true );

add_image_size( 'preview-img', 320, 220, true );
add_image_size( 'thumbnail-sm', 80, 75, true );

add_theme_support( 'post-format' );
add_theme_support( 'menus' );


