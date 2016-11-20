<?php
/*
Template Name: Atlas Junior Old
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  
  <div id="homepage_box">
		
						<?php if(get_field('homepage_options')): ?>

						<?php while(the_repeater_field('homepage_options')): ?>
						
							<div class="panel">
							
								<h2><a href="<?php the_sub_field('title_url'); ?>"><?php the_sub_field('title'); ?></a></h2>
								<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>" />
								<p><?php the_sub_field('content'); ?></p>
								
							</div><!-- end panel -->
						
						<?php endwhile; ?>
				    <?php endif; ?>
		</div><!-- end homepage_box -->
		
			<div id="halfpage">
						<?php the_field('half_page'); ?>		
		</div>

<?php endwhile; ?>
