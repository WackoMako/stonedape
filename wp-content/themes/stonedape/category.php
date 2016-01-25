<?php 
//  global $query_string;
// global $wp_query;

$post_categories = wp_get_post_categories( get_the_ID() );
$cats = array();

foreach($post_categories as $c){
  $cat = get_category( $c );
  $cats[] = array( 'id' => $cat->term_id, 'name' => $cat->name, 'slug' => $cat->slug );
}

$cate = get_category( get_query_var( 'cat' ) );
$category = $cate->slug;

$category_id = $cats[0]['id'];

query_posts("cat=".$category_id); 
?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <section class="col-lg-12 latest-news">
      
      <?php if ( have_posts() ) : ?> 
      <?php 
      $i = 0;
      while ( $i < 9 && have_posts()) : the_post(); ?>
      <?php get_template_part( 'content', 'blog' ); ?>

      <?php $i++; endwhile; ?>
      <?php if($i > 8 ) :?>
       <?php echo do_shortcode('[posts_per_page="9" ajax_load_more category="'.$category.'" ajax_load_more post_type="post" offset="9" pause="true" scroll="false" button_label="Load More"]') ?>
      <?php endif; ?>

      <?php else : ?> 
        <h3>No Posts!</h3>
      <?php endif; ?> 
      <?php wp_reset_query(); ?>
    </section>
  </div>
</div>


<?php get_footer();?>