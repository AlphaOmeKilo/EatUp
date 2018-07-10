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
      <div class="col-sm-7">
        <h1 class="h1 grey title"><?php echo the_field('intro_title'); ?></h1>
      </div>
      <div class="col-sm-5">
        <img class="image" src="<?php eu_include('img/give-us-a-hand/full-sandwich.png'); ?>">
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-helpers bg-white">
    <div class="give-us-a-hand-helpers-content container">
      <div class="col-sm-6 col-xs-12 regional">
        <h3 class="h3 deep-green title">Regional Helpers</h3>
        <b2 class="b2 deep-green subtitle">Scroll down this page for more information on how you can help.</b2>
        <a href="#founder" class="btn btn-deep-green">Scroll down</a>
      </div>
      <div class="col-sm-6 col-sm-push-1 col-xs-12 metro">
        <h3 class="h3 deep-green title">Metro Helpers</h3>
        <b2 class="b2 deep-green subtitle">Melbourne Metro helpers please following the link to signup for our sessions.</b2>
        <a href="<?php eu_url('/give-us-a-hand-form'); ?>" class="btn btn-deep-green">Give us a hand</a>
      </div>
    </div>
  </div>
  
<!--
  <div id="founder" class="give-us-a-hand-founder bg-purple">
    <div class="give-us-a-hand-founder-content container">
      <div class="col-md-6 col-xs-12">
        <h2 class="h2 grey title"><?php echo the_field('founder_title'); ?></h2>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="video-container">
          <video class="video" loop webkit-playsinline="true" playsinline="true">
            <source src="https://player.vimeo.com/external/238482593.hd.mp4?s=d883a100eb9ef48cbd7dea8623b647332c250e50&profile_id=174" type="video/mp4">
          </video>
          <video preload="auto" poster="" id="video-container_html5_api" class="vjs-tech video" tabindex="-1" src="https://cdn-1.metacdn.net/wajzusep/JlboPLln/55248_44771_mp4-MEDIUM-MP4.mp4">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlTVrWzt/55248_44771_mp4-MOBILE-MP4.mp4" type="video/mp4" data-res="MOBILE" label="240p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JloH75Sv/55248_44771_mp4-MOBILE-WEBM.webm" type="video/webm" data-res="MOBILE" label="240p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JlboPLln/55248_44771_mp4-MEDIUM-MP4.mp4" type="video/mp4" data-res="MEDIUM" label="480p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlddqDe8/55248_44771_mp4-MEDIUM-WEBM.webm" type="video/webm" data-res="MEDIUM" label="480p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JlVctioj/55248_44771_mp4-HIGH-WEBM.webm" type="video/webm" data-res="HIGH" label="720p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JjQsQWwl/55248_44771_mp4-HIGH-MP4.mp4" type="video/mp4" data-res="HIGH" label="720p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlcGAKIH/55248_44771_mp4-XHIGH-MP4.mp4" type="video/mp4" data-res="XHIGH" label="1080p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JljeHqEX/55248_44771_mp4-XHIGH-WEBM.webm" type="video/webm" data-res="XHIGH" label="1080p">       
      </video>
          <div class="play active"></div>
        </div>
      </div>
    </div>
  </div>
-->
  
  <div class="give-us-a-hand-serving bg-purple">
    <div class="give-us-a-hand-serving-content container">
      <div class="col-md-7 col-xs-12">
        <h2 class="h2 grey title"><?php echo the_field('serving_title'); ?></h2>
      </div>
      <div class="col-md-5 col-xs-12">
        <div class="sponsors clearfix">
          <div class="sponsors-logos col-xs-12">
            <?php $sponsors = get_field('serving_sponsors'); ?>
            <?php foreach($sponsors as $sponsor): ?>
              <img class="sponsor" src="<?php echo $sponsor['url']; ?>" alt="sponsor">
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-help bg-light-green">
    <div class="give-us-a-hand-help-content container">
      <div class="col-md-7 col-xs-12">
        <h2 class="h2 grey title"><?php echo the_field('help_title'); ?></h2>
      </div>
      <div class="col-md-5 col-xs-12 image-container">
        <img class="image" src="<?php eu_include('img/give-us-a-hand/still-hungry.png'); ?>">
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-help-pink bg-pink">
    <div class="give-us-a-hand-help-pink-content container">
      <h3 class="h3 grey title"><?php echo the_field('help_subtitle'); ?></h3>
      
      <img class="image image-lunch not-mobile" src="<?php eu_include('img/give-us-a-hand/lunch-bag.png'); ?>" alt="lunch bag">
      <img class="image image-juice not-mobile" src="<?php eu_include('img/give-us-a-hand/orange-juice.png'); ?>" alt="orange juice">
    </div>
  </div>
  
  <div class="give-us-a-hand-steps bg-deep-green">
    <div class="give-us-a-hand-steps-content container">

      <?php $help_steps = get_field('help_steps'); ?>
      <?php foreach($help_steps as $step) : ?>
        <div class="col-xs-12 step">
          <div class="col-sm-6 col-xs-12 step-text">
            <div class="col-xs-12 step-text-content">
              <h3 class="h3 white title"><?php echo $step['title']; ?></h3>
              <b2 class="b2 grey copy"><?php echo $step['copy']; ?></b2>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 step-image">
            <img class="image" src="<?php echo $step['image']; ?>">
          </div>
        </div>
      <?php endforeach; ?>
      
      <div class="col-xs-12 step">
        <div class="col-sm-6 col-xs-12 step-text">
          <div class="col-xs-12 step-text-content">
            <h3 class="h3 white title"><?php echo the_field('help_thats_it'); ?></h3>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 step-image">
          <img class="image" src="<?php eu_include('img/give-us-a-hand/clipboard.png'); ?>">
        </div>
      </div>
    </div>
  </div>
  
  <div class="give-us-a-hand-ready bg-pink">
    <div class="give-us-a-hand-ready-content container">
      <div class="col-sm-6 col-xs-12 text">
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
      <div class="col-md-6 col-xs-12 text">
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