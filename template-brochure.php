<?php
/*
Template Name: Brochure Landing
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  		<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
 
while(the_flexible_field("course_landing_page")): ?>
 
	<?php if(get_row_layout() == "content-area-1"): // layout: Content Area 1 ?>
 
		<div>
			
			<?php the_sub_field("content-1"); ?>
		</div>
 
	<?php elseif(get_row_layout() == "highlight_box"): // layout: Hightlight Box ?>
 
		<div id="highlightbox">
			<?php the_sub_field("highlight_box"); ?>
		</div>
 
	<?php elseif(get_row_layout() == "content_area_2"): // layout: Content Area 2 ?>
 
		<div>
			<?php the_sub_field("content_box_2"); ?>
		</div>
    
	<?php elseif(get_row_layout() == "course_boxes_label"): // layout: Course Boxes ?>
		
			<?php
			$rows = get_sub_field('course_boxes_boo');
				if($rows)
				{
					foreach($rows as $row)
						{
							echo  '<div class="panel"><a href="'.$row['title_url'].'"><h2>'.$row['title'].'</h2></a><img src="'.$row['image'].'" /><p>'.$row['content'].'</p></div>';
						}
				}
			?>

	<?php elseif(get_row_layout() == "content_area_3"): // layout: Content Area 3 ?>
 
		<div>
			<?php the_sub_field("content_box_3"); ?>
		</div>
		
	<?php endif; ?>
 
<?php endwhile; ?>		   
		
<?php endwhile; ?>
