<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 */
wpb_set_post_views(get_the_ID());
?>
<?php get_header(); ?>
<div class="container main-block">
  <section class="col-md-8 blog">
    <div class="">
        <?php if( have_posts() ) : 
          the_post(); 
          $image = wp_get_attachment_url(get_post_thumbnail_id());
          $caption = get_post(get_post_thumbnail_id())->post_excerpt;
          $category = get_the_category();
        ?>
        <article id="post-<?php the_ID(); ?>" class= "<?php post_class(); ?>">
          <h2 class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="subtitle">
            <label><?php the_time('F jS, Y'); ?> |</label>
            <!-- <label> <?php echo get_the_author(); ?> |</label> -->
            <label><?php  echo $category[0]->cat_name; ?> </label>
          </div>
          <div class="blog-image">
            <img src="<?php echo $image; ?>" alt="<?php echo $post->post_title; ?>" />
            <span class="caption"><?php echo $caption; ?></span>
          </div>
          <br>
          <div class="blog-main-text">
            <?php 
              $content = apply_filters('the_content', $post->post_content); 
              echo $content; 
            ?> 
            <!-- <a href="<?php echo home_url('/blog'); ?>">« Back to Stoned Ape</a> -->
          </div>
        </article>
      <?php endif; ?>
    </div>


    <!-- <?php get_template_part( 'content', 'recommended' ); ?> -->
    
  </section>
  <?php get_sidebar(); ?>
</div>



<?php get_footer(); ?>