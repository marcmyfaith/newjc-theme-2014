<?php get_header(); ?>
   
   <div id="masthead" class="container-fluid"> 

      <?php get_template_part( 'parts/nav' ); ?>
      
      <div id="billboard" class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1>Church with a mission to resolve homelessness in Greensboro and Greater North Carolina</h1>
                  <p><a class="btn btn-primary btn-md" role="button" href="<?php echo home_url(); ?>/homelessness">Learn more</a></p>
               </div>
            </div>
         </div>
      </div>

      <div class="filter"></div>
      
   </div><!-- #masthead -->

   <div class="content container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h2>Latest News</h2>
               <?php get_template_part( 'parts/post/loop' ); ?>
            </div>
            <div class="col-md-3 col-md-offset-1">
               <?php dynamic_sidebar( 'Right Sidebar' ); ?>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>