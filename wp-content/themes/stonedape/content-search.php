<article class="clearfix search-results">
  <h4> <?php the_title(); ?></h4>
  <?php the_content(); ?>
  <a href='<?php echo get_permalink($post->ID)?>'><?php echo get_permalink($post->ID)?></a>
</article>