
    <?php include(locate_template('partials/footer.php')); ?>

    <?php wp_footer(); ?>

    <?php if ( ENVIRONMENT == 'development' ): ?>
      <script type="text/javascript" src="<?php eu_include( 'dist/js/main.js', true ) ?>"></script>
    <?php else : ?>
      <script type="text/javascript" src="<?php eu_include( 'dist/js/main.min.js', true ) ?>"></script>
    <?php endif ?>

  <script type="text/javascript">
    var ajax_url = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
    var post_url = '<?php echo admin_url( 'admin-post.php' ) ?>';
  </script>
  </body>
</html>
