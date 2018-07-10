<?php
/**
 * Template Name: Hey Thanks
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div id="hey-thanks" class="hey-thanks">
  
  <div class="hey-thanks-intro bg-light-green">
    <div class="hey-thanks-intro-content container">
      <div class="col-md-6 col-sm-7">
        <h1 class="h1 title grey"><?php echo the_field('title'); ?></h1>
        <p class="copy grey"><?php echo the_field('copy'); ?></p>
      </div>
      <div class="col-md-6 col-sm-5 image-container">
        <img class="image image-money" src="<?php eu_include('img/hey-thanks/money.png'); ?>" alt="money">
      </div>
    </div>
  </div>
  
  <div class="hey-thanks-help bg-light-blue">
    <div class="hey-thanks-help-content container">
      <div class="col-md-6 col-xs-12">
        <h2 class="h2 grey help-stats"><?php echo the_field('help_stats'); ?></h2>
      </div>
      <div class="col-md-6 sponsors">
        <b3 class="b3 grey text-center"><?php echo the_field('food_sponsors_title'); ?></b3>
        <div class="food-sponsor-container">
          <?php $food_sponsors = get_field('food_sponsors'); ?>
          <?php foreach($food_sponsors as $food_sponsor): ?>
            <img class="food-sponsor" src="<?php echo $food_sponsor['url']; ?>" alt="sponsor">
          <?php endforeach; ?>
        </div>   
        
        <b3 class="b3 grey text-center"><?php echo the_field('logistics_sponsors_title'); ?></b3>
        <div class="logistics-sponsor-container">
          <?php $logistics_sponsors = get_field('logistics_sponsors'); ?>
          <?php foreach($logistics_sponsors as $logistics_sponsor): ?>
            <img class="logistics-sponsor" src="<?php echo $logistics_sponsor['url']; ?>" alt="sponsor">
          <?php endforeach; ?>
        </div> 
      </div>
    </div>
  </div>
  
  <div class="hey-thanks-sangas bg-pink desktop-only">
    <div class="hey-thanks-sangas-content container">
      <h2 class="h2 grey title"><?php echo the_field('sangas_title'); ?></h2>
      <h2 class="b1 grey subtitle"><?php echo the_field('sangas_instruction'); ?></h2>
      
      <div class="sanga-container">
        <h2 class="h2 grey text-center sanga-words">It's, like, a lot.</h2>
        <h2 class="h2 grey text-center sanga-words">We took a drink break here.</h2>
        <h2 class="h2 grey text-center sanga-words">We took a drink break here.</h2>
        <h2 class="h2 grey text-center sanga-words">We took a drink break here.</h2>
        <img src="<?php eu_include('img/hey-thanks/Sandwiches-Row.jpg'); ?>">
      </div>
      
      
      
      <h2 id="made-it" class="h2 grey you-made-it"><?php echo the_field('sangas_you_made_it'); ?></h2>
      <a href="<?php eu_url('/give-us-a-hand'); ?>" class="btn btn-pink-invert">Find out how you can help</a>
      
    </div>
    <a href="#hey-thanks" class="b3 grey text-center back-to-top">Back to top</a>
  </div>
</div>

<?php get_footer() ?>