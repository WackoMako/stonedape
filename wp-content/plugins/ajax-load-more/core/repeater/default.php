<?php 
  $category = get_the_category();
?>
<div class="article">
  <a href="<?php the_permalink(); ?>">
    <article class="block">
      <div class="overlay-block clearfix">
        <div class="overlay"></div>
        <div class="date">
          <label><?php the_time('M'); ?></label>
          <label><?php the_time('j'); ?></label>
        </div>
        <div class="preview-img">
          <?php the_post_thumbnail(  ); ?>
        </div>
        <div class="text">
          <a href="<?php the_permalink(); ?>"><h4 class="text-title"><?php the_title(); ?></h4></a>
          <label class="category"><?php  echo $category[0]->cat_name; ?></label>
        </div>
      </div>
    </article>
  </a>
</div>