<div class="heade-section-bg">
<?php get_header(); ?>	
</div>


<div class="container">
	<div class="pages">
			<?php
			if (have_posts()) { // check page contains any post data or not
			        while (have_posts()) { // repeat over each post of the page
			           the_post();
			           ?>
			          <!--  get the title of page 
			             get the link of page -->

						<h3 class="heading"><a href="<?php echo get_the_permalink(); ?>"> <?php echo get_the_title();  ?> </a> </h3>
						 <!-- get the content of page -->
			          	 <p><?php echo get_the_content(); ?> </p>
					 <?php  
			        }
			    }
			?>

	</div>
</div>


<?php
get_footer();
?>

