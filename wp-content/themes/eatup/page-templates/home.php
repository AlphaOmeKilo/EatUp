<?php
/**
 * Template Name: Home
 *
 * @package eatup
 * @since eatup 0.1
 */

get_header() ?>

<div class="home">
  
  <div class="video-overlay video-overlay-background"></div>
  <div class="video-overlay video-overlay-foreground">
    <div class="video-container">
        
        
      <video preload="auto" poster="" id="video-container_html5_api" class="vjs-tech" tabindex="-1" src="https://cdn-1.metacdn.net/wajzusep/JlboPLln/55248_44771_mp4-MEDIUM-MP4.mp4">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlTVrWzt/55248_44771_mp4-MOBILE-MP4.mp4" type="video/mp4" data-res="MOBILE" label="240p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JloH75Sv/55248_44771_mp4-MOBILE-WEBM.webm" type="video/webm" data-res="MOBILE" label="240p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JlboPLln/55248_44771_mp4-MEDIUM-MP4.mp4" type="video/mp4" data-res="MEDIUM" label="480p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlddqDe8/55248_44771_mp4-MEDIUM-WEBM.webm" type="video/webm" data-res="MEDIUM" label="480p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JlVctioj/55248_44771_mp4-HIGH-WEBM.webm" type="video/webm" data-res="HIGH" label="720p">        
      <source src="https://cdn-1.metacdn.net/wajzusep/JjQsQWwl/55248_44771_mp4-HIGH-MP4.mp4" type="video/mp4" data-res="HIGH" label="720p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JlcGAKIH/55248_44771_mp4-XHIGH-MP4.mp4" type="video/mp4" data-res="XHIGH" label="1080p">
      <source src="https://cdn-1.metacdn.net/wajzusep/JljeHqEX/55248_44771_mp4-XHIGH-WEBM.webm" type="video/webm" data-res="XHIGH" label="1080p">       
      </video>
      
      <div class="close bg-deep-green"><div></div><div></div></div>
      <div class="video-control bg-deep-green">
        <div class="play"><div></div></div>
        <div class="pause active"><div></div><div></div></div>
      </div>
      <div class="progress-bar bg-deep-green">
        <div class="progress-value bg-white"></div>
        <div class="progress-backer bg-light-green"></div>
      </div>
    </div>
  </div>
  
  <div class="home-intro bg-light-green">
    <div class="home-intro-content container">
      
      <div class="col-md-5 col-md-push-1 col-sm-7 copy-container">
        <h1 class="h1 grey heading"><?php echo the_field('t1_heading'); ?></h1>
        <h3 class="h3 white sub-heading"><?php echo the_field('t1_sub_heading'); ?></h3>
        <div id="watch-vid-btn" class="btn btn-deep-green">Watch video</div>
      </div>
      <div class="col-md-5 col-md-push-2 col-sm-5 image-container">
        <img src="<?php eu_include('img/home/lunchbag-sandwich.png') ?>" class="tile-image tile-image-carrots">
      </div>
    </div>
    <div class="cloud-statistics">
      <b4 class="b4 black"><?php echo the_field('cloud_statistic_header'); ?></b4>
      <b5 class="b5 black"><?php echo the_field('cloud_statistic_value'); ?></b5>
    </div>
    <img src="<?php eu_include('img/home/cloud.png'); ?>" class="cloud">
  </div>
  
  <div class="home-whats-this-about bg-pink">
    <div class="home-whats-this-about-content container">
      <div class="col-md-5 col-md-pull-1 col-xs-12 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t2_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t2_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t2_copy'); ?></b2>
      </div>
      <div class="col-md-6 col-xs-12 image-container">
        <img src="<?php eu_include('img/home/sandwich.png') ?>" class="tile-image tile-image-sandwich">
      </div>
    </div>
  </div>
  
  <div class="home-what-do-you-do bg-purple">
    <div class="home-what-do-you-do-content container">
    
      <div class="col-md-5 col-md-push-1 col-xs-12 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t3_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t3_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t3_copy'); ?></b2>
      </div>
      <div id="interactive-photos" class="col-md-5 col-md-push-2 col-xs-12 image-container">
        <?php $photos = get_field('t3_images'); ?>
        <?php foreach($photos as $photo): ?>
        <div style="background-image: url('<?php echo $photo['url']; ?>')" class="interactive-photo"></div>
        <?php endforeach; ?>
        <b3 class="b3 white click-cta">Click the polaroids to see more photos!</b3>
      </div>
    
    </div>
  </div>
  
  <div class="home-what-can-i-do bg-light-blue">
    <div class="home-what-can-i-do-content container">
      
      <div class="col-md-5 col-md-pull-1 col-xs-12 copy-container">
        <b1 class="b1 grey title"><?php echo the_field('t4_title'); ?></b1>
        <h2 class="h2 grey heading"><?php echo the_field('t4_heading'); ?></h2>
        <b2 class="b2 grey copy"><?php echo the_field('t4_copy'); ?></b2>
        
        <b2 class="b2 strong grey friends-title"><?php echo the_field('t4_friends_title'); ?></b2>
        <div class="friends-logo-container">
          <?php $logos = get_field('t4_friends'); ?>
          <?php foreach($logos as $logo): ?>
            <img class="logo" src="<?php echo $logo['url']; ?>" alt="company-logo">
          <?php endforeach;?>
        </div>
      </div>
      
      <div class="col-md-6 col-xs-12 image-container">
        <img src="<?php eu_include('img/home/map.png') ?>" class="tile-image tile-image-map">
      </div>
      
    </div>
  </div>
  
  <div class="home-ways-to-help bg-white">
    <div class="home-ways-to-help-content container">
      
      <h2 class="h2 deep-green text-center"><?php echo the_field('t5_title'); ?></h2>
      
      <?php $ways_to_help = get_field('ways_to_help'); ?>
      <?php foreach($ways_to_help as $help): ?>
        <div class="col-xs-12 help-container">
          <div class="col-sm-6 col-xs-12 text-content">
            <h3 class="h3 deep-green help-title"><?php echo $help['title']; ?></h3>
            <?php $options = $help['option']; ?>
            <?php foreach($options as $option): ?>
              <b3 class="b3 deep-green help-subtitle"><?php echo $option['subtitle']; ?></b3>
              <b2 class="b2 deep-green help-copy"><?php echo $option['copy']; ?></b2>
              <a href="<?php echo $option['button_link']; ?>" class="btn btn-deep-green"><?php echo $option['button_text']; ?></a>
            <?php endforeach; ?>        
          </div>

          <div class="col-sm-6 col-xs-12 image-content">
            <img src="<?php echo $help['image']; ?>">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
  <div class="home-interact clearfix">
    <div class="col-sm-6 col-xs-12 bg-purple home-interact-content">
      <div class="home-interact-left container-half">
        <div>
          <?php $left = get_field('left_tile'); ?>
          <b1 class="b1 white title"><?php echo $left['title']; ?></b1>
          <h2 class="h2 white heading"><?php echo $left['heading']; ?></h2>
          <b2 class="b2 white copy"><?php echo $left['copy']; ?></b2>
          <div class="btn-container">
            <a href="https://www.facebook.com/eatupaus/" target="_blank" class="btn btn-purple-invert">Like us on facebook</a>
            <a href="https://www.instagram.com/eatupaustralia/" target="_blank" class="btn btn-purple-invert">Follow us on Instagram</a>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12 bg-red home-interact-content">
      <div class="home-interact-right container-half">
        <div>
          <?php $right = get_field('right_tile'); ?>
          <b1 class="b1 white title"><?php echo $right['title']; ?></b1>
          <h2 class="h2 white heading"><?php echo $right['heading']; ?></h2>
          <b2 class="b2 white copy"><?php echo $right['copy']; ?></b2>
          <div class="btn-container">
            <a href="<?php eu_url('/signup-a-school'); ?>" class="btn btn-red-invert">Sign up a school</a>
          </div>
        </div>
      </div>
    </div>
    
    <img class="image image-sandwich not-mobile" src="<?php eu_include('img/home/sandwich-top.png'); ?>" alt="sandwich">
    <img class="image image-milk not-mobile" src="<?php eu_include('img/home/milk.png'); ?>" alt="milk">
    <img class="image image-yoghurt not-mobile" src="<?php eu_include('img/home/yoghurt.png'); ?>" alt="yoghurt">
  </div>
  
<!--
  <div class="media-articles-content container">
    <h2 class="h2 black heading">What's New?</h2>

    <div class="post-container col-sm-12">
    <?php


        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4, 
        );

        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post(); 


        $link = get_permalink(); 

    ?>

        <a class="post" href="<?php echo $link; ?>" style="background-image: url('<?php echo the_field('featured_image'); ?>')">
            <b1 class="b1 white post-title"><?php echo the_title(); ?></b1>
            <b2 class="b2 white post-date"><?php echo get_the_date('d M'); ?></b2>
          </a>

        <?php endwhile; 
        $wp_query = $temp;
        wp_reset_postdata();?>

      </div>

      <a href="<?php eu_url('/media'); ?>" class="see-more-home b3 black text-center not-mobile">See More</a>
  </div>
-->
  
</div>

<div class="lets-talk bg-white">
  <div class="lets-talk-content container">
    
    <div class="col-sm-12">
      <div class="col-md-5 col-xs-12">
        <h2 class="h2 black title"><?php echo the_field('form_title'); ?></h2>
        <b2 class="b2 black copy"><?php echo the_field('form_copy'); ?></b2>
        <div class="contact">
          <div class="contact-line">
            <img class="contact-icon" src="<?php eu_include('img/home/Phone-icn.svg'); ?>" alt="phone">
            <b2 class="b3 black phone"><?php echo the_field('form_phone_number'); ?></b2>
          </div>
          <div class="contact-line">
            <img class="contact-icon" src="<?php eu_include('img/home/Mail-icn.svg'); ?>" alt="mail">
            <b2 class="b3 black email"><?php echo the_field('form_email'); ?></b2>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-10 col-sm-push-1 col-xs-12 form-container">
         <?php include(locate_template('partials/home-contact-form.php')); ?>
      </div>
    </div>
  </div>
  <img class="banana " src="<?php eu_include('img/home/Banana.png'); ?>" alt="banana">
</div>

<?php get_footer() ?>
