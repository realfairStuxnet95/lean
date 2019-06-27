<?php 
$available_courses=$admin->getPublicCourses(6);
?>
<section class="padding-y-5 bg-light-v5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-1">
          Browse Our Top Courses
        </h2>
        <div class="width-3rem height-1 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-12">
        
      <div class="tab-content">
       
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
          <div class="row">
            <?php 
            foreach ($available_courses as $key => $course) {
              $image_url='learn/Courses/'.$course['path'];
              $course_url='course-details?name='.$course['title'].'&key='.$function->generateHash().'&course_id='.$course['id'];
              ?>
              <div class="col-lg-4 col-md-6 marginTop-30">
                <div class="card text-gray overflow-hidden height-100p shadow-v1">
                 <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                  <img class="card-img-top" src="<?php echo $image_url; ?>" alt="">
                  <div class="card-body">
                    <a href="<?php echo $course_url; ?>" class="h5">
                      <?php echo $course['title']; ?>
                    </a>
                    <p class="my-3">
                      <i class="ti-user mr-2"></i>
                      <?php echo $admin->getTeacherField($course['assigned_teacher'],'names'); ?>
                    </p>
                  </div>
                  <div class="card-footer media align-items-center justify-content-between">
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1">
                        <i class="fa fa-book"></i>
                        <?php echo $course['credit_no']; ?>
                      </li>
                    </ul>
                    <h4 class="h5">
                      <span class="text-primary">
                        <?php echo $course['course_price'].' RWF'; ?>
                      </span>
                    </h4>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
      </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
      <div class="col-12 text-center mt-5">
        <a href="courses" class="btn btn-primary">explore all courses  </a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>