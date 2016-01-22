<div style="background-color: red; display: block; color: white; z-index: 10; text-align: center; padding: 15px;">Alpha Revival is cancelled tonight, Friday, January 22nd, due to inclimate weather.</div>
<div id="navbar" class="container-fluid">
   <div class="container">
      <div class="row">
         <div class="branding col-md-3 col-sm-12 col-xs-12 hidden-xs">
            <?php if ( is_home() ) : ?>
               <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_stylesheet_directory_uri(). '/assets/img/newjc-logo-small-white.png' ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php else : ?>
               <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_stylesheet_directory_uri(). '/assets/img/newjc-logo-small.png' ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php endif; ?>
         </div>
         <div class="col-md-9 col-xs-12">
            <?php if ( has_nav_menu( 'header-menu' ) ): ?>
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills pull-right header-menu hidden-xs hidden-s', 'walker' => new HeaderMenuWalker ) ); ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div><!-- #navbar -->
