  <?php 
global $query_string;
global $wp_query;

$post_categories = wp_get_post_categories( get_the_ID() );
$cats = array();
  
foreach($post_categories as $c){
  $cat = get_category( $c );
  $cats[] = array( 'id' => $cat->term_id, 'name' => $cat->name, 'slug' => $cat->slug );
}

$category_id = $cats[0]['id'];


$query_args = explode("&", $query_string);
$search_query = array('posts_per_page' => 3, 'category' => $category_id);

$query = new WP_Query( $search_query );

$total_results = $wp_query->found_posts;
?>

      <?php if ( $query->have_posts() ) : 
      $i = 0;?>
      <div class="row">
        <div class="recommended">
        <?php while ( $i < 3 ) : $query->the_post(); ?>

        <?php $category = get_the_category(); ?>
          <div class="col-md-4">
            <div class="preview-img">
              <?php the_post_thumbnail(  ); ?>
            </div>
            <div class="text">
              <a href="<?php the_permalink(); ?>">
                <h4 class="text-title"><?php the_title(); ?></h4>
              </a>
              <label class="category"><?php  echo $category[0]->cat_name; ?></label>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php $i++; endwhile; ?>
        </div>
      </div>

      <?php else : ?> 
        <h3>No Posts!</h3>
      <?php endif; ?> 
      <?php wp_reset_query(); ?>