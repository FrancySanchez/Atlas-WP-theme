<?php
/*
Template Name: Courses
*/
?>

<?php while (have_posts()) : the_post(); ?>
          


    <div class="page-wrap">
      <div class="inner">
        <div>

          <section class="main-content">

            <?php the_content(); ?>
            <br/>
            <!-- Start of Advanced Custom Fields -->    
                
                <?php 
             
            /*
            *  Loop through a Flexible Content field and display it's content with different views for different layouts
            */
             
            while(the_flexible_field("course_landing_page")): ?>
             
              <?php if(get_row_layout() == "content-area-1"): // layout: Content Area 1 ?>
             
                <div class="full-width">
                  
                  <?php the_sub_field("content-1"); ?>
                </div>
                
              <?php elseif(get_row_layout() == "highlight_box"): // layout: Hightlight Box ?>
                        
                  <div class="guarantee full-width">

                  <?php the_sub_field("highlight_box"); ?>
                  
                  </div>

              <?php elseif(get_row_layout() == "content_area_2"): // layout: Content Area 2 ?>
             
                <div class="full-width">
                  <?php the_sub_field("content_box_2"); ?>
                </div>
                
              <?php elseif(get_row_layout() == "course_boxes_label"): // layout: Course Boxes ?>
                
                <div class="full-width">

                    <div class="post-excerpts">
                      <ul class="course-grid ch-grid">
                        
                      <?php
                      $last = count(get_sub_field('course_boxes_boo'));
                      $x = 1;
                      $rows = get_sub_field('course_boxes_boo');
                      if($rows){
                        foreach($rows as $row) {
                             
                            $imagebg = $row['image'];
                          
                            echo  ' <li class="course-li"><div class="ch-item"><div class="ch-info"' . (($imagebg)?'style="background-image: url(\'' . $imagebg . '\')"':"") . '><div class="ch-overlay"><h3>'.$row['title'].'</h3><p><a href="'.$row['title_url'].'">Read More</a></p></div></div></div></li>';
                            
                        if ($x%2 === 1 && $x==$last) :?>
                        <li class="course-li">
                          <div class="ch-item" >
                            <div class="ch-info">
                            <h3><a href="#"></a></h3>
                            <p><a href="#"></a></p>
                            </div>
                          </div><!-- end panel -->
                        </li>
                        <?php endif; 

                         $x++;
                                                                  
                        }
                      }                        
                     ;?>
                    
                     </ul>
                    </div>
                  </div>
          

              <?php elseif(get_row_layout() == "content_area_3"): // layout: Content Area 3 ?>
             
                <div class="full-width">

                  <?php the_sub_field("content_box_3"); ?>
                </div>
                
              <?php endif; ?>
             
            <?php endwhile; ?>       


            <?php if(is_page(20250)) {
              } else { ?>
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
              <?php } ;?>


          </section>
          <!-- /.main-content -->

<?php endwhile; ?>