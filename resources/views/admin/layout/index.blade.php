<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/ad/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/ad/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/ad/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/my.css" media="screen">

<title>学生后台管理</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">

    	<!-- Logo Container -->
    	<div id="mws-logo-container">

        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/ad/images/mws-logo.png" alt="mws admin">
			</div>
        </div>

        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">

        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>

                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>

                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>

                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>

                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">

            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="./ad/example/profile.jpg" alt="User Photo">
                </div>

                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    @if(session('user'))
                        <div id="mws-username">
                            Hello, {{session('user')->name}}
                        </div>
                    @else
                        Hello,游客
                    @endif
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            <!--侧边导航栏开始-->
                <ul>

                    <li>
                        <a href="#"><i class="icon-list"></i> 用户模块</a>
                        <ul class='closed'>
                            <li><a href="/logindex">浏览用户</a></li>
                            <li><a href="/logadd">添加用户</a></li>
                        </ul>
                        <a href="#"><i class="icon-file"></i>学生管理系统</a>
                        <ul class='closed'>
                            <li><a href="/select">学生信息</a></li>
                            <li><a href="/add">添加信息</a></li>
                         </ul>
         
                </ul>
            <!--侧边导航栏结束-->
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            <!--主体内容-->
                @if(session('error'))
                    <div class="mws-form-message error">
                        <ul style="list-style:none">
                            <li>{{session('error')}}</li>
                          </ul>
                    </div>
                @endif
                @if(session('success'))
                    <div class="mws-form-message success">
                        <ul style="list-style:none">
                            <li>{{session('success')}}</li>
                          </ul>
                    </div>
                @endif
                @if(count($errors)>0)
                <div class="mws-form-message error">
                    <ul style="list-style:none">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @section('con')
                @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	云畅科技
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/ad/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/ad/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/ad/js/libs/jquery.placeholder.min.js"></script>
    <script src="/ad/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/ad/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/ad/jui/jquery-ui.custom.min.js"></script>
    <script src="/ad/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/ad/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/ad/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ad/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/ad/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script type="text/javascript">
        // $(function() {
        //     $.fn.tabs && $('.mws-tabs').tabs();
        // });
    </script>

</body>
</html>
