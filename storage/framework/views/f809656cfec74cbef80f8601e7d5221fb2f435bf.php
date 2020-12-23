<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BAMAN KUMAR ADARSHA HIGH SCHOOL</title>
    <link rel = "icon" type = "image/png" href = "<?php echo e(asset('assets/img/logo.png')); ?>"> 
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles-merged.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>"> 
  </head>
  <body>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Baman Kumar, Atwari, Panchagrah</span>
              <span><i class="icon-phone2"></i>+880172-5738591</span>
              <span><i class="icon-mail"></i>bkrahs@gmail.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="/studentlogin" class="btn btn-primary">Student LogIn</a></li>
                <li><a href="/teacherlogin" class="btn btn-primary">Teacher LogIn</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="<?php echo e(asset('assets/img/logonav.png')); ?>" width="160" height="50" alt="logo">
            </a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class=" <?php echo e('/'== request()->path() ? 'active' : ''); ?> "><a href="/">Home</a></li>
              <li class=" <?php echo e('teachers'== request()->path() ? 'active' : ''); ?> "><a href="/teachers">Teachers</a></li>
              <li class=" <?php echo e('events'== request()->path() ? 'active' : ''); ?>  "><a href="/events">Events</a></li>
              <li class=" <?php echo e('notices'== request()->path() ? 'active' : ''); ?>  "><a href="/notices">Notice</a></li>
              <li class=" <?php echo e('contact'== request()->path() ? 'active' : ''); ?>  "><a href="/contact">Contact</a></li>
              <li class=" <?php echo e('gallery'== request()->path() ? 'active' : ''); ?>  "><a href="/gallery">Gallery</a></li>
              <li class=" <?php echo e('aboutus'== request()->path() ? 'active' : ''); ?>  "><a href="/aboutus">About Us</a></li>
            </ul>
          </div>
        </div>
      </nav> 

   
     <?php echo $__env->yieldContent('content'); ?>


      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Baman Kumar Rakhaldebi Hat Adarsha High School </h3>
                <p>Class VI to Class X</p>
                <P>Official Application Comming Soon.....</P>
                <h3>Social Links</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="<?php echo e(route('admin.login')); ?>" class="btn btn-primary">Admin Login</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Baman Kumar, Atwari, Panchagarh, Rangpur, Bangladesh</span></li>
                  <li><i class="icon-mail"></i><span>bkrahs@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>+8801725-738591</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2020 Baman Kumar Rakhaldebi Hat Adarsha High School All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by Md. Mahfuj Hasan Shohug</p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="<?php echo e(asset('assets/js/scripts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>


  </body>
</html><?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/layouts/base.blade.php ENDPATH**/ ?>