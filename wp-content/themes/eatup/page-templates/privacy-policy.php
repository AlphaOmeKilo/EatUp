<?php
/**
 * Template Name: Privacy Policy
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="privacy-policy bg-white">
  
  <div class="privacy-policy-content container">
    <h1 class="h1 deep-green title"><?php echo the_title(); ?></h1>
    <div class="col-xs-12">
      <div class="col-md-9 col-xs-11">
        <b1 class="b1 black intro"><?php echo the_field('intro'); ?></b1>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 col-sm-9 col-xs-12">
          <?php echo the_field('why_we_collect'); ?>
          <?php echo the_field('disclosure'); ?>
        </div>
      </div>
      
      <div class="col-md-6 col-xs-12">
        <div class="col-md-12 col-sm-9 col-xs-12 section-right">
          <?php echo the_field('our_website'); ?>
          <?php echo the_field('contact_details'); ?>
        </div>
      </div>
    </div>
    
  </div>
  
</div>

<?php get_footer(); ?>