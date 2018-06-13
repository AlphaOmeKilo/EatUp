<?php
/**
 * Template Name: Give us a hand form
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="give-us-a-hand-form bg-pink">
  <div class="give-us-a-hand-form-content container">
    
    <div class="col-xs-12">
      <div class="col-md-5 col-xs-12">
        <h2 class="h2 grey title"><?php echo the_field('title'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('copy'); ?></b2>
      </div>
      <div class="col-md-7 col-xs-12 form-container">
         <?php include(locate_template('partials/give-us-a-hand-form.php')); ?>
      </div>
    </div>
  
  </div>
  
  <img class="banana desktop-only" src="<?php eu_include('img/give-us-a-hand-form/banana.png'); ?>" alt="banana">
</div>


<?php get_footer(); ?>