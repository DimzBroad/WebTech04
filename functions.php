<?php 

function themeOliveSetup() {

	// Register Navigation

	register_nav_menu( 'primary', 'Primary Menu'); 

		register_nav_menu( 'secondary', 'Secondary Menu'); 
		
}

		add_action('init' , 'themeOliveSetup');

	// Add featured image support

	add_theme_support('menus');

	add_theme_support('post-thumbnails');

	// Add post format support

	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

	// widget init


	function themeOliveWidgetinit() { 

		// Register - WIDGET SIDEBAR

	    register_sidebar( array(
	        'name' => 'sidebar',
	        'id' => 'sidebar-1'
	    ));

	    // Register - HOME BANNER IMAGE

	   	register_sidebar( array(
	        'name' => 'home banner image',
	        'id' => 'home-banner-image'
	    ));

	    // Register - HOME BANNER TEXT

	   	register_sidebar( array(
	        'name' => 'home banner text',
	        'id' => 'home-banner-text'

	    ));

	   	// Register - HOME HEADER CONTENT

	   	register_sidebar( array(
	        'name' => 'home intro banner',
	        'id' => 'home-intro-banner'
	    ));

	    // Register - GO TO ABOUT ME

	   	register_sidebar( array(
	        'name' => 'go to about me',
	        'id' => 'go-to-about-me'
	    ));

	   	// Register - RECENT WORK HEADER

	   	register_sidebar( array(
	        'name' => 'Recent work banner',
	        'id' => 'recent-work-banner'
	    ));
	    
	   	// Register - IMAGE 1

	   	register_sidebar( array(
	        'name' => 'Recent work image 1',
	        'id' => 'recent-work-image-1'
	    ));

	   	// Register - IMAGE 2

	   	register_sidebar( array(
	        'name' => 'Recent work image 2',
	        'id' => 'recent-work-image-2'
	    ));

	   	// Register - IMAGE 3

	   	register_sidebar( array(
	        'name' => 'Recent work image 3',
	        'id' => 'recent-work-image-3' 
	    ));	 

	   	// Register - IMAGE 4

	   	register_sidebar( array(
	        'name' => 'Recent work image 4',
	        'id' => 'recent-work-image-4'
	    ));

	   	// Register - IMAGE 5

	   	register_sidebar( array(
	        'name' => 'Recent work image 5',
	        'id' => 'recent-work-image-5'
	    ));

	   	// Register - IMAGE 6

	   	register_sidebar( array(
	        'name' => 'Recent work image 6',
	        'id' => 'recent-work-image-6'
	    ));	   

	   	// Register - CONTACT US BLURB

	   	register_sidebar( array(
	        'name' => 'contact blurb',
	        'id' => 'contact-blurb'
	    ));



	   	// Register footer icons

	   	register_sidebar( array(
	        'name' => 'footer social icons',
	        'id' => 'footer-social-icons'
	    ));

	   	// Register Portfolio Intro

	   	register_sidebar( array(
	        'name' => 'portfolio intro banner',
	        'id' => 'portfolio-intro-banner'
	    ));

	   	// Register footer icons

	   	register_sidebar( array(
	        'name' => 'portfolio content',
	        'id' => 'portfolio-content'
	    ));

	    register_sidebar( array(
	        'name' => 'portfolio outro banner',
	        'id' => 'portfolio-outro-banner'
	    ));

	   	register_sidebar( array(
	        'name' => 'about intro banner',
	        'id' => 'about-intro-banner'
	    ));

	   	register_sidebar( array(
	        'name' => 'about content',
	        'id' => 'about-content'
	    ));	    

	   	register_sidebar( array(
	        'name' => 'about feature image',
	        'id' => 'about-feature-image'
	    ));

	   	register_sidebar( array(
	        'name' => 'go to portfolio',
	        'id' => 'go-to-portfolio'
	    ));

	   	register_sidebar( array(
	        'name' => 'go to contacts',
	        'id' => 'go-to-contacts'
	    ));

	   register_sidebar( array(
	        'name' => 'contact intro banner',
	        'id' => 'contact-intro-banner'
	    ));

	   	   register_sidebar( array(
	        'name' => 'contact content',
	        'id' => 'contact-content'
	    ));


	}

	add_action('widgets_init', 'themeOliveWidgetinit'); 


?>







