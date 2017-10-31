

<?php get_header(); ?>

	<div class="row wrapperWhiteLrgPadd">
		<?php dynamic_sidebar('about-intro-banner')?>
	</div>

	<div class="row"> 

		<div class="u-full-width wrapperWhiteSmlPadd">
			<?php dynamic_sidebar('about-feature-image')?>
		</div>

		<div class="row wrapperWhiteLrgPadd">
			<?php dynamic_sidebar('about-content')?>
		</div>

	</div>

	<div class="row wrapperWhiteSmlPadd margBtmMed">
		<?php dynamic_sidebar('go-to-portfolio')?>
	</div>

<?php get_footer(); ?>