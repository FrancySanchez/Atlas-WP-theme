<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

<div class="masthead-courses bg-junior">
      <div class="center">

        <div>
          <h1><?php _e('Atlas Junior','Atlas WP'); ?></h1>
          <p>
            <?php _e('Study English in Ireland, the UK or USA and learn about Irish, British and American culture in a fun and challenging environment.','Atlas WP'); ?>
          </p>
        </div>

      </div>
</div>
    <!-- /.masthead -->

  <div class="wrap container" role="document">

   

              <?php include roots_template_path(); ?>
              <?php if (roots_display_sidebar()) : ?>
              <?php include roots_sidebar_path(); ?>
              <?php endif; ?>


        </div>
      </div>
    </div>
    <!-- /.page-wrap -->       

  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
