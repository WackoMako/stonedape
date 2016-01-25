<?php 
global $query_string;
global $wp_query;

$article_no = 9;

if ( wp_is_mobile() ) :
  $article_no = 8;
endif;

$query_args = explode("&", $query_string);
$search_query = array('posts_per_page' => $article_no);

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$search = new WP_Query( $search_query );

$total_results = $wp_query->found_posts;
$category = get_the_category();
?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <section class="col-lg-12 latest-news">
      
      <?php if ( have_posts() ) : ?> 
      <?php 
      $i = 0;
      while ( $i < $article_no && have_posts()) : the_post(); ?>
      <?php get_template_part( 'content', 'blog' ); ?>

      <?php $i++; endwhile; ?>

      <?php else : ?> 
        <h3>No Posts!</h3>
      <?php endif; ?> 
      <?php wp_reset_query(); ?>
      <?php if($i > ($article_no - 1) ) :?>
       <?php echo do_shortcode('[ajax_load_more post_type="post" offset="9" posts_per_page="9" pause="true" scroll="false" transition="fade" button_label="Load More" button_loading_label="Loading Posts..."]') ?>
      <?php endif; ?>
    </section>
  </div>
  </div>
</div>


<?php get_footer();?>