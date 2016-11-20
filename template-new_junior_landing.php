<?php
/*
* Template Name: New Junior Landing Page Template
*/
?>

<section class="home2">


    <div class="inner">
    
        <div class="row">

            <div class="hidden-xs col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
                <div class="home-welcome">
                   <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/atlas-icon.png" class="home-welcome-img" />
                   
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else: ?>

					<?php endif; ?>

                </div>
            </div>

            <div class="hidden-xs col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">

                <h3 class="home-test-title"><?php _e('Watch our Junior Video','Atlas WP'); ?></h3>

                <div class="videoWrapper">
                    <iframe style="border:1px solid #CECECE" width="16" height="9" src="https://www.youtube.com/embed/vQMg85_05vk?rel=0&amp;showinfo=0" allowfullscreen>></iframe>        
                </div>
            </div>
            
            <div class="hidden-xs col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">

                 <h3 class="home-test-title"><?php _e('What our Students Say','Atlas WP'); ?></h3>

                <div class="row">

              		  <div class="col-md-12">

		             	   <div id="cbp-qtrotator" class="cbp-qtrotator">

		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Giulia-Scoppa.jpg" alt="img01" />
		                            <blockquote>
		                              <p>I've studied at Atlas different times. I think that it is a very beautiful and interesting experience because you can meet a lot of people from different places and countries.</p>
		                              <footer>Giulia Scoppa, Italy.</footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Egor-Doroshev.jpg" alt="img02" />
		                            <blockquote>
		                              <p>I’ve never been to Atlas before but I have made a lot of friends here, I really like this school! I will be back again next year! It’s the best!</p>
		                              <footer>Egor Doroshev, Russia.</footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Lisa-Marie-Vogelgesang.jpg" alt="img03" />
		                            <blockquote>
		                              <p>It’s so much fun and I’m looking forward to coming back as soon as possible. I love the English classes, trips to Dublin and all the other activities, you have so much fun.</p>
		                              <footer>Lisa Marie Vogelgesang, Germany.</footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Hibki-Yamada.jpg" alt="img04" />
		                            <blockquote>
		                              <p>I’ve had a great experience. I have made many friends from all around the world. The teachers make the classes really fun. I’m sure Atlas is the best!</p>
		                              <footer>Hibki Yamada, Japan.></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Maria-Dominguez.jpg" alt="img05" />
		                            <blockquote>
		                              <p>The three weeks I have spent at Atlas Language School have been fabulous! I’ve had loads of fun! The classes have been really dynamic and I’ve learnt a lot of new vocabulary.</p>
		                              <footer>Maria Dominguez, Spain.></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Jeremi-Zajac.jpg" alt="img06" />
		                            <blockquote>
		                              <p>Everyone here is outstanding in a positive way. The teachers are some of the most creative and charismatic people I’ve met in my life and my host family is really friendly. The best two weeks of my summer!</p>
		                              <footer>Jeremi Zajac, Poland.></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Zahra-Mohammadsaeed.jpg" alt="img07" />
		                            <blockquote>
		                              <p>I have had a lot of fun at Atlas. I have made a lot of friends from different countries. The lessons are really good. The teachers are awesome, they make the lessons much easier.</p>
		                              <footer>Zahra Mohammadsaeed, Saudi-Arabia.></footer>
		                            </blockquote>
		                        </div>

		                    </div>


            	    </div>

                </div>
     </div>

           <div class="mobile-wrap-4">
		            <div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-1">
		                <p><?php icl_link_to_element(11); ?></p>
		            </div>
		            <div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-2">
		                <p><?php icl_link_to_element(247); ?></p>
		            </div>
		            <div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-3">
		                <p><?php icl_link_to_element(7); ?></p>
		            </div>
		            <div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-4">
		                <p><?php icl_link_to_element(8405); ?></p>
		            </div>
            </div>

        </div>
        
    </div>
</section>


<section class="home3" id="courses">
    <div class="full">

    <div class="inner full-wide">
        
        <div class="row">
      
            <div class="col-md-12 col-xs-12">
                
                <h3 class="home-test-title centered padbottom"><?php _e('Our Programmes','Atlas WP'); ?></h3>

                <ul class="ch-grid">
					<li class="course-li">   
							<div class="ch-item ch-img-9">
								<div class="ch-info">
									<h3><?php icl_link_to_element(16173); ?></h3>
									<p><?php _e('Atlas Junior Dublin is a great for young learners to experience the delights that Dublin has to offer.','Atlas WP'); ?></p>
									
								</div>
							</div>
					</li>
					
					<li class="course-li">
						 <div class="ch-item ch-img-10">
							<div class="ch-info">
								<h3><?php icl_link_to_element(16207); ?></h3>
								<p><?php _e('Galway is an extremely popular seaside destination with beautiful beaches and long winding promenade, and a buzzing cosmopolitan city.','Atlas WP'); ?></p>
								
							</div>
						 </div>
					</li>
										
                    <li class="course-li">
						<div class="ch-item ch-img-12">      
							<div class="ch-info">
						        <h3><?php icl_link_to_element(16220); ?></h3>
                                <p><?php _e('Atlas Junior chichester is a wonderful way to experience a traditional English city and also get to see some of the most famous destinations of the UK like Oxford and London.','Atlas WP'); ?></p>
                                
							</div>
						</div>
					</li>
					<li class="course-li">
						<div class="ch-item ch-img-14">
						<div class="ch-info">
								<h3><?php icl_link_to_element(22233); ?></h3>
								<p><?php _e('The perfect opportunity to combine language learning and football training with the world’s largest club, Real Madrid.','Atlas WP'); ?></p>
														
							</div>
						</div>
					</li>
					
				</ul>
                
            </div>
                
        
        </div>
        
				
          </div>  

    </div>
</section>               

<section class="home4 hidden-xs">

    <div class="inner">

        <div class="row">

            <h3 class="centered padbottom"><?php _e('Connect with us','Atlas WP'); ?></h3>
            
            <div class="col-xs-12 col-md-4">
                <div class="home-insta">
                    <a href="http://instagram.com/atlaslanguageschool?ref=badge" target="blank"><i class="fa fa-instagram instagram"></i></a>
                    <a href="http://instagram.com/atlaslanguageschool?ref=badge" target="blank"><p class="home-social-title">atlaslanguageschool</p></a>
					 <?php echo do_shortcode('[instagram-feed num=2 imageres=medium cols=2 heightunit=px showbutton=false  showfollow=false showheader=false showcaption=true]'); ?>                
 				</div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="home-twitter">
                    <a href="https://twitter.com/Atlas_Junior_" target="blank"><i class="fa fa-twitter twitter"></i></a>
                    <a href="https://twitter.com/Atlas_Junior_" target="blank">
                        <p class="home-social-title">@Atlas_Junior_</p>
                    </a>
                    <div class="wraptweets">
                          <p>
							<?php fetchTweets( array( 'id' => 16251 ) ); ?>
                          </p>
                      
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                 <div class="home-fb">
                    <a href="https://www.facebook.com/atlas.language.school?fref=ts"><i class="fa fa-facebook fb"></i></a>
                    <a href="https://www.facebook.com/atlas.language.school?fref=ts">
                        <p class="home-social-title">Atlas Language School</p>
                    </a>
                    <a href="https://www.facebook.com/atlas.language.school?fref=ts">
                    	<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/facepile.jpg" />
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>

</section>