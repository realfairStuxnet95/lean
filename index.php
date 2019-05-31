<?php 
define("APP_URL", __DIR__.'/learn/App/Views/Utils/classes_loader.php');
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/lean/');
define("VIEWS", ROOT_URL."App/Views/");
require APP_URL;
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Home | topugrade LTD bridge the gap between qualified health professionals who are able to deliver Continuous Professional with top uprwanda </title>
    <?php include VIEWS.'Utils/meta.php'; ?>
    <?php include VIEWS.'Utils/styles.php'; ?>    
  </head>
  
  <body>
    <?php 
    session_start();
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_names'])){
      define("USER_NAMES", $_SESSION['user_names']);
      define("USER_ID", $_SESSION['user_id']);
      define("USER_TYPE", $_SESSION['user_type']);
      $personalInfo=$user->getUserPersonalInfo(USER_ID);
      include VIEWS.'Utils/auth_header.php';
    }else{
      include VIEWS.'Utils/header.php';
    }
    ?>    
    <?php include VIEWS.'Home/home_slider.php'; ?> 
    <?php include VIEWS.'Home/filter_course.php'; ?>    
<section class="padding-y-100">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-md-4">
        <h2 class="mb-4">
          how it works 
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".1s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-pencil-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Coursework
            </h4>
            <p>
              Each course is like an interactive textbook, featuring pre-recorded videos, quizzes, and projects.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-medall"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Help & Support
            </h4>
            <p>
              Connect with thousands of other learners and debate ideas, discuss course material, and get help mastering concepts.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".3s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-flag-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Professional Certificate
            </h4>
            <p>
              Earn official recognition for your work, and share your success with friends, colleagues, and employers.
            </p>
          </div>
        </div>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> 


   
    
<section class="paddingTop-70 paddingBottom-100 bg-light-v3">
  <div class="container">
    <div class="row text-center align-items-center">
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="assets/img/logos/2.png" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="assets/img/logos/1.png" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="assets/img/logos/4.png" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="assets/img/logos/5.png" alt="">
      </div>
    </div> <!-- END row-->
  </div> <!-- END container--> 
</section> 



    
<section class="padding-y-100 bg-cover bg-center jarallax" data-dark-overlay="6" style="background: url(assets/img/1920/550_2.jpg) no-repeat;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-7 mr-auto text-white my-3">
        <h4 class="text-primary font-weight-semiBold">
          enhance you career with topuprwanda.
        </h4>
        <h2>
          Learn a New Skill Online, on Your Time and get a certificate
        </h2>
        <a href="signup.html" class="btn btn-primary mt-3">join for free</a>
      </div>
      <div class="col-lg-4 col-md-5 my-3">
        <div class="card px-4 py-5 text-center">
          <h4 class="text-primary">
            Subscribe to our Newsletter  
          </h4>
          <p class="mb-4">
            Get the latest news and update from topupgrade  
          </p>
         <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-user"></span>
            </div>
            <input type="text" class="form-control border-left-0 pl-0" placeholder="Full Names ">
          </div>
         <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-email"></span>
            </div>
            <input type="email" class="form-control border-left-0 pl-0" placeholder="Email">
          </div>
         
          <button class="btn btn-block btn-primary">Subscribe</button>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container--> 
</section> 





    
        <section class="padding-y-100 bg-light">
          <div class="container">
            <div class="row">
             <div class="col-12 text-center">
                <h2>
                  What Other Said
                </h2>
                <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I have enjoyed doing courses online and helped me to save time and money, this process allowed me to balance my work and I had the capacity to time for myself in learning. 
                    
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/julie.jpeg" alt="">
                  <h6 class="mb-0">
                    Ingabire Marie Julie
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    Biomedical Laboratory Scientist
                  </p>
                </div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I developed a course on "NDT Bobath Approach for this platform, this is a smart way to develop our capacity in continuous professional education for Health Professionals
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ines.jpeg" alt="">
                  <h6 class="mb-0">
                    Ines Musabyemariya 
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    NDT Bobath Specialist, PT
                  </p>
                </div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I am a Physical Therapist, I have had courses online on this platform, it eased my work and gave me access to different specialists, I enjoyed learning on my free time and can recommend this process to my fellow colleagues
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ujeneza.jpeg" alt="">
                  <h6 class="mb-0">
                    UJENEZA Jeniffer 
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    Physical Theapist.
                  </p>
                </div>
              </div>
              
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section>


  
   
    



<section class="padding-y-100 bg-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center text-white">
        <h2>
          Become an Instructor
        </h2>
        <p class="lead my-4">
          Share your knowledge and reach millions of students across the globe. Join the world's largest online learning marketplace.
        </p>
        <a href="become-instructor.html" class="btn btn-white mt-2">become a teacher </a>
      </div>
    </div>
  </div>
</section>
<?php include VIEWS.'Utils/footer.php'; ?>
<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
   
  <script src="assets/js/vendors.bundle.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>
</html>