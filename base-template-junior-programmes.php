<?php
/*
Template Name: Junior Programmes
*/
?>
<section class="home2">


    <div class="inner">
    
        <div class="row">

            <div class="hidden-xs col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
                <div class="home-welcome">
                                     
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else: ?>

					<?php endif; ?>

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

<!-- insert Junior Centres -->

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
									<h3><?php icl_link_to_element(30); ?></h3>
									<p><?php _e('Our General English Courses are designed to give you the language skills to live, work, study and travel in an English-speaking environment.','Atlas WP'); ?></p>
									
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
								<h3><?php icl_link_to_element(34); ?></h3>
								<p><?php _e('Atlas Language School’s Junior Summer Programmes run every summer in Ireland, the UK and USA.','Atlas WP'); ?></p>
								
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
								<h3><?php icl_link_to_element(32); ?></h3>
								<p><?php _e('Our special exam preparation courses prepare students to take a range of examinations, including the Cambridge First and Advanced exams, TOEIC, and IELTS.','Atlas WP'); ?></p>
								
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
	                    <?php _e('Here at Atlas Language School we offer a selection of English courses in Dublin. Whether you are looking to improve your English by learning the language in an English speaking country, or if you’re already travelling to Ireland and want to develop your English language skills while being here, we have the right English course for you. Whatever your English language requirements we will help you design a clear learning strategy! Atlas Language School is considered a leading English language school in Dublin.','Atlas WP'); ?>                    
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

                


