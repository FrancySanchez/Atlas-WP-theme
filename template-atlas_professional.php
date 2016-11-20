<?php
/*
Template Name: Atlas Professional
*/
?>

<div class="masthead-courses">
      <div class="center">

        <div>
          <h1>Atlas Professional</h1>
          <p>
            Highly trained, experienced and dedicated teachers. Real and relevant material. Part of our guarantee to you.
          </p>
        </div>

      </div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
