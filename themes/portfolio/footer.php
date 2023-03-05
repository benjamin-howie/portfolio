<footer class="footer bg-dark-grey">
  <div class="footer-wrapper default-width">
  <?php 
    
    $nav_menu_args = array(
      'theme_location'  => 'footer-menu',
      'menu'            => 'footer-menu',
      'container'       => 'nav',
      'container_class' => 'footer-menu',
      'depth'           => 0,
     );
     
     wp_nav_menu( $nav_menu_args );

    
    ?>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>