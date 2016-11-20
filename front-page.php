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

                <h3 class="home-test-title"><?php _e('Watch our Video','Atlas WP'); ?></h3>

                <div class="videoWrapper"> 
                	<?php if(ICL_LANGUAGE_CODE=='ja') : ?>
						 <!--<iframe style="border:1px solid #CECECE" width="16" height="9" src="https://www.youtube.com/embed/Slln3D2Z0VM?rel=0&amp;showinfo=0" allowfullscreen></iframe>-->                     
						 <!-- <div class="youtube-container">
						   <div class="youtube-player" data-id="Slln3D2Z0VM"></div>
						 </div>  -->
							<a href="http://www.youtube.com/watch?v=Slln3D2Z0VM" rel="prettyPhoto" title="">
								<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="YouTube" />
							</a>
                        <?php elseif(ICL_LANGUAGE_CODE=='zh-hans') : ?>
                     		<!-- <iframe style="border:1px solid #CECECE" width="16" height="9" src="https://www.youtube.com/embed/8m59yWQWzyw?rel=0&amp;showinfo=0" allowfullscreen></iframe> -->
                     		<!-- <div class="youtube-container">
							   <div class="youtube-player" data-id="8m59yWQWzyw"></div>
							</div>  -->
							<a href="http://www.youtube.com/watch?v=8m59yWQWzyw" rel="prettyPhoto" title="">
								<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="YouTube" />
							</a>
 			<?php elseif(ICL_LANGUAGE_CODE=='tr') : ?>
                     		<!-- <iframe style="border:1px solid #CECECE" width="16" height="9" src="https://www.youtube.com/embed/pYDfj-UmHKE?rel=0&amp;showinfo=0" allowfullscreen></iframe> -->
                     		<!-- <div class="youtube-container">
							   <div class="youtube-player" data-id="8m59yWQWzyw"></div>
							</div>  -->
							<a href="https://www.youtube.com/watch?v=pYDfj-UmHKE" rel="prettyPhoto" title="">
								<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="YouTube" />
							</a>
                        <?php elseif(ICL_LANGUAGE_CODE=='fr') : ?>
						<!-- <a href="https://www.youtube.com/embed/djZHIZaF1-E?iframe=true&width=330&height=240" rel="wp-video-lightbox[iframes]">
							<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="Atlas video" />
						</a>   -->        
						<a href="http://www.youtube.com/watch?v=djZHIZaF1-E" rel="prettyPhoto" title="">
							<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="YouTube" />
						</a>
              
                     <?php else: ?>
                	 	<!--  <div class="youtube-container">
						   <div class="youtube-player" data-id="djZHIZaF1-E"></div>
						 </div> -->
						<a href="http://www.youtube.com/watch?v=djZHIZaF1-E" rel="prettyPhoto" title="">
							<img src="http://atlaslanguageschool.com/wp-content/uploads/2016/11/Atlas-Language-School-video.png" alt="YouTube" />
						</a>

                	 <?php 
                    endif; ?>
                </div>
            </div>
            
            <div class="hidden-xs col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">

                 <h3 class="home-test-title"><?php _e('What our Students Say','Atlas WP'); ?></h3>

                <div class="row">

              		  <div class="col-md-12">

		             	   <div id="cbp-qtrotator" class="cbp-qtrotator">

		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-mariana.jpg" alt="img01" />
		                            <blockquote>
		                              <p>I just like it! In the class everybody is friends and we laugh a lot. It is a nice and relaxed atmosphere.</p>
		                              <footer>Mariana Krisanoski, Brazil.<a href="<?php echo get_site_url();?>/testimonials">Read More</a></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-reia.png" alt="img02" />
		                            <blockquote>
		                              <p>I feel very comfortable at Atlas. I enjoy the school activities very much and there are so many oportunities to speak English.</p>
		                              <footer>Reia Koke, Japan.<a href="<?php echo get_site_url();?>/testimonials">Read More</a></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-nagore.png" alt="img03" />
		                            <blockquote>
		                              <p>It has the nicest teachers and a great organisation (like trips, and cookies on Fridays, and parties, also!).</p>
		                              <footer>Nagore Crespo, Spain.<a href="<?php echo get_site_url();?>/testimonials">Read More</a></footer>
		                            </blockquote>
		                        </div>
		                        <div class="cbp-qtcontent">
		                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-jin.png" alt="img04" />
		                            <blockquote>
		                              <p>The teachers always teach us enthusiastically so I can learn many things from them. The whole staff helps me when I need it, they are always kind and friendly when I visit the office.</p>
		                              <footer>Jin Dongkang, South Korea.<a href="<?php echo get_site_url();?>/testimonials">Read More</a></footer>
		                            </blockquote>
		                        </div>

		                    </div>


            	    </div>

                </div>
     </div>

            <div class="mobile-wrap-4">

				<div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-3">
		           	<p><?php icl_link_to_element(427); ?></p>
		        </div>
		        <div class="col-xs-6 hidden-sm hidden-md hidden-lg mobile-4">
		            <p><?php icl_link_to_element(7); ?></p>
		        </div>
		        <div class="col-xs-12 hidden-sm hidden-md hidden-lg mobile-1">
		            <p><?php icl_link_to_element(11); ?></p>
		        </div>
				
				<div class="section-mobile hidden-sm hidden-md hidden-lg" >
			        <h3> Welcome to </h3>
			        <h3>Atlas Language School</h3>
			        	<p>Are you looking to improve your English language within an English speaking country? Are you in search of a language school, where you can develop your language based on real experiences? Atlas Language School is a leading English language school in Dublin and is your solution to learning English within an English speaking environment. We offer a selection of English language courses in Dublin that guarantee steady progression, so you can be confident to find the right English course with Atlas Language School.</p>
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
                
                <h3 class="home-test-title centered padbottom"><?php _e('Our Courses','Atlas WP'); ?></h3>

                <ul class="ch-grid">
					<li class="course-li">   
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<h3> <?php icl_link_to_element(20964); ?></h3>
									<p><?php _e('We offer a range of General English Courses as well as Exam Preparation Courses.','Atlas WP'); ?></p>
									
								</div>
							</div>
					</li>
					
					<li class="course-li">
						 <div class="ch-item ch-img-5">
							<div class="ch-info">
								<h3><?php icl_link_to_element(536); ?></h3>
								<p><?php _e('We offer tailormade programmes for schools and colleges worldwide which are created to meet the specific language requirements of the students involved.','Atlas WP'); ?></p>
								
							</div>
						 </div>
					</li>
					<li class="course-li">
						  <div class="ch-item ch-img-2">
							<div class="ch-info">
								<h3><?php icl_link_to_element(15911); ?></h3>
								<p><?php _e('Atlas Language School’s Junior Summer Programmes run every summer in Ireland and the UK.','Atlas WP'); ?></p>
								
							</div>
						</div>
					</li>
					
                    <li class="course-li">
						<div class="ch-item ch-img-4">      
							<div class="ch-info">
						        <h3><?php icl_link_to_element(10629); ?></h3>
                                <p><?php _e('Our CELT course leads to an internationally recognised qualification and is intended for people who wish to enter the profession of English language teaching.','Atlas WP'); ?></p>
                                
							</div>
						</div>
					</li>
					<li class="course-li">
						<div class="ch-item ch-img-3">
							<div class="ch-info">
								<h3><?php icl_link_to_element(20428); ?></h3>
								<p><?php _e('Our High School Programmes provide an excellent opportunity for students to improve their English while experiencing the lifestyle and culture of a new country','Atlas WP'); ?></p>
								
							</div>
						</div>
					</li>
					<li class="course-li">
						<div class="ch-item ch-img-6">
							<div class="ch-info">
								<h3><?php icl_link_to_element(6093); ?></h3>
								<p><?php _e('We offer a variety of part-time language courses in Spanish, Portuguese, German, French and Italian.','Atlas WP'); ?></p>
							</div>
						</div>
					</li>
				</ul>
                
            </div>
                
        
        </div>
        
				
          </div>  

    </div>
</section>


<section class="home9">

    <div class="inner">
        
        <div class="row">
        
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 hidden-xs"> 
            	
            	<div class="learn-wrap">
               		 <h3 class="learn-title"><?php _e('Learning with','Atlas WP'); ?></h3>
               		 <h3 class="learn-title white"><?php _e('Atlas Language School','Atlas WP'); ?></h3>
               	</div>

                <div class="learn-wrap-p">
	                <p class="welcome-text">
	                    <?php _e('Here at Atlas Language School we offer a selection of English courses in Dublin. Whether you are looking to improve your English by learning the language in an English speaking country, or if you’re already travelling to Ireland and want to develop your English language skills while being here, we have the right English course for you. Whatever your English language requirements we will help you design a clear learning strategy! Atlas Language School is considered a leading English language school in Dublin, recognised by ACELS, a service of Quality and Qualifications Ireland, for English language teaching (ELT).','Atlas WP'); ?>                    
	                </p>
	              </div>

            </div>
            
            <div class="col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-0 hidden-xs">
                <div class="row">
                    <h3 class="home-test-title home-blog-section-title"><?php _e('Meet the Team','Atlas WP'); ?></h3>

                  <div id="ca-container" class="ca-container">
				<div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Ali</h3>
							<p>English Teacher</p>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I like to make my students feel welcome and part of the Atlas family. I aim to make my classes full of laughter and learning.</span>
							</h4>
						</div>
					</div>
					<div class="ca-item ca-item-2">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Billy</h3>
							<p>English Teacher</p>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I've been teaching at Atlas for almost 5 years now and love it here. I try to make my classes as energetic as possible, with lots of speaking and drama!</span>
							</h4>
						</div>
					</div>
					<div class="ca-item ca-item-3">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Tim</h3>
							<p>English Teacher</p>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I always include grammar study in every class but I also make sure all my classes have a communicative aspect to improve student confidence and fluency.</span>
							</h4>
						</div>
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Heather</h3>
							<p>English Teacher</p>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I love the strong sense of community at Atlas. It's so rewarding watching my students develop as language learners!</span>
							</h4>
						</div>
					</div>
					
					<div class="ca-item ca-item-6">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>David</h3>
							<p>English Teacher</p>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I like to adapt new ideas in language teaching in a creative way to make sure they are suitable for all my students.</span>
							</h4>
						</div>
						<!-- Insert new teacher below here-->


						<!-- Insert new teacher abover here-->
					</div>
					
				</div>
			</div>



                </div>

            </div>
            
        </div>
        
    </div>

</section>

                


<section class="home6">
    
    <div class="inner">
       
        <div class="row">
        
            <div class="col-md-8 col-xs-12">
                
                <h3 class="home-test-title"><?php _e('From our blog','Atlas WP'); ?></h3>
					
					<div class="home-blog">

					<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(22552);} ?>
					</div>
			</div>
	      
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
				<div>
                	<h3 class="home-test-title"><?php _e('Have a question?','Atlas WP'); ?></h3>
                	<h4 class="home-test-title"><?php _e('Ask us now!','Atlas WP'); ?></h4>
				</div>
				<div class="c-form">
	                <?php gravity_form(22, false, false, false, '', true, 12); ?>
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
					 <?php echo do_shortcode('[instagram-feed num=2 imageres=medium cols=2 heightunit=px showbutton=false showfollow=false showheader=false showcaption=true]'); ?>                
 				</div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="home-twitter">
                    <a href="https://twitter.com/atlas_dublin" target="blank"><i class="fa fa-twitter twitter"></i></a>
                    <a href="https://twitter.com/atlas_dublin" target="blank">
                        <p class="home-social-title">@Atlas_Dublin</p>
                    </a>
                    <div class="wraptweets">
                          <p>
							<?php fetchTweets( array( 'id' => 13940 ) ); ?>
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