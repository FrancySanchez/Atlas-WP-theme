<?php
/*
Template Name: Photos - Adults
*/
?>

<?php while (have_posts()) : the_post(); ?>
          


    <div class="page-wrap">
      <div class="inner">

        <div class="row">

        <!-- Start of Advanced Custom Fields -->    
    
                <?php 
             
            while(the_flexible_field("course_landing_page")): ?>

             
              <?php if(get_row_layout() == "content-area-1"): // layout: Content Area 1 ?>
             
                <div>
                  
                  <?php the_sub_field("content-1"); ?>
                </div>
             
              <?php elseif(get_row_layout() == "highlight_box"): // layout: Hightlight Box ?>
             
                <div id="highlightbox">
                  <?php the_sub_field("highlight_box"); ?>
                </div>
             
              <?php elseif(get_row_layout() == "content_area_2"): // layout: Content Area 2 ?>
             
                <div>
                  <?php the_sub_field("content_box_2"); ?>
                </div>
                
              <?php elseif(get_row_layout() == "course_boxes_label"): // layout: Course Boxes ?>
                
                  <?php
                  $rows = get_sub_field('course_boxes_boo');
                    if($rows)
                    {
                      foreach($rows as $row)
                        {
                          echo  '<div class="col-xs-12 col-md-6"><div class="panel"><a href="'.$row['title_url'].'"><h2>'.$row['title'].'</h2></a><img src="'.$row['image'].'" /><p>'.$row['content'].'</p></div></div>';
                        }
                    }
                  ?>

              <?php elseif(get_row_layout() == "content_area_3"): // layout: Content Area 3 ?>
             
                <div>
                  <?php the_sub_field("content_box_3"); ?>
                </div>

                
              <?php endif; ?>
             
            <?php endwhile; ?>       

            </div><!-- row -->


        </div>

    </div>

  </section>
  <!-- /.main-content -->


<?php endwhile; ?>
