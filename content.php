<div class="postWrapper row"> 

	<div class="twelve columns"> 

<h2 class="headingFontBlog"><a href= class="bodyCopyFont"'<?php the_permalink() ?>'><?php the_title() ?></a>
		        </h2>

        <p class="twelve columns"> 

			<small> Posted On: <?php the_time( 'F j, Y' )?> | By: <?php the_author() ?> | Posted in: 

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

       		 </small> 
    	</p>

        <div class="postImage twelve columns"> <?php the_post_thumbnail('banner-image');?> </div>

	</div>

	        <div class="content twelve columns">

	        	<p>
	            <?php the_excerpt() ?>
	            <a href="<?php the_permalink(); ?>"> Read More &raquo; </a>
	            </p>

	         </div>
	         
</div>