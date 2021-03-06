  <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-lg-6 my-2 text-white">
        <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Courses</a></li>
         
        </ol>
        <h2 class="h1">
          All Courses 
        </h2>
        <p class="lead">
          <span class="text-primary">
            <?php echo count($admin->loadCourses('ACTIVE')); ?>
          </span> courses found
        </p>
       </div>
        <form class="col-lg-5 my-2 ml-auto">
          <div class="input-group bg-white rounded p-1">
            <input type="text" class="form-control border-white" placeholder="What do you want to learn?" required="">
            <div class="input-group-append">
              <button class="btn btn-info rounded" type="submit">
                Search
                <i class="ti-angle-right small"></i>
              </button>
            </div>
          </div>
        </form>
     </div>
    </div>
  </div>