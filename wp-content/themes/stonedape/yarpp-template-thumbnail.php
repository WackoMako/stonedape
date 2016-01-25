<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3>Related Articles</h3>
<?php if (have_posts()):?>
<div class="recommended">
	<div class="row">
	<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()):?>
			<div class="col-md-4">
	            <div class="preview-img">
	              <?php the_post_thumbnail(  ); ?>
	            </div>
	            <div class="text">
	              <a href="<?php the_permalink(); ?>">
	                <h4 class="text-title"><?php the_title(); ?></h4>
	              </a>
	              <!-- <label class="category"><?php  echo $category[0]->cat_name; ?></label> -->
	              <!-- <p><?php the_excerpt(); ?></p> -->
	            </div>
          	</div>
		<?php endif; ?>
	<?php endwhile; ?>
	</div>
</div>

<?php else: ?>
<p>No Related Posts</p>
<?php endif; ?>
