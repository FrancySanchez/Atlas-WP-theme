<article <?php post_class(); ?>>
  <header>
  		<figure class="blog-image">
  			<a href="<?php the_permalink(); ?>">

				<?php if ( has_post_thumbnail() ) {
  						echo get_the_post_thumbnail($post_id,array( 700, 9999));
				} else { 

				$input = array("default-blog-image1.jpg", "default-blog-image2.jpg", "default-blog-image3.jpg", "default-blog-image4.jpg", "default-blog-image5.jpg");
				shuffle($input);
				$rand_keys = array_rand($input, 3);
				?>

				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/blog/<?php echo $input[$rand_keys[0]];?>" alt="<?php the_title(); ?>" />

				<?php } ?>

			</a>
			
		</figure>
  </header>
  <div class="entry-summary">		
  	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		
  </div>
  <footer>
  	<?php get_template_part('templates/entry-meta'); ?>
  </footer>
</article>
									
											