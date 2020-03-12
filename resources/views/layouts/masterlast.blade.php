<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminbag-v1.3.bittyfox.com/default/light/layout_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Sep 2018 16:48:45 GMT -->
<head>
<meta charset="utf-8">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin-Bag | responsive  layout html  </title>
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- slimscroll -->
<link href="assets/css/jquery.slimscroll.css" rel="stylesheet">
<!-- Fontes -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/simple-line-icons.css" rel="stylesheet">
<!-- all buttons css -->
<link href="assets/css/buttons.css" rel="stylesheet">
<!-- animate css -->
<link href="assets/css/animate.css" rel="stylesheet">
<!-- adminbag main css -->
<link href="assets/css/main.css" rel="stylesheet">
<!-- light theme css -->
<link href="assets/css/light.css" rel="stylesheet">
<!-- media css for responsive  -->
<link href="assets/css/main.media.css" rel="stylesheet">
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>
<body>
    <div id="app">
<div class="page-header navbar">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner ">
    <!-- BEGIN LOGO -->
    <div class="page-logo"> <a href="index.html"> <img class="logo-default" alt="logo" src="assets/images/logo.png"> </a> </div>
    <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div>
    <!-- END LOGO -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info" > <i class="fa fa-envelope"></i> <span class="badge badge-danger ">6</span> </a>
          <ul class="dropdown-menu dropdown-messages menuBig">
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="assets/images/teem/a10.jpg" class="img-circle" alt="image"> </a>
                <div class="media-body"> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>. <br>
                  <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="assets/images/teem/a4.jpg" class="img-circle" alt="image"> </a>
                <div class="media-body "> <small class="pull-right text-navy">5h ago</small> <strong> Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>. <br>
                  <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="assets/images/teem/a3.jpg" class="img-circle" alt="image"> </a>
                <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                  <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block"> <a href="mailbox.html"> <i class="fa fa-envelope"></i> <strong>Read All Messages</strong> </a> </div>
            </li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info" > <i class="fa fa-bell"></i> <span class="badge badge-primary">8</span> </a>
          <ul class="dropdown-menu dropdown-alerts menuBig">
            <li> <a href="mailbox.html">
              <div> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <span class="pull-right text-muted small">4 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="profile.html">
              <div> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="grid_options.html">
              <div> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block"> <a href="mailbox.html"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
            </li>
          </ul>
        </li>
        <!-- START USER LOGIN DROPDOWN -->
<li class="dropdown dropdown-user"> <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown"  class="dropdown-toggle" href="javascript:;"> <img src="assets/images/teem/a10.jpg" class="img-circle" alt=""> <span class="username username-hide-on-mobile"> Susan Wenscombe</span> <i class="fa fa-angle-down"></i> </a>
          <ul class="dropdown-menu dropdown-menu-default">
            <li> <a href="profile.html"> <i class="icon-user"></i> My Profile </a>

</li>
<li>
<a href="profile_2.html"> <i class="icon-user"></i> Profile-2 </a> </li>
            <li> <a href="calendar.html"> <i class="icon-calendar"></i> My Calendar </a> </li>
            <li> <a href="mailbox.html"> <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger"> 3 </span> </a> </li>
            <li> <a href="dashboard2.html"> <i class="icon-rocket"></i> My Tasks <span class="badge badge-success"> 7 </span> </a> </li>
            <li class="divider"> </li>
            <li> <a href="lockscreen.html"> <i class="icon-lock"></i> Lock Screen </a> </li>
            <li> <a href="login.html"> <i class="icon-key"></i> Log Out </a> </li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<div class="clearfix"> </div>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar">
      <ul class="page-sidebar-menu  page-header-fixed ">
        <li class="sidebar-search-wrapper">
          <!-- START RESPONSIVE SEARCH FORM -->
          <form class="sidebar-search  " action="http://adminbag-v1.3.bittyfox.com/default/light/search_results.html" method="POST">
            <a href="javascript:;" class="remove"> <i class="icon-close"></i> </a>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i class="icon-magnifier"></i> </a> </span> </div>
          </form>
          <!-- END RESPONSIVE SEARCH FORM -->
        </li>
        <li class="nav-item"> <router-link class="nav-link" to="/dashboard"> <i class="fa fa-flash"></i> <span class="title">Dashboard</span> </router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/users"> <i class="fa fa-flash"></i> <span class="title">Staff</span> </router-link></li>
      </ul>
    </div>
  </div>
  <!-- End page sidebar wrapper -->
  <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      

      <router-view></router-view>

      
<!-- start footer -->
<div class="footer">
        <div class="pull-right">
          <ul class="list-inline">
            <li><a title="" href="index.html">Dashboard</a></li>
            <li><a title="" href="mailbox.html"> Inbox </a></li>
            <li><a title="" href="blog.html">Blog</a></li>
            <li><a title="" href="contacts.html">Contacts</a></li>
          </ul>
        </div>
        <div> <strong>Copyright</strong> AdminBag Company &copy; 2017 </div>
      </div>
    </div>
  </div>
</div>
<!-- Go top -->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!-- Go top -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/vendor/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="assets/js/vendor/jquery.slimscroll.js"></script>
<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script src="js/app.js"></script>
</div>
</body>

<!-- Mirrored from adminbag-v1.3.bittyfox.com/default/light/layout_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Sep 2018 16:48:45 GMT -->
</html>
