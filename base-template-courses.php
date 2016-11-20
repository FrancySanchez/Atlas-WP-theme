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

<!--Insert general english-->

<?php if(is_page(icl_object_id(30, 'page'))) { ?>  <!--General English-->

<div class="masthead-courses bg-general-english">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('General English','Atlas WP'); ?></h1>
          <p>
          <?php _e('Our General English courses are based on a communicative and task-based approach, which means students always focus on effective real-life communication and ways of practising and achieving it.','Atlas WP'); ?></p>
        </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(icl_object_id(36, 'page'))) { ?>  <!--Atlas Professional-->

<div class="masthead-courses bg-atlas-professional">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Atlas Professional','Atlas WP'); ?></h1>
          <p>
            <?php _e('Highly trained, experienced and dedicated teachers. Real and relevant material. Part of our guarantee to you.','Atlas WP'); ?>
          </p>
         </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(icl_object_id(32, 'page'))) { ?>  <!--Exam Preparation-->

<div class="masthead-courses bg-exam-preparation">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Exam Preparation','Atlas WP'); ?></h1>
          <p>
            <?php _e('Improve your English and focus on developing skills and techniques to succeed in your exam.','Atlas WP'); ?>
          </p>
         </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(icl_object_id(536, 'page'))) { ?>  <!--Group Programmes-->

<div class="masthead-courses bg-group-programmes">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Group Programmes','Atlas WP'); ?></h1>
          <p>
          <?php _e('We offer tailormade programmes for schools and colleges worldwide which are created to meet the specific language requirements of the students involved.','Atlas WP'); ?>          
          </p>
        </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(6093)) { ?>  <!--Learn Other Languages-->

<div class="masthead-courses bg-other-languages">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Learn Other Languages','Atlas WP'); ?></h1>
          <p>
          <?php _e('We offer a variety of part-time language courses in Spanish, Portuguese, German, French and Italian.','Atlas WP'); ?>
          </p>
        </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(icl_object_id(15911, 'page'))) { ?>  <!--Atlas Junior-->

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

<?php }

elseif(is_page(icl_object_id(427, 'page'))) { ?>  <!--Our Courses-->

    <div class="masthead-courses">
          <div class="center">

            <div>
              <h1><?php _e('Our Courses','Atlas WP'); ?></h1>
              <p>
                <?php _e('Highly trained, experienced and dedicated teachers. Real and relevant material. Part of our guarantee to you.','Atlas WP'); ?>
              </p>
            </div>

          </div>
    </div>

<?php }

elseif(is_page(icl_object_id(20964, 'page'))) { ?>  <!--GE and Exam Prep-->

    <div class="masthead-courses bg-ge-exam-prep">
          <div class="center">

            <div>
              <h1>General English and Exam Preparation</h1>
              <p>
                Highly trained, experienced and dedicated teachers. Real and relevant material. Part of our guarantee to you.
              </p>
            </div>

          </div>
    </div>

<?php }

else {

  };?>
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
