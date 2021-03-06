<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <!--noptimize--><!--
    This site was made with

     /♥♥        /♥♥♥♥♥♥  /♥♥    /♥♥ /♥♥♥♥♥♥♥♥                       /$$      /$$  /$$$$$$  /$$   /$$ /$$$$$$$$ /$$     /$$
    | ♥♥       /♥♥__  ♥♥| ♥♥   | ♥♥| ♥♥_____/          /++         | $$$    /$$$ /$$__  $$| $$$ | $$| $$_____/|  $$   /$$/
    | ♥♥      | ♥♥  \ ♥♥| ♥♥   | ♥♥| ♥♥               | ++         | $$$$  /$$$$| $$  \ $$| $$$$| $$| $$       \  $$ /$$/
    | ♥♥      | ♥♥  | ♥♥|  ♥♥ / ♥♥/| ♥♥♥♥♥          /++++++++      | $$ $$/$$ $$| $$  | $$| $$ $$ $$| $$$$$     \  $$$$/
    | ♥♥      | ♥♥  | ♥♥ \  ♥♥ ♥♥/ | ♥♥__/         |__  ++__/      | $$  $$$| $$| $$  | $$| $$  $$$$| $$__/      \  $$/
    | ♥♥      | ♥♥  | ♥♥  \  ♥♥♥/  | ♥♥               | ++         | $$\  $ | $$| $$  | $$| $$\  $$$| $$          | $$
    | ♥♥♥♥♥♥♥♥|  ♥♥♥♥♥♥/   \  ♥/   | ♥♥♥♥♥♥♥♥         |__/         | $$ \/  | $$|  $$$$$$/| $$ \  $$| $$$$$$$$    | $$
    |________/ \______/     \_/    |________/                      |__/     |__/ \______/ |__/  \__/|________/    |__/

    https://loveandmoney.agency
    --><!--/noptimize-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ) ?></title>

    <?php if ( ENVIRONMENT == 'development' ): ?>
      <link rel="stylesheet" href="<?php eu_include( 'dist/css/main.css', true ) ?>" type="text/css" media="screen">
    <?php else: ?>
      <link rel="stylesheet" href="<?php eu_include( 'dist/css/main.min.css', true ) ?>" type="text/css" media="screen">
    <?php endif ?>

    <?php wp_head() ?>

    <link rel="shortcut icon" sizes="16x16 32x32" href="<?php echo site_url() ?>/favicon.ico">
  </head>
  <body <?php body_class() ?>>
    <script type="text/javascript">
      document.body.className = document.body.className + ' loading';// hide body until dom is ready, but only for browsers that support JS
    </script>

    <header class="site-header">
      
      <a href="<?php eu_url('/'); ?>"><img src="<?php eu_include('img/header/eatup-logo.png'); ?>" class="logo"></a>
      <a href="<?php eu_url('/donate-form'); ?>"><img src="<?php eu_include('img/header/donate-cloud.png'); ?>" class="donate not-mobile"></a>
      <a href="<?php eu_url('/donate-form'); ?>"><img src="<?php eu_include('img/header/donate-cloud-mobile.png'); ?>" class="donate mobile-only"></a>
      
      <ul class="menu">
        <a href="<?php eu_url(); ?>" class="menu-link not-mobile"><li class="b1">Home</li></a>
        <a href="<?php eu_url('/donate-form'); ?>" class="menu-link not-mobile"><li class="b1">Donate</li></a>
        <a href="<?php eu_url('/give-us-a-hand'); ?>" class="menu-link not-mobile"><li class="b1">Give us a hand</li></a>
        <a href="<?php eu_url('/hey-thanks'); ?>" class="menu-link not-mobile"><li class="b1">Hey, thanks!</li></a>
<!--        <a href="<?php eu_url('/media'); ?>" class="menu-link not-mobile"><li class="b1">Media</li></a>-->
        <a href="<?php eu_url('/signup-a-school'); ?>" class="menu-link not-mobile"><li class="b1">School signup</li></a>
        <a href="<?php eu_url('/lets-talk'); ?>" class="menu-link not-mobile"><li class="b1">Let's talk</li></a>
        <li class="b1 menu-link menu-link-mobile mobile-only mobile-menu active">Menu</li>
        <li class="b1 menu-link menu-link-mobile mobile-only mobile-close">Close</li>
      </ul>
      
      <div class="menu-overlay-background bg-pink">
        <?php include(locate_template('partials/footer.php')); ?>
      </div>
      <div class="menu-overlay">
        <a href="<?php eu_url(); ?>" class="menu-link"><li class="b1">Home</li></a>
        <a href="<?php eu_url('/donate-form'); ?>" class="menu-link"><li class="b1">Donate</li></a>
        <a href="<?php eu_url('/give-us-a-hand'); ?>" class="menu-link"><li class="b1">Give us a hand</li></a>
        <a href="<?php eu_url('/hey-thanks'); ?>" class="menu-link"><li class="b1">Hey, thanks!</li></a>
<!--        <a href="<?php eu_url('/media'); ?>" class="menu-link"><li class="b1">Media</li></a>-->
        <a href="<?php eu_url('/signup-a-school'); ?>" class="menu-link"><li class="b1">School signup</li></a>
        <a href="<?php eu_url('/lets-talk'); ?>" class="menu-link"><li class="b1">Let's talk</li></a>
      </div>
      
    </header>
