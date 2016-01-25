<?php 
// global $query_string;
// global $wp_query;

// $query_args_side = explode("&", $query_string);
// $search_query_side = array('posts_per_page' => 6);

// foreach($query_args_side as $key => $string) {
//   $query_split = explode("=", $string);
//   $search_query_side[$query_split[0]] = urldecode($query_split[1]);
// } // foreach


// $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

// $query_side = new WP_Query( $search_query_side );

$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC', 'post__not_in' => array(get_the_ID())  ) );
// while ( $popularpost->have_posts() ) : $popularpost->the_post();

// the_title();

// endwhile;
?>
<div class="col-md-4 col-sm-4" id="sidebar">
    <section class="block" id="best-month">
        <h4 id="title" class="clearfix">Most Popular</h4>
       
        <?php 
        if ( $popularpost->have_posts() ) :
          $i = 0;
          while ( $popularpost->have_posts() && $i < 6) : 
            // var_dump($query_side);
            $category = get_the_category();
            $popularpost->the_post();
            $class_name = 'cat-'.strtolower($category[0]->cat_name);
            $image = wp_get_attachment_url(get_post_thumbnail_id());
          ?>
          
            <article class="best-month-post">
              <a href="<?php the_permalink(); ?>">
                <div class="image">
                  <img src="<?php echo $image?>" alt="<?php echo $post->post_title; ?>" />
                  <?php get_the_post_thumbnail();?>
                </div>
                <div class="header-container">
                  <h4 class="title"><?php the_title(); ?></h4>
                  <!-- <div class="date">
                    <span><?php the_time('M');?></span>
                    <span><?php the_time('j');  ?></span>
                    <label class="category <?php echo $class_name; ?>"><?php  echo $category[0]->cat_name; ?></label>
                  </div> -->
                </div>
              </a>
            </article>
         

          <?php $i++; endwhile; ?>
        <?php else : ?> 
          <h3>No Posts!</h3>
          
        <?php endif; ?> 
        <?php wp_reset_query(); ?>
    </section>

  <?php
    $args = array( 'post_type' => 'APOD Picture', 'posts_per_page' => 1 );
    $query = new WP_Query( $args );
  ?>
<!--   <div class="block">
     <h5 id="title" class="clearfix">Astronomy Picture of the Day</h5>
    <a href="#">
      <div class="apod-image overlay-block">
        <div class="overlay"></div>
        <?php while ( $query->have_posts() ) : $query->the_post(); 
              $image = wp_get_attachment_url(get_post_thumbnail_id());
        ?>
          <img src="<?php echo $image; ?>" alt="<?php echo $post->post_title; ?>" />
        <?php endwhile; ?>
      </div>
    </a>
    

  </div>
</div> -->
<div class="block">
  <h4 id="title" class="clearfix">Connect</h4>
  <div id="social-media-icons">
    <a href="https://www.facebook.com/astonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/facebook-icon-b.png"></a>
    <a href="https://twitter.com/_stonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/twitter-icon-b.png"></a>
<!--     <img src="<?php bloginfo('template_directory')?>/images/icons/google-icon-b.png">
    <img src="<?php bloginfo('template_directory')?>/images/icons/youtube-icon-b.png"> -->

  </div>
</div>