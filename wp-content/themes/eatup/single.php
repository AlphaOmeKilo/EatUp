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
    <div class="col-md-8 col-xs-12">
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
              <div class="half-width-image" style="background-image: url('<?php  echo $image['url'] ?>');">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
      
      <a href="<?php eu_url('/media'); ?>" class="b3 black text-center">Go back</a>
    </div>
  </div>
  
  <div class="post-info bg-red">
    <b3 class="b3 white date">Posted <?php echo the_date('j F'); ?></b3>
    <b2 class="b2 white author"><?php echo get_the_author(); ?></b2>
    <b3 class="b3 white share">Share</b3>
    <div class="social-links">
      <a class="social-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php eu_include('img/media/Share-Facebook.svg'); ?>"></a>
      <a class="social-link" href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><img src="<?php eu_include('img/media/Share-Twitter.svg'); ?>"></a>
      <a class="social-link" href="https://pinterest.com/pin/create/button/?url=&media=<?php the_permalink(); ?>&description=" target="_blank"><img src="<?php eu_include('img/media/Share-Pinterest.svg'); ?>"></a>
      <a class="social-link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><img src="<?php eu_include('img/media/Share-Linkedin.svg'); ?>"></a>
    </div>
  </div>
  
  
  
</div>

<?php endwhile ?>

<?php get_footer() ?>
