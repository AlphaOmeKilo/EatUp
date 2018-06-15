<?php
/**
 * Template Name: Refund Policy
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="refund-policy bg-white">
  
  <div class="refund-policy-content container">
    <h1 class="h1 deep-green title"><?php echo the_title(); ?></h1>
    <div class="col-md-8 col-sm-9 col-xs-12">
      <?php echo the_field('content'); ?>
    </div>
  </div>
  
</div>

<?php get_footer(); ?>