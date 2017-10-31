<?php get_header(); ?>

<section class="row">

	<div class="row u-full-width bannerImageStyles">
	    	<?php dynamic_sidebar('home-banner-image')?>

			<div class="featureTitle twelve columns">
				<?php dynamic_sidebar('home-banner-text')?>
			</div>
	</div>

</section>



<div class="row wrapperWhiteNoBtm">
	<?php dynamic_sidebar('home-intro-banner')?>
</div>

<div class="row wrapperWhiteSmlPadd margBtmMed">
	<?php dynamic_sidebar('go-to-about-me')?>
</div>

<div class="row wrapperGreyLrgPadd">
	<?php dynamic_sidebar('recent-work-banner')?>
</div>

<div class="row wrapperGreyLrgPaddSides">
	<div class="four columns wrapperGreyMarginBtm ">
		<?php dynamic_sidebar('recent-work-image-1')?>
	</div>

	<div class="four columns wrapperGreyMarginBtm ">
		<?php dynamic_sidebar('recent-work-image-2')?>
	</div>

	<div class="four columns wrapperGreyMarginBtm ">
		<?php dynamic_sidebar('recent-work-image-3')?>
	</div>
</div>

<div class="row wrapperGreyLrgPaddSides">
	<div class="four columns wrapperGreyMarginBtm">
		<?php dynamic_sidebar('recent-work-image-4')?>
	</div>

	<div class="four columns wrapperGreyMarginBtm ">
		<?php dynamic_sidebar('recent-work-image-5')?>
	</div>

	<div class="four columns wrapperGreyMarginBtm ">
		<?php dynamic_sidebar('recent-work-image-6')?>
	</div>
</div>

<div class="row wrapperWhiteNoBtm">
	<?php dynamic_sidebar('contact-blurb')?>
</div>

	<div class="row wrapperWhiteSmlPadd margBtmMed">
		<?php dynamic_sidebar('go-to-contacts')?>
	</div>


<?php get_footer(); ?> 



