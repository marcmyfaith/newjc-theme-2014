<div class="row">
	<div class="col-md-7"> 
		<?php 
			if ( is_post_type_archive() ) get_template_part( 'parts/post/loop' ); 
			else get_template_part( 'parts/page/content' ); 
		?>
	</div>
	<div class="col-md-4 col-md-offset-1">
	   	<?php dynamic_sidebar( 'Sidebar' ); ?>
	   	<p class="text-center"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/newjc-seal.png' ?>"></p>
	</div>
</div>