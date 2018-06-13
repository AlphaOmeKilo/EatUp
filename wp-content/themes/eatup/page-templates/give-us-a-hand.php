<?php
/**
 * Template Name: Give us a hand
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="give-us-a-hand">
  <div class="give-us-a-hand-intro bg-light-green">
    <div class="give-us-a-hand-intro-content container">
      <div class="col-xs-7">
        <h1 class="h1 grey title"><?php echo the_field('intro_title'); ?></h1>
        <b1 class="b1 grey subtitle"><?php echo the_field('intro_subtitle'); ?> <a href="<?php eu_url('/give-us-a-hand-form'); ?>">click here</a>.</b1>
      </div>
      <div class="col-xs-5">
        <img class="image" src="<?php eu_include('img/give-us-a-hand/full-sandwich.png'); ?>">
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-founder bg-purple">
    <div class="give-us-a-hand-founder-content container">
      <div class="col-xs-6">
        <h2 class="h2 grey title"><?php echo the_field('founder_title'); ?></h2>
      </div>
      <div class="col-xs-6">
        <div class="video-container">
          <div class="video"></div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-serving bg-purple">
    <div class="give-us-a-hand-serving-content container">
      <div class="col-xs-7">
        <h2 class="h2 grey title"><?php echo the_field('serving_title'); ?></h2>
      </div>
      <div class="col-xs-5">
        <div class="sponsors">
          <b3 class="b3 grey instruction"><?php echo the_field('serving_hover_instruction'); ?></b3>
          <div class="sponsors-logos col-xs-12">
            <?php $sponsors = get_field('serving_sponsors'); ?>
            <?php foreach($sponsors as $sponsor): ?>
              <img class="sponsor col-xs-3" src="<?php echo $sponsor['url']; ?>" alt="sponsor">
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-help bg-light-green">
    <div class="give-us-a-hand-help-content container">
      <div class="col-xs-7">
        <h2 class="h2 grey title"><?php echo the_field('help_title'); ?></h2>
      </div>
      <div class="col-xs-5">
        <img class="image" src="<?php eu_include('img/give-us-a-hand/still-hungry.png'); ?>">
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-help-pink bg-pink">
    <div class="give-us-a-hand-help-pink-content container">
      <h3 class="h3 grey title"><?php echo the_field('help_subtitle'); ?></h3>
      
      <img class="image image-lunch" src="<?php eu_include('img/give-us-a-hand/lunch-bag.png'); ?>" alt="lunch bag">
      <img class="image image-juice" src="<?php eu_include('img/give-us-a-hand/orange-juice.png'); ?>" alt="orange juice">
    </div>
  </div>
  
  <div class="give-us-a-hand-steps bg-deep-green">
    <div class="give-us-a-hand-steps-content container">

      <?php $help_steps = get_field('help_steps'); ?>
      <?php foreach($help_steps as $step) : ?>
        <div class="col-xs-12 step">
          <div class="col-xs-6 step-text">
            <div class="col-xs-12 step-text-content">
              <h3 class="h3 white title"><?php echo $step['title']; ?></h3>
              <b2 class="b2 grey copy"><?php echo $step['copy']; ?></b2>
            </div>
          </div>
          <div class="col-xs-6 step-image">
            <img class="image" src="<?php echo $step['image']; ?>">
          </div>
        </div>
      <?php endforeach; ?>
      
      <div class="col-xs-12 step">
        <div class="col-xs-6 step-text">
          <div class="col-xs-12 step-text-content">
            <h3 class="h3 white title"><?php echo the_field('help_thats_it'); ?></h3>
          </div>
        </div>
        <div class="col-xs-6 step-image">
          <img class="image" src="<?php eu_include('img/give-us-a-hand/clipboard.png'); ?>">
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-ready" style="background-image: url('<?php echo the_field('ready_background_image'); ?>');">
    <div class="give-us-a-hand-ready-content container">
      <div class="col-xs-6 text">
        <div class="text-content">
          <h2 class="h2 grey title"><?php echo the_field('ready_title'); ?></h2>
          <b1 class="b1 grey copy"><?php echo the_field('ready_copy'); ?></b1>
          <a href="<?php eu_url('/regional-form'); ?>" class="btn btn-white">Signup today</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-questions bg-white">
    <div class="give-us-a-hand-questions-content container">
      <div class="col-xs-6 text">
        <div class="text-content">
          <h2 class="h2 black title"><?php echo the_field('questions_title'); ?></h2>
          <b1 class="b2 black copy"><?php echo the_field('questions_copy'); ?></b1>
          <div class="contact">
            <a href="tel:<?php echo the_field('questions_phone'); ?>">
              <img class="contact-icon" src="<?php eu_include('img/give-us-a-hand/Phone-icn.svg'); ?>" alt="phone">
              <b3 class="b3 black phone"><?php echo the_field('questions_phone'); ?></b3>
            </a>
            <a href="mailto:<?php echo the_field('questions_email'); ?>">
              <img class="contact-icon" src="<?php eu_include('img/give-us-a-hand/Mail-icn.svg'); ?>" alt="mail">
              <b3 class="b3 black email"><?php echo the_field('questions_email'); ?></b3>
            </a>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>