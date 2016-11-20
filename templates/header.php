  <div class="top-rail">
        
        <div class="inner">

           <nav class="menu">              
            <?php dynamic_sidebar('sidebar-toprail'); ?>
          </nav>   
          

          <div class="toprail-links">
            <a href="<?php echo get_site_url();?>/contact-us" class="top-rail-links">Contact</a>
            <a href="<?php echo get_site_url();?>/Atlas-blog" class="top-rail-links">Blog</a>
            <a href="<?php echo get_site_url();?>/working-with-atlas" class="top-rail-links">Work with us</a>
            <a href="<?php echo get_site_url();?>/agent-area" class="top-rail-links lwaclick">Agent Login</a>
          </div>

          <nav class="icons">
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
          </nav>
        
      </div>

  </div>

  <header class="top-header large">

    <div class="inner">

    	 <div class="row">

            <div class="col-xs-12 col-md-12">
              <?php
              $my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) );?>
		          <a href="<?php echo $my_home_url; ?>" class="logo logo-mobile hidden-md hidden-lg">
		            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/atlas-logo.jpg" alt="Atlas Language School logo">
		          </a>
              <a href="<?php echo site_url();?>/booking-enquiry" class="enquire-width enquire-button-mobile hidden-md hidden-lg">
                Enquire Now
              </a>

		         <?php

		            wp_nav_menu(
		                array(
		              'menu' => 'Main Menu',
		              'theme_location' => 'primary_navigation',
		              'container' => 'div',
		              'container_id' => 'navigation'
		              )
		            );

		            ?>
		    </div>

		</div>

</div>
</header>