<header class="banner">
  <div class="container uk-container uk-container-center">
    

 <!-- Offscreen menu --> 
      <div class="uk-offcanvas" id="sidemenu">
        <nav class="uk-offcanvas-bar">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>%3$s</ul>']);
          endif;
          ?>
    
          <?php
          if (has_nav_menu('right_navigation')) :
            wp_nav_menu(['theme_location' => 'right_navigation',  'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>%3$s</ul>']);
          endif;
          ?>
        </nav>
  
      </div>
  <!-- END Offscreen menu -->


      <div class="uk-grid uk-grid-small" data-uk-grid-margin > 

        <div class="uk-width-1-3 "> 

          <a href="#sidemenu"  class="uk-navbar-toggle" data-uk-offcanvas=""></a>

        </div>

        <div class="uk-width-1-3 ">   <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="uk-width-1-3 "> 
            <nav class="nav-primary uk-navbar">
            <?php
            if (has_nav_menu('top_navigation')) :
              wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'uk-navbar-flip nav', 'walker' => new Walker_UIKIT()]);
            endif;
            ?>
            </nav>
        </div>

    </div>

 
  

  </div>
</header>
