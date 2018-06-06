<?php
/**
 * Template Name: Home
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="home">
  
  <div class="home-intro bg-light-green">
    <div class="home-intro-content container">
      
      <div class="col-md-5 col-md-push-1 copy-container">
        <h1 class="h1 grey heading"><?php echo the_field('t1_heading'); ?></h1>
        <h3 class="h3 white sub-heading"><?php echo the_field('t1_sub_heading'); ?></h3>
        <div class="btn btn-deep-green">Watch video</div>
      </div>
      <div class="col-md-5 col-md-push-2 image-container">
        <img src="<?php eu_include('img/home/pink-carrots.png') ?>" class="tile-image tile-image-carrots">
      </div>
      
      <img src="<?php eu_include('img/home/cloud.png'); ?>" class="cloud">
    </div>
  </div>
  
  <div class="home-whats-this-about bg-pink">
    <div class="home-whats-this-about-content container">
      <div class="col-md-5 col-md-push-1 image-container">
        <img src="<?php eu_include('img/home/sandwich.png') ?>" class="tile-image tile-image-sandwich">
      </div>
      <div class="col-md-5 col-md-push-1 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t2_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t2_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t2_copy'); ?></b2>
      </div>
    </div>
  </div>
  
  <div class="home-what-do-you-do bg-purple">
    <div class="home-what-do-you-do-content container">
    
      <div class="col-md-5 col-md-push-1 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t3_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t3_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t3_copy'); ?></b2>
      </div>
      <div id="interactive-photos" class="col-md-5 col-md-push-2 image-container">
        <?php $photos = get_field('t3_images'); ?>
        <?php foreach($photos as $photo): ?>
        <div style="background-image: url('<?php echo $photo['url']; ?>')" class="interactive-photo"></div>
        <?php endforeach; ?>
      </div>
      
    </div>
  </div>
  
  <div class="home-what-can-i-do bg-light-blue">
    <div class="home-what-can-i-do-content container">
      <div class="col-md-6 col-md-push-1 image-container">
        <img src="<?php eu_include('img/home/map.png') ?>" class="tile-image tile-image-map">
      </div>
      <div class="col-md-5 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t4_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t4_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t4_copy'); ?></b2>
      </div>
    </div>
  </div>
  
</div>

<?php get_footer() ?>
