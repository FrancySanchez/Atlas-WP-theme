<?php
/*
Template Name: Atlas Junior Test
*/
?>

<?php while (have_posts()) : the_post(); ?>

   <div class="page-wrap">
      <div class="inner">
        <div>

          <section class="main-content">

            <?php the_content(); ?>


 				<div class="post-excerpts">
                      <ul class="course-grid ch-grid">

						<?php if(get_field('homepage_options')): ?>

						<?php while(the_repeater_field('homepage_options')): ?>
						
						<li class="course-li">
							<div class="ch-item">
							<?php
	                          $imagebg = get_sub_field('image');
	                        ?>
								<div class="ch-info" <?php if($imagebg){ echo 'style="background-image: url(\'' . $imagebg . '\')"';}else{};?>>
								<h3><a href="<?php the_sub_field('title_url'); ?>"><?php the_sub_field('title'); ?></a></h3>
								<p><a href="<?php echo $row['title_url'];?>">Read More</a></p>
								</div>
							</div><!-- end panel -->
						</li>
						<?php endwhile; ?>
				    <?php endif; ?>
				    </ul>
				</div><!-- end homepage_box -->
		
				<div id="halfpage">
					<?php the_field('half_page'); ?>		
				</div>

          </section>
          <!-- /.main-content -->
		
<?php endwhile; ?>
