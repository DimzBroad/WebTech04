<?php get_header(); ?>

<section class="row pageWrapper"> 

	<div class="mainContentArea nine columns"> 

	   <?php
	   if(have_posts() ) :
	        while( have_posts()): the_post();
	        get_template_part('content', get_post_format());
	        endwhile;
	    endif;
	   ?>

	</div>

	<div class="sideContentArea three columns"> 
		<?php dynamic_sidebar('sidebar-1')?>
	</div>

</section>

<?php get_footer(); ?>