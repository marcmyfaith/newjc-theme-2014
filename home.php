<?php
   get_header();
   include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>
   <header id="header" class="container-fluid">

      <?php get_template_part( 'parts/nav' ); ?>

      <!-- <div id="billboard" class="container-fluid" style="padding-top: 30px; background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/img/kurt-carr.jpg' ?>); background-size: cover; background-position: center; min-height: 630px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1>National Award-Winning Gospel Artist Kurt Carr</h1>
                  <p>Will be hosting a choir workshop open to the public, May 25-26th, followed by a FREE concert on May 27th!</p>
                  <p><a class="btn btn-warning btn-lg" role="button" href="http://newjc.org/product/kurt-carr-choir-workshop-registration/">Register Now</a></p>
               </div>
            </div>
         </div>
      </div> -->
      <?php echo do_shortcode('[sermon]'); ?>
      <div class="filter"></div>
   </header><!-- #header -->

   <?php echo do_shortcode('[upcoming_event]'); ?>

   <div id="quick-links" class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h2>First Time Visitors</h2>
               <p>Visiting anywhere by yourself for the first time can be pretty intimidating. We want to make sure your visit to any one of our services exceeds your expectations. To do that, we have prepared this quick overview of what you can expect upon arrival.</p>
               <p><a class="btn btn-warning" href="<?php echo home_url( '/faqs/first-time-visitors/' ); ?>">Welcome Home</a></p>
               <p>&nbsp;</p>
               <h2>Get Connected</h2>
               <p>With a church that serves over 3,000 members and hundreds of guests each week, one can easily get lost in the crowd. To remedy this, we connect members with opportunities to serve God and our city by creating a close-knit community of believers.</p>
               <p><a class="btn btn-warning" href="<?php echo home_url( '/connect' ); ?>">Find Your Calling</a></p>
            </div>
            <div class="col-md-4 col-md-offset-1">
               <?php dynamic_sidebar( 'Sidebar' ); ?>
            </div>
         </div>
      </div>

      <div class="filter"></div>
   </div>

   <div id="main" class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="thumbnail tall">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/dr-kevin-williams.jpg' ?>" />
               </div>
            </div>
            <div class="col-md-7">
               <h2>Dr. Kevin Williams <small>Senior Pastor</small></p>
               <p class="lead">Dr. Williams is a prolific speaker, teacher, preacher, and educator. He is an author of rising acclaim and the expert of turning points highlighted in his new book release, "Turning Point".</p>
               <p><a href="<?php echo home_url( 'leadership' ); ?>" class="">View Church Leadership</a> | <a href="https://twitter.com/DrKAWilliams" target="_blank">Follow on Twitter</a></p>
            </div>
            <div class="col-md-2 text-center">
               <p>&nbsp;</p>
               <p><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/newjc-seal.png' ?>"></p>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>