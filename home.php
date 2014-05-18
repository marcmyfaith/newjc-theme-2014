<?php get_header(); ?>
   
   <div id="masthead" class="container-fluid"> 

      <?php get_template_part( 'parts/nav' ); ?>

      <div id="billboard" class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1>An exciting church passionately resolving homelessness in Greensboro and North Carolina</h1>
                  <p><a class="btn btn-primary btn-md" role="button" href="<?php echo home_url(); ?>/homelessness">Learn more</a></p>
               </div>
            </div>
         </div>
      </div>

      <div class="filter"></div>

   </div><!-- #masthead -->

   <?php if ( is_plugin_active( 'lemonbox-events/lemonbox-events.php' ) ): ?>
      
      <?php $upcoming_event = get_next_event(); ?>
      <?php if ( $upcoming_event ): ?>
         <div id="upcoming-event" class="container-fluid">
            <div class="container">
               <div class="row">
                  <div class="col-sm-5 col-md-5 col-md-offset-1">
                     <h2>
                        <a href="<?php echo $upcoming_event->permalink ?>"><?php echo $upcoming_event->post_title ?></a>
                        <br /><small><?php echo $upcoming_event->date ?></small>
                     </h2>
                     <p><a href="<?php echo home_url(); ?>/events">View all events</a></p>
                  </div>
                  <div class="col-sm-4 col-md-3 col-xs-7">
                      <h4>Event Begins In</h4>
                     <div class="event-countdown event-countdown-small" data-date="<?php echo $upcoming_event->date ?>" style="display: none;">
                        <div class="timer-col"><span id="days" class="label label-primary"></span><span class="timer-type">days</span></div>
                        <div class="timer-col"><span id="hours" class="label label-default"></span><span class="timer-type">hrs</span></div>
                        <div class="timer-col"><span id="minutes" class="label label-default"></span><span class="timer-type">mins</span></div>
                        <div class="timer-col"><span id="seconds" class="label label-default"></span><span class="timer-type">secs</span></div>
                     </div>
                  </div>
                   <div class="col-xs-12 col-sm-3 col-md-2 col-xs-5">
                     <?php if( $upcoming_event->ticket_id ): ?>
                        <a type="button" class="btn btn-lg btn-primary" href="<?php echo $upcoming_event->permalink ?>">Buy Ticket $<?php echo isset($upcoming_event->ticket->meta['product_price'][0]) ? round($upcoming_event->ticket->meta['product_price'][0]) : '' ?></a>
                     <?php else: ?>
                        <a type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">View Event</a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      <?php endif; ?>
   <?php endif; ?>

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