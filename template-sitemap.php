<?php
/*
Template Name: Sitemap
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <h2 id="pages">Pages</h2>

        <ul>

        <?php

        // Add pages you'd like to exclude in the exclude here

        wp_list_pages(

          array(

            'exclude' => '',

            'title_li' => '',

          )

        );

        ?>

        </ul>

        

<?php endwhile; ?>
