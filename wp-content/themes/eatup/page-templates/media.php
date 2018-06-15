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
  
$query = new WP_Query($args);

// Pagination fix
// stash main query object
$temp_query = $wp_query;
// wipe it
$wp_query   = NULL;
// replace it
$wp_query   = $query;

while ($wp_query->have_posts()) : $wp_query->the_post(); 

$latest_post_id = get_the_ID();

endwhile;
wp_reset_postdata();

// Restore main query object
$wp_query = NULL;
$wp_query = $temp_query;

get_header() ?>

<div class="media">
  <div class="media-intro bg-light-green">
    <div class="media-intro-content container">
      <div class="col-md-7 col-sm-12 featured-image-container">
        <img class="featured-image" src="<?php echo the_field('featured_image', $latest_post_id); ?>" alt="Featured Post Image">
      </div>
      
      <div class="col-md-5 col-sm-12 media-intro-content-text">
        <h3 class="h3 white headline"><?php echo the_field('headline', $latest_post_id); ?></h3>
        <b2 class="b2 white blurb"><?php echo the_field('blurb', $latest_post_id); ?></b2>
        <a href="<?php echo the_permalink($latest_post_id); ?>" class="btn btn-light-green-invert">Read More</a>
      </div>
    </div>
    
    <img class="food food-sandwich not-mobile" src="<?php eu_include('img/lets-talk/sandwich-triangle.png'); ?>" alt="sandwich">
    <img class="food food-banana" src="<?php eu_include('img/food/banana-full.png'); ?>" alt="banana">
  </div>
  
  <div class="media-articles bg-white">
    
    
    <div class="media-articles-content container">
      <h1 class="h1 black heading">All posts</h1>
<!--
      <ul class="filter">
        <li class="filter-item b3 black active">All</li>
        <li class="filter-item black b3">Recent</li>
        <li class="filter-item black b3">Filter by date</li>
      </ul>
-->
      
      <div class="post-container col-sm-12">
      <?php
        
        $paged = get_query_var('paged') ? get_query_var('paged') : 1; 
        
        $args = array(
            'posts_per_page' => 2,
            'offset' => -1 + (2 * $paged),
            'paged' => $paged
        );

          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post(); 
        
          $link = get_permalink(); 
      
      ?>

          <a class="post" href="<?php echo $link; ?>" style="background-image: url('<?php echo the_field('featured_image'); ?>')">
            <b1 class="b1 white post-title"><?php echo the_title(); ?></b1>
            <b2 class="b2 white post-date"><?php echo get_the_date('d M'); ?></b2>
          </a>

          <?php endwhile; 
            wp_reset_postdata();
          ?>
          
        </div>
    </div>
    <?php if ( $wp_query->max_num_pages > $paged ) : ?>
      <div class="see-more <?php echo $paged; ?>">
        <?php next_posts_link( 'See More' ); ?>
      </div>
    <?php endif;  ?>
  </div>
</div>

<?php get_footer(); ?>