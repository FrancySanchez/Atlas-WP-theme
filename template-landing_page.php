<?php
/*
* Template Name: Languages Landing Page Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  
   <div class="page-wrap">
      <div class="inner">
        <div>

          <section class="main-content">

          	<?php the_content();?>

  					
 				<div class="post-excerpts">
                      <ul class="course-grid ch-grid">

						<?php 
							$last = count(get_field('homepage_options'));
							$x = 1;
							if(get_field('homepage_options')): ?>

						<?php while(the_repeater_field('homepage_options')): ?>
							
							<li class="course-li">
									<?php 
									$imagebg = get_sub_field('image');
									?>
								<div class="ch-item" <?php if($imagebg){ echo 'style="background-image: url(\'' . $imagebg . '\')"';}else{};?>  >
									<div class="ch-info">
									<h3><a href="<?php the_sub_field('title_url'); ?>"><?php the_sub_field('title'); ?></a></h3>
									<p><a href="<?php echo $row['title_url'];?>">Read More</a></p>
									</div>
								</div><!-- end panel -->
							</li>
							                      <?php 
								if ($x%2 === 1 && $x==$last) :?>
									<li class="course-li">
										<div class="ch-item" >
											<div class="ch-info">
												<h3><a href="#"></a></h3>
												<p><a href="#"></a></p>
												</div>
										</div><!-- end panel -->
									</li>
							  <?php endif;
							  
							  $x++;
							  endwhile; ?>
				 	    <?php endif; ?>

				    </ul>
				</div><!-- end homepage_box -->
		
		  </section>
          <!-- /.main-content -->
<?php endwhile; ?>