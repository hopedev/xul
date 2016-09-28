<header class="banner">
  <div class="container uk-container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
   

      <nav class="nav-primary uk-navbar">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'walker' => new Walker_UIKIT()]);
      endif;
      ?>

     

 
    </nav>
  </div>
</header>
