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



<!--Insert Accommmodation-->

<?php if(is_page(icl_object_id(8405, 'page'))) { ?>  <!--Accommodation-->

<div class="masthead-courses bg-accommodation">
	<div class="wrap container">      	
    <div class="page-wrap">
      <div class="inner"> 
		    <div class="c-hero-content">
		      <h1><?php _e('Accommodation','Atlas WP'); ?></h1>
		      <p>
		      <?php _e('Choose from a range of accommodation options, from half-board homestay to self-catering residential accommodation.','Atlas WP'); ?>        
		      </p>
		    </div>
      </div> 
    </div>
 </div>
</div>

<?php }

elseif(is_page(icl_object_id(11, 'page'))) { ?>  <!--Social Programme-->

<div class="masthead-courses bg-social">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Social Programme','Atlas WP'); ?></h1>
          <p>
          <?php _e('Fun and action-packed programme of daily afternoon activities, social events and weekend excursions.','Atlas WP'); ?>          
          </p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php }

elseif(is_page(icl_object_id(536, 'page'))) { ?>  <!--Group Programmes-->

<div class="masthead-courses bg-group">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Group Programmes','Atlas WP'); ?></h1>
          <p>
          <?php _e('Tailor-made package courses for juniors, adults or professionals that are created to suit different types of English learners and specific needs of the group.','Atlas WP'); ?>        
          </p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php }

elseif(is_page(icl_object_id(36, 'page'))) { ?>  <!--Atlas Professional-->

<div class="masthead-courses bg-professional">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Atlas Professional','Atlas WP'); ?></h1>
          <p>
          <?php _e('English language coaching programme for executives that is designed to meet specific business needs.','Atlas WP'); ?>
          </p>
      </div>
      </div>
    </div>
  </div> 
</div>

<?php }


elseif(is_page(10629)) { ?>  <!--Atlas Teacher Training-->

<div class="masthead-courses bg-teacher">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Teacher Training','Atlas WP'); ?></h1>
          <p>
          <?php _e('Accredited quality TEFL courses that lead to an internationally recognised qualification.','Atlas WP'); ?>     
          </p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php }

elseif(is_page(icl_object_id(506, 'page'))) { ?>  <!--Atlas Study / Work Program-->

<div class="masthead-courses bg-studywork">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <h1><?php _e('Study / Work Program','Atlas WP'); ?></h1>
          <p>
          <?php _e('Combine your General English course with a quality work placement to gain valuable skills in an English-speaking environment.','Atlas WP'); ?>
          </p>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php }

elseif(is_page(icl_object_id(20428, 'page'))) { ?>  <!--Atlas High School -->

<div class="masthead-courses bg-highschool">
  <div class="wrap container">        
    <div class="page-wrap">
      <div class="inner"> 
        <div class="c-hero-content">
          <!--<h1><?php _e('High School Program','Atlas WP'); ?></h1>
          <p>
          <?php _e('Our High School programmes are a life learning experience which gives young learners the opportunity to challenge themselves personally and academically.','Atlas WP'); ?>
          </p>-->
        </div>
      </div>
    </div>
  </div> 
</div>

<?php }



elseif(is_page(icl_object_id(7, 'page'))) { ?>  <!--Course Fees-->

<div class="masthead-courses bg-prices">
   
  <html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
            $("#div1").fadeTo(1000, 0.7);
            $("#div2").fadeTo(2000, 0.7);
            $("#div3").fadeTo(3000, 0.7);
            $("#div4").fadeTo(4000, 0.7);
            $("#div5").fadeTo(5000, 0.7);
            $("#div6").fadeTo(6000, 0.7);
            $("#div7").fadeTo(7000, 0.7);
            $("#div8").fadeTo(8000, 0.7);
            $("#div9").fadeTo(9000, 0.7);
            $("#div10").fadeTo(10000, 0.7);
            $("#div11").fadeTo(12000, 1.0);

        });
      </script>
    
    </head>
  <body>
<div id="div1" style="width:50px;height:50px;display:none;background-color:red;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('P')); ?></div> &nbsp; 
<div id="div2" style="width:50px;height:50px;display:none;background-color:blue;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('R')); ?></div> &nbsp;
<div id="div3" style="width:50px;height:50px;display:none;background-color:green;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('O')); ?></div> &nbsp; 
<div id="div4" style="width:50px;height:50px;display:none;background-color:yellow;font-family:calibri; color:white;font-size:30px;text-align:center;;"><?php icl_link_to_element(395,'page',__('M')); ?></div> &nbsp; 
<div id="div5" style="width:50px;height:50px;display:none;background-color:grey;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('O')); ?></div> &nbsp; 
<div id="div6" style="width:50px;height:50px;display:none;background-color:red;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('T')); ?></div> &nbsp;
<div id="div7" style="width:50px;height:50px;display:none;background-color:orange;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('I')); ?></div> &nbsp;
<div id="div8" style="width:50px;height:50px;display:none;background-color:purple;font-family:calibri; color:white;font-size:30px;text-align:center;;"><?php icl_link_to_element(395,'page',__('O')); ?></div> &nbsp;
<div id="div9" style="width:50px;height:50px;display:none;background-color:blue;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('N')); ?></div> &nbsp; 
<div id="div10" style="width:50px;height:50px;display:none;background-color:green;font-family:calibri; color:white;font-size:30px;text-align:center;"><?php icl_link_to_element(395,'page',__('S')); ?></div> &nbsp;
<div id="div11" style="position:relative; margin-left:-2%; margin-top:+2%"><?php icl_link_to_element(395,'page','<img src="http://www.atlaslanguageschool.com/wp-content/uploads/2015/09/promotions-now-on.png">'); ?></div> &nbsp;
  </body>
</html>
<!--apply_filters( 'wpml_element_link', 2, 'page', __( 'Custom link text for the sample page' ) );-->

<!--
      <div class="promotion">      
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/PROMOTION.png" />
      </div> 

      <div class="center"
        <div>          
          <h1><?php _e('Course Fees','Atlas WP'); ?></h1>
          <p>
          <?php _e('<a STYLE="text-decoration:none; color: #CF142B;" href="http://www.atlaslanguageschool.com/contact-us/"><strong>Contact us</strong></a> today to learn about our special offers and seasonal promotions.','Atlas WP'); ?>
          </p>
        </div>
      </div> -->
</div> 

<?php }

else {

}
;?>


  <div class="wrap container" role="document">

    <div class="page-wrap">
          <div class="inner">
            <div>

              <section class="main-content">  

              <?php include roots_template_path(); ?>

              </section>
              <?php if (roots_display_sidebar()) : ?>
              <?php include roots_sidebar_path(); ?>
              <?php endif; ?>

            </div>
          </div>
    </div>
       

  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>