<?php
class Stape_Post_Type {

  private static $_post_types;

  /**
   * Define your post types here
   * @return array
   */
  protected static function _addTypes() {

    $array = array(
      array(
        'name' => 'APOD Picture', 
        'plural' => 'APOD Pictures'
      ),
      array(
        'name' => 'Feature',
        'plural' => 'Features'
      )
    );
    return $array;
  }

  /**
   * More dynamic function to add post types
   * @param string $name
   * @param array $supports
   */
  protected static function _registerPostType($name, $plural = null, array $supports = null) {
    if(!$supports) {
      $supports = array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' );
    }
    
    if ( ! $plural ) $plural = $name;

    $labels = array(
        'name' => _x(sprintf('%s', $plural), 'post type general name'),
        'singular_name' => _x(sprintf('%s', $name), 'post type singular name'),
        'add_new' => _x('Add New', sprintf('%s', strtolower($name))),
        'add_new_item' => __(sprintf('Add New %s', $name)),
        'edit_item' => __(sprintf('Edit %s', $name)),
        'new_item' => __(sprintf('New %s', $name)),
        'all_items' => __(sprintf('All %s', $plural)),
        'view_item' => __(sprintf('View %s', $plural)),
        'search_items' => __(sprintf('Search %s', $plural)),
        'not_found' =>  __(sprintf('No %s found', strtolower($plural))),
        'not_found_in_trash' => __(sprintf('No %s found in Trash', strtolower($plural))),
        'parent_item_colon' => '',
        'menu_name' => __(sprintf('%s', $plural))

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => _x( sprintf('%s', str_replace(' ', '-', strtolower($name))), 'URL slug' ) ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => $supports
    );
    register_post_type(strtolower($name), $args);
  }

  /**
   * Register the set of defined post types
   */
  public static function initPostTypes() {
    $post_types  = self::_addTypes();
    foreach($post_types as $post_type) {
      $supports = (isset($post_type['supports']) ? $post_type['supports'] : null);
      $plural = (isset($post_type['plural']) ? $post_type['plural'] : null);
      self::_registerPostType($post_type['name'], $plural, $supports);
    }
    flush_rewrite_rules();
  }

}