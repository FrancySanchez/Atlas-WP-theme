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

  <?php 
  if ( ICL_LANGUAGE_CODE==fr) { 
    echo get_new_royalslider(10); 
  }
  elseif ( ICL_LANGUAGE_CODE==de) { 
    echo get_new_royalslider(11); 
  }
  elseif ( ICL_LANGUAGE_CODE==it) { 
    echo get_new_royalslider(12); 
  }
  elseif ( ICL_LANGUAGE_CODE=='zh-hans') { 
    echo get_new_royalslider(13); 
  }
  elseif ( ICL_LANGUAGE_CODE==ja) { 
    echo get_new_royalslider(14); 
  }
  elseif ( ICL_LANGUAGE_CODE==ru) { 
    echo get_new_royalslider(15); 
  }
  elseif ( ICL_LANGUAGE_CODE==es) { 
    echo get_new_royalslider(16); 
  }
  elseif ( ICL_LANGUAGE_CODE=='ar-ar') { ?>
     <!-- echo get_new_royalslider(17); -->
    <section class="video cd-section" id="section1">
      <div class="video-container">
        <video autoplay poster="<?php echo get_stylesheet_directory_uri();?>/assets/img/video-img/home-bg-2-lg.jpg" id="bgvid" loop muted>

          <source type="video/mp4" src="<?php echo get_stylesheet_directory_uri();?>/assets/video/atlas.mp4">

        </video>

      <div class="container video-inner">
          
          <div class="left">
                <a href="http://www.atlaslanguageschool.com/our-courses/atlas-high-school/">
                   <img src="http://www.atlaslanguageschool.com/wp-content/uploads/2016/03/high-school-programme-badge.png" width="100px" style="" />
                </a>
          </div>
          
          <div class="inner">
            
          <div class="row">
              
            <div class="col-md-5 col-md-offset-1">

              <div class="center centermast">
                <div>
                  <h1 class="hero-title">مرحبًا بكم في</h1>
                  <h1> مدرسة أطلس للغات</h1>
                  <p class="hero-p">
                     تقع المدرسة في قلب دبلن مع فريق الخبراء الخاص بنا ومجموعة شاملة من الدورات التي توفر أفضل تجربة حياة وتعلم في المدينة.
                  </p>        
                </div>
             </div>
            </div>
            
            <div class="col-md-3 col-md-offset-1">

                <div class="right">
                  <a class="btn btn-3 btn-3e-long icon-arrow-right" href="http://www.atlaslanguageschool.com/%D8%AF%D9%88%D8%B1%D8%A7%D8%AA%D9%86%D8%A7/?lang=ar-ar">دوراتنا</a><br/>
                  <a class="btn btn-3 btn-3e-long icon-arrow-right" href="http://www.atlaslanguageschool.com/%D8%A7%D9%84%D8%B1%D8%B3%D9%88%D9%85-%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B3%D9%8A%D8%A9/?lang=ar-ar">الرسوم-الدراسية</a><br/>
                  <a class="btn btn-3 btn-3e-long icon-arrow-right" href="http://www.atlaslanguageschool.com/%D8%A7%D9%84%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%A7%D9%84%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%D9%8A/?lang=ar-ar">البرنامج-الاجتماعي</a><br/>
                  <a class="btn btn-3 btn-3e-long icon-arrow-right" href="http://www.atlaslanguageschool.com/امتحان-تحديد-ا…ى-عبر-الإنترنت?lang=ar-ar">امتحان تحديد المستوى عبر الإنترنت</a>
                </div>
            </div>
            
            
            </div>
            
          </div>
          
      </div>
  </div>
</section>
<?php }
  elseif ( ICL_LANGUAGE_CODE==ko) { 
    echo get_new_royalslider(18); 
  }
  elseif ( ICL_LANGUAGE_CODE=='pt-br') { 
    echo get_new_royalslider(19); 
  }
  elseif ( ICL_LANGUAGE_CODE==tr) { 
    echo get_new_royalslider(20); 
  }
  elseif ( ICL_LANGUAGE_CODE=='es-ve') { 
    echo get_new_royalslider(30); 
  }
  else { 
    echo get_new_royalslider(1);
  }
  ?>

<div class="wrap container" role="document">

   

              <?php include roots_template_path(); ?>
              <?php if (roots_display_sidebar()) : ?>
              <?php include roots_sidebar_path(); ?>
              <?php endif; ?>

       

  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
