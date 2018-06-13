<?php
/**
 * Template Name: Signup a school
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="signup-a-school bg-red">
  <div class="signup-a-school-content container">
    
    <div class="col-sm-12">
      <div class="col-md-5 col-xs-12">
        <h2 class="h2 grey title"><?php echo the_field('title'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('copy'); ?></b2>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12 form-container">
         <?php include(locate_template('partials/signup-a-school-form.php')); ?>
      </div>
    </div>
  
  </div>
</div>


<?php get_footer(); ?>