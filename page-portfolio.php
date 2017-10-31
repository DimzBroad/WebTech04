<?php get_header(); ?>

<section class="row"> 

	<div class="u-full-width wrapperWhiteLrgPadd">
		<?php dynamic_sidebar('portfolio-intro-banner')?>
	</div>

	<div class="u-full-width  wrapperGreyLrgPadd"> 
		<?php dynamic_sidebar('portfolio-content')?>
	</div>

	<div class="u-full-width  wrapperWhiteLrgPadd">
		<?php dynamic_sidebar('portfolio-outro-banner')?>
	</div>

</section>

<?php get_footer(); ?>