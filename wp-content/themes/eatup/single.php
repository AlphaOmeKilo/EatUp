<?php
/**
 * The template for individual posts
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<?php while ( have_posts() ) : the_post() ?>

<div class="single-media bg-white;">
  <div class="single-media-content container">
    <div class="col-xs-8">
      <div class="b1 black">Media</div>
      <h2 class="h2 black"><?php echo the_title(); ?></h2>
      <img class="col-xs-12 image" src="<?php echo the_field('featured_image'); ?>">
      
      <?php $post_content = get_field('post_content'); ?>
      <?php foreach($post_content as $content_item) : ?>     
        <?php if ($content_item['post_content_type'] == "copy"): ?>
          <b2 class="b2 black copy"><?php echo $content_item['copy']; ?></b2>
        <?php elseif ($content_item['post_content_type'] == "quote"): ?>
          <b1 class="b1 black quote"><?php echo $content_item['quote']; ?></b1>
        <?php elseif ($content_item['post_content_type'] == "half_width_image_gallery"): ?>
          <div class="col-xs-12">
            <?php $images = $content_item['half_width_image_gallery']; ?>
            <?php foreach($images as $image): ?>
              <div class="col-xs-6 half-width-image">
                <img src="<?php echo $image['url']; ?>">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
      
    </div>
  </div>
  
</div>

<?php endwhile ?>

<?php get_footer() ?>
