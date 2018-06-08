<?php
/**
 * Template Name: Media
 *
 * @package eatup
 * @since eatup 0.1
 */
        
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1
);

$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post(); 

$latest_post_id = get_the_ID();

endwhile;
wp_reset_postdata();

get_header() ?>

<div class="media">
  <div class="media-intro bg-light-green">
    <div class="media-intro-content container">
      <div class="col-sm-5 media-intro-content-text">
        <h3 class="h3 white headline"><?php echo the_field('headline', $latest_post_id); ?></h3>
        <b2 class="b2 white blurb"><?php echo the_field('blurb', $latest_post_id); ?></b2>
        <a href="<?php echo the_permalink($latest_post_id); ?>" class="btn btn-deep-green">Read More</a>
      </div>
      
      <div class="col-sm-7">
        <img class="featured-image" src="<?php echo the_field('featured_image', $latest_post_id); ?>" alt="Featured Post Image">
      </div>
    </div>
    
    <img class="food food-sandwich" src="<?php eu_include('img/lets-talk/sandwich-triangle.png'); ?>" alt="sandwich">
    <img class="food food-banana" src="<?php eu_include('img/food/banana-full.png'); ?>" alt="banana">
  </div>
  
  <div class="media-articles bg-white">
    
    
    <div class="media-articles-content container">
      <h1 class="h1 black heading">Media</h1>
      <ul class="filter">
        <li class="filter-item b3 black active">All</li>
        <li class="filter-item black b3">Recent</li>
        <li class="filter-item black b3">Filter by date</li>
      </ul>
      
      <div class="post-container col-sm-12">
      <?php
        
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        console.log($paged);
        
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2, 
            'offset' => 1,
            'paged' => $paged
          );

          $temp = $wp_query; $wp_query= null;
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post(); 
        
        
          $link = get_permalink(); 
      
      ?>

          <a class="post col-sm-6" href="<?php echo $link; ?>">
            <img class="post-image" src="<?php echo the_field('featured_image'); ?>">
            <b1 class="b1 white post-title"><?php echo the_title(); ?></b1>
            <b2 class="b2 white post-date"><?php echo get_the_date('d M'); ?></b2>
          </a>

          <?php endwhile; 
          wp_reset_postdata();?>
          
        </div>
      
        <?php if ( $wp_query->max_num_pages > $paged ) : ?>
          <div class="see-more <?php echo $paged; ?>">
            <?php next_posts_link( 'See More' ); ?>
          </div>
        <?php endif;  ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>