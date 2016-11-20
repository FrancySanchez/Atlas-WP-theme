<?php
/*
Template Name: Languages Details
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
 

 		<!-- Start of Advanced Custom Fields -->		
		
		<?php 
 
		/*
		*  Loop through a Flexible Content field and display it's content with different views for different layouts
		*/
 
		while(the_flexible_field("course_details")): ?>
		 
			<?php if(get_row_layout() == "course_information"): // layout: Content Area ?>
		 
				<div id="highlightbox1">
					
					<?php the_sub_field("content"); ?>
				</div>

				
			<?php endif; ?>
		 
		<?php endwhile; ?>


<?php endwhile; ?>
