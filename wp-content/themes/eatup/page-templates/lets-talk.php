<?php
/**
 * Template Name: Lets Talk
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="lets-talk bg-light-green">
  <div class="lets-talk-content container">
    
    <div class="col-sm-12">
      <div class="col-sm-5">
        <h2 class="h2 grey title"><?php echo the_field('title'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('copy'); ?></b2>
        <img class="contact-icon" src="<?php eu_include('img/lets-talk/Phone-icn-white.svg'); ?>" alt="phone">
        <b2 class="b2 grey strong phone"><?php echo the_field('phone_number'); ?></b2>
        <img class="contact-icon" src="<?php eu_include('img/lets-talk/Mail-icn-white.svg'); ?>" alt="mail">
        <b2 class="b2 grey strong email"><?php echo the_field('email'); ?></b2>
      </div>
      <div class="col-sm-7 form-container">
         <?php include(locate_template('partials/lets-talk-form.php')); ?>
      </div>
    </div>
  
  </div>
  
  <img class="sandwich" src="<?php eu_include('img/lets-talk/sandwich-triangle.png'); ?>" alt="sandwich">
</div>


<?php get_footer(); ?>