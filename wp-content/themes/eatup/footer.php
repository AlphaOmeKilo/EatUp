
    <footer class="site-footer bg-black">
      
      <ul class="menu col-sm-12">
        <a href="" class="menu-link col-sm-1"><li class="b3">Privacy</li></a>
        <a href="" class="menu-link col-sm-2 "><li class="b3">Refund Policy</li></a>
        <a href="" class="menu-credit deep-green b3 col-sm-3 col-sm-push-6 text-right">Made with Love + Money</a>
      </ul>
      
      
          
    </footer>

    <?php wp_footer(); ?>

    <?php if ( ENVIRONMENT == 'development' ): ?>
      <script type="text/javascript" src="<?php eu_include( 'dist/js/main.js', true ) ?>"></script>
    <?php else : ?>
      <script type="text/javascript" src="<?php eu_include( 'dist/js/main.min.js', true ) ?>"></script>
    <?php endif ?>
  </body>
</html>
