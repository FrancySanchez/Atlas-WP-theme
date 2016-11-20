<?php
/*
Template Name: Exam Preparation Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
          


    <div class="page-wrap">
      <div class="inner">
        <div>

          <section class="main-content">
            <div>

              

              <div class="full-width bump-bottom">

                  <?php the_content(); ?>


              </div>

              <div class="clearfix"></div>

              <div class="post-excerpts">

<!--                 <h3 class="home-test-title centered padbottom">Our Courses</h3>
 -->
                <ul class="ch-grid">
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/ielts-preparation-course/">
                      <div class="ch-item ch-img-1">
                        <?php
                          $imagebg = get_sub_field('image');
                        ?>
                        <div class="ch-info" <?php if($imagebg){ echo 'style="background-image: url(\'' . $imagebg . '\')"';}else{};?>>
                          <h3>Full-Time IELTS Preparation</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/ielts-preparation-course/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/full-time-fce-preparation-fce20/">
                      <div class="ch-item ch-img-2">
                        <div class="ch-info">
                          <h3>Full-Time FCE Preparation</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/full-time-fce-preparation-fce20/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-cae-ge25cae/">
                      <div class="ch-item ch-img-3">
                        <div class="ch-info">
                          <h3>GE Fluency Plus CAE</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-cae-ge25cae/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-toeic-ge25toeic/">
                      <div class="ch-item ch-img-4">      
                        <div class="ch-info">
                          <h3>GE Fluency Plus TOIEC</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-toeic-ge25toeic/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-ielts-ge25ielts/">
                      <div class="ch-item ch-img-5">
                        <div class="ch-info">
                          <h3>GE Fluency Plus IELTS</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/ge-fluency-plus-with-ielts-ge25ielts/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                    <li class="course-li">
                    <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/ge-fluency-plus-with-fce/">
                      <div class="ch-item ch-img-6">
                        <div class="ch-info">
                          <h3>GE Fluency Plus FCE</h3>
                          <p> <a href="<?php echo site_url();?>/our-courses/exam-preparation-courses/ge-fluency-plus-with-fce/">Read More</a></p>
                        </div>
                      </div>
                      </a>
                    </li>
                  </ul>
              </div>
              <!-- /.post-excerpts -->

              <div class="full-width testimonial">
                <div>

                  <div class="testies">
                   <div id="cbp-qtrotator" class="cbp-qtrotator">

                        <div class="cbp-qtcontent">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-mariana.jpg" alt="img01" />
                            <blockquote>
                              <p>I just like it! In the class everybody is friends and we laugh a lot. It is a nice and relaxed atmosphere.</p>
                              <footer>Mariana Krisanoski, Brazil.</footer>
                            </blockquote>
                        </div>
                        <div class="cbp-qtcontent">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-reia.png" alt="img02" />
                            <blockquote>
                              <p>I feel very comfortable at Atlas. I enjoy the school activities very much and there are so many oportunities to speak English.</p>
                              <footer>Reia Koke, Japan.</footer>
                            </blockquote>
                        </div>
                        <div class="cbp-qtcontent">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-nagore.png" alt="img03" />
                            <blockquote>
                              <p>It has the nicest teachers and a great organisation (like trips, and cookies on Fridays, and parties, also!).</p>
                              <footer>Nagore Crespo, Spain</footer>
                            </blockquote>
                        </div>
                        <div class="cbp-qtcontent">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/Students-jin.png" alt="img04" />
                            <blockquote>
                              <p>The teachers always teach us enthusiastically so I can learn many things from them. The whole staff helps me when I need it, they are always kind and friendly when I visit the office.</p>
                              <footer>Jin Dongkang, South Korea.</footer>
                            </blockquote>
                        </div>

                    </div>
                  
                  </div>

                  <div class="contact-cta">
                    <div>
                        <a href="<?php echo get_site_url();?>/booking-enquiry/">Enquire Now</a>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </section>
          <!-- /.main-content -->


<?php endwhile; ?>
