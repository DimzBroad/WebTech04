<?php get_header(); ?>

<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post() ?>

    		<div class="postWrapper twelve columns"> 

		        <h2 class="headingFontBlog"><a href= class="bodyCopyFont"'<?php the_permalink() ?>'><?php the_title() ?></a>
		        </h2>
		        <p class="blogInfo"> <small>Posted On: <?php the_time( 'F j, Y' )?> | By <?php the_author() ?> | Posted in 

		        <?php 

		        $categories = get_the_category();
		        $seperator = " , ";
		        $output = '';

		        if ($categories) {

		        	foreach ($categories as $category) {

		        		$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;

		        	}

		        	echo trim($output, $seperator);
		        }

		        ?>

		        </small> </p>

		        <?php the_post_thumbnail('banner-image');?>

		        <div class="content u-full-width">
		            <?php the_content() ?>
		         </div>

	         </div>

    <?php endwhile ?>
	
	<?php else : ?>
    	<p>Oh No, there are no posts!</p>
	<?php endif ?>
	
<?php get_footer(); ?>
