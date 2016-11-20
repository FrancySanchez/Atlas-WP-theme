<?php if(is_front_page()){ ?>
<section class="home5">
    <div class="full hidden-xs">
          <?php echo do_shortcode('[justified_image_grid ids="12557,12582,12569,12590,12549,12608,12568,12559,12603,12602,12607,12550,12566,12563,12545,12562,12600,12615,12588,12610,12584,12605,12604,12572,12585,12565,12597,12555,12581,12544,12586,12595,12579,12560,12589,12594,12580,12593,12547,12561,12554,12553,12601,12571,12546,12558,12599,12592,12543,12551,12598,12609,12564,12596,12591,12556,12587,12567,12552,12570"]');?>
    </div>
    <div class="row hidden-sm hidden-md hidden-lg mobile-gallery">
        <div class="col-xs-12">
          <a href="<?php echo get_site_url();?>/photos-2/">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery.jpg" class="mobile-gallery-img" />
          </a>
          <a href="<?php echo get_site_url();?>/photos-2/">
              View Gallery
          </a>
        </div>
    </div>
</section>
<section class="home7">
 <div class="full">
    <div class="inner full-wide">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-1 hidden-xs address">                  
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_field('homepage_contact'); ?></h1>
          <?php endwhile; // end of the loop. ?>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-xs-12">
           <div id="map"></div>
           
        </div>
       <!--  <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 hidden-xs" id="canvas1">
           <iframe id="3dmap" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1417498543574!6m8!1m7!1sFcLMfL7BQREAAAQfCQccEA!2m2!1d53.33030690231359!2d-6.264742813409839!3f308.7687135835964!4f-3.0567508221811295!5f1.4214797185029173" width="460" height="300" frameborder="0" style="border:0"></iframe>
        </div> -->
      </div>
    </div>
 </div>
</section>
<?php } elseif(is_page(15911)) { ?>
<section class="home5">
  <div class="full hidden-xs">
   <?php echo do_shortcode('[justified_image_grid ids="12705,12670,12664,12679,12686,12645,12694,12701,12684,12641,12639,12695,12665,12638,12685,12615,12622,12703,12704,12681,12671,12668,12620,12659,12616,12643"]');?>
  </div>
  <div class="row hidden-sm hidden-md hidden-lg mobile-gallery">
    <div class="col-xs-12">
      <a href="<?php echo get_site_url();?>/photos-2/">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/gallery.jpg" class="mobile-gallery-img" />
      </a>
      <a href="<?php echo get_site_url();?>/photos-2/">
        View Gallery
      </a>
    </div>
  </div>
</section>
<?php } else {
};?>
<footer class="content-info footerbg" role="contentinfo">
  <div class="endorsed">
    <div class="inner">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/accreditations.jpg" class="endorsed-img hidden-xs"/>
    </div>
  </div>
  <div class="container">
    <div class="inner">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>           
  </div>
 </div>
</footer>
 <div class="footerend">
  <div class="inner">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <p class="copyright">
            &copy; <?php echo date('Y');?> Atlas Language School. All Rights Reserved.
           <a href="https://www.facebook.com/atlas.language.school?fref=ts" target="blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/atlas_dublin" target="blank">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/atlas-language-school" target="blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="http://instagram.com/atlaslanguageschool?ref=badge" target="blank">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/user/AtlasLanguageSchool" target="blank">
              <i class="fa fa-youtube-play"></i>
            </a>
        </p>
      </div>
    </div>
  </div>            
</div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.mousewheel.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('#ca-container').contentcarousel();
});
</script>
<script>
$( function() {
$( '#cbp-qtrotator' ).cbpQTRotator();
} );
</script>
<script>
jQuery(function($) {
$("table").addClass("responsive");
});
</script>
 <!--noptimize--><script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script><!-- /noptimize -->
  <!--noptimize--><script>
           function initMap(){
                
                var centermap = new google.maps.LatLng(53.337514, -6.264893);

                var mapOptions = {
                    zoom: 13,
                    center: centermap, // Atlas
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: true,                 
                };
                             
                var mapElement = document.getElementById('map');

                var map = new google.maps.Map(mapElement, mapOptions);
                                
                var myLatlng = new google.maps.LatLng(53.330323, -6.264635);

                var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title:"Atlas Language School",
                })
            }
            </script><!-- /noptimize -->
<?php wp_footer();?>