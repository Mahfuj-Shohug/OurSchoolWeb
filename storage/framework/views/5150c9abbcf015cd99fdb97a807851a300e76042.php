<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartSchool" />
    <title>BKRAHS Admin</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/logo.png')); ?>">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="<?php echo e(asset('admin/fonts/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('admin/fonts/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/fonts/material-design-icons/material-icon.css')); ?>" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="<?php echo e(asset('admin/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/material/material.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/material_style.css')); ?>">
    <!-- Theme Styles -->
    <link href="<?php echo e(asset('admin/css/theme/light/theme_style.css')); ?>" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="<?php echo e(asset('admin/css/theme/light/style.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/css/responsive.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/css/theme/light/theme-color.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- favicon -->

</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                        <span class="logo-icon material-icons fa-rotate-45">school</span>
                        <span class="logo-default">BKRAHS</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>

                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                        <!-- start language menu -->
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
                                                    Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
                                                    <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
                                                    <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                    <span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo e(asset('admin/img/prof/prof2.jpg')); ?>" class="img-circle"
                                                        alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Sarah Smith </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo e(asset('admin/img/prof/prof3.jpg')); ?>" class="img-circle"
                                                        alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> John Deo </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain
                                                    Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo e(asset('admin/img/prof/prof1.jpg')); ?>" class="img-circle"
                                                        alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Rajesh </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo e(asset('admin/img/prof/prof8.jpg')); ?>" class="img-circle"
                                                        alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Lina Smith </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo e(asset('admin/img/prof/prof5.jpg')); ?>" class="img-circle"
                                                        alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Jacob Ryan </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->

                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="<?php echo e(asset('assets/img/me.JPG')); ?>" />
                                <span class="username username-hide-on-mobile"> <?php echo e(Auth::user()->name); ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><i
                                            class="icon-logout"></i><?php echo e(__('logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </li>
                            </ul>
                        </li>



                        <!-- end manage user dropdown -->

                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="quick-setting slimscroll-style">
                        <ul id="themecolors">
                            <li>
                                <p class="sidebarSettingTitle">Sidebar Color</p>
                            </li>
                            <li class="complete">
                                <div class="theme-color sidebar-theme">
                                    <a href="#" data-theme="white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header Brand color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color logo-theme">
                                    <a href="#" data-theme="logo-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color header-theme">
                                    <a href="#" data-theme="header-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="<?php echo e(asset('assets/img/me.JPG')); ?>" class="img-circle user-img-circle"
                                            alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p> <?php echo e(Auth::user()->name); ?></p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                                Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item start ">
                                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('teacher.index')); ?>" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                                    <span class="title">Teachers section</span> <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                    <span class="title">Students</span><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link "> <span class="title">All
                                                Students</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_student_bootstrap.html" class="nav-link "> <span class="title">Add
                                                Student </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit_student.html" class="nav-link "> <span class="title">Edit
                                                Student</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                                    <span class="title">Classes</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="all_department.html" class="nav-link "> <span class="title">All
                                                Classes</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_department.html" class="nav-link "> <span class="title">Add
                                                Class</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="edit_department.html" class="nav-link "> <span class="title">Edit
                                                Class</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">email</i>
                                    <span class="title">Massages by guest</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">event</i>
                                    <span class="title">Add Events</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="event.html" class="nav-link nav-toggle"> <i
                                        class="material-icons">add_alert</i>
                                    <span class="title">Add Notices</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="event.html" class="nav-link nav-toggle"> <i
                                        class="material-icons">collections</i>
                                    <span class="title">Add Gallery Pic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dvr</i>
                                    <span class="title">UI Elements</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="ui_buttons.html" class="nav-link ">
                                            <span class="title">Slider</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui_sweet_alert.html" class="nav-link ">
                                            <span class="title">Add Speacial speecch</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui_typography.html" class="nav-link ">
                                            <span class="title">Edit Contuct info</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui_typography.html" class="nav-link ">
                                            <span class="title">Add Head Massage</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui_typography.html" class="nav-link ">
                                            <span class="title">Edit About</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->

            <?php echo $__env->yieldContent('content'); ?>

            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end page container -->
            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2021 &copy; Rakhaldebi Hat Asarsha High School
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <!-- start js include path -->
        <script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/popper/popper.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/jquery-blockui/jquery.blockui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
        <!-- bootstrap -->
        <script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
        <!-- Common js-->
        <script src="<?php echo e(asset('admin/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/layout.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/theme-color.js')); ?>"></script>
        <!-- Material -->
        <script src="<?php echo e(asset('admin/plugins/material/material.min.js')); ?>"></script>
   
       
        <!-- end js include path -->
</body>


</html>
<?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/layouts/adminbase.blade.php ENDPATH**/ ?>