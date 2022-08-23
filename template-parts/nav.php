<?php 
/**
 * Header Navigation template.
 * 
 * @package Aquila
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <div class="container">
  <?php
  if(function_exists('the_custom_logo')){
    the_custom_logo();
  }
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
      wp_nav_menu( array(
        'theme_location'  => 'aquila-header-menu',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'li_class'        => 'nav-item',
        'a_class'         => 'nav-link',
        'active_class'    => 'active',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );

      // wp_nav_menu(
      //   [
      //     'menu' => 'aquila-header-menu',
      //     'deptth' => 2,
      //     'menu_class'=>'navbar-nav mr-auto',
      //     'container' => '',
      //     'li_class' => 'nav-item',
      //     'a_class' => 'nav-link',
      //     'active_class' => 'active',
      //     'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
      //     'walker' => new WP_Bootstrap_Navwalker(),
      //   ]
      // );
  ?>

    
    </div>
  </div>
</nav>
<?php 
// wp_nav_menu(
//   [
//     'theme_location' => 'aquila-header-menu',
//     'container_class'  => 'my_extra_menu_class'
//   ]
// )
?>