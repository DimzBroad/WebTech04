    </div> 

        <footer class="row">
            <div class="textContainer">
		        <div class="row socialIconWrapper"> 
					<?php dynamic_sidebar('footer-social-icons')?>
		    	</div> 
                <p class="footerInfo"> Copyright &copy; <?php echo date(Y); ?> <?php bloginfo('name'); ?> </p>
            </div>
        </footer>

    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


     </script>

         <?php wp_footer(); ?>

</body>

</html>