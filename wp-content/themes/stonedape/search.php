<?php
/*
Template Name: Search Page
*/
?>
<?php
global $query_string;
global $wp_query;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  if(empty($string)){return;}
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$search = new WP_Query( $search_query );

$total_results = $wp_query->found_posts;
?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <section class="latest-news" class="col-lg-12">
       <h3>Search results for <strong><i><?php the_search_query(); ?></i></strong></h3>
      <!-- <h2>Latest</h2> -->
      <?php if ( have_posts() ) : ?> 
      <?php 
      $i = 0;
      while ( $i < 9 ) : the_post(); ?>
      <?php get_template_part( 'content', 'blog' ); ?>

      <?php $i++; endwhile; ?>

      <?php if ($i > 11) : 
        echo do_shortcode('[ajax_load_more post_type="post" offset="9" container_type="article" default="9" posts_per_page="9" pause="true" scroll="false" button_label="Load More"]'); 
		endif;
		?>

            <!--<?php   $big = 999999999; // need an unlikely integer
              echo "<div id=\"pagination\"><h3>Load More</h3>";
              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
              ) );    
              echo "</div";

          ?>
       -->

      <?php else : ?> 
        <h3>No Posts!</h3>
      <?php endif; ?> 
      <?php wp_reset_query(); ?>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>