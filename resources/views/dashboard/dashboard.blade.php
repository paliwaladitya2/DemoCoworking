<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eatio-bootstrap-admin-template.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 11:03:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ITS CoDesk</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    @yield('csscontent')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V469GS1LH2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V469GS1LH2');
</script>
<style>
     div.dataTables_wrapper div.dataTables_length select {
        width: 100%;
        display:inline-block;
    }
    div.dataTables_wrapper div.dataTables_filter input{
        height: auto;
    }
    </style>
    </head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
          
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a class='brand-logo' href='#'>
                
                <img class="logo-compact" src="images/its.png" alt="">
                <img class="brand-title" src="images/its.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
	
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen primary" href="#">
									<svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="22" viewBox="0 0 482.239 482.239" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m0 17.223v120.56h34.446v-103.337h103.337v-34.446h-120.56c-9.52 0-17.223 7.703-17.223 17.223z" fill=""/><path d="m465.016 0h-120.56v34.446h103.337v103.337h34.446v-120.56c0-9.52-7.703-17.223-17.223-17.223z" fill=""/><path d="m447.793 447.793h-103.337v34.446h120.56c9.52 0 17.223-7.703 17.223-17.223v-120.56h-34.446z" fill="" /><path d="m34.446 344.456h-34.446v120.56c0 9.52 7.703 17.223 17.223 17.223h120.56v-34.446h-103.337z" fill=""/></svg>
                                </a>
							</li>
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span>Hello, <strong>{{ Session::get('user')->name }}</strong></span>
									</div>
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class='dropdown-item ai-icon' href='#'>
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a class='dropdown-item ai-icon' href='#'>
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a class='dropdown-item ai-icon' href="{{ Route('logout') }}">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					@if (Session::get('user')->role=='superadmin')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="#" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Manage Users</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ Route('manageuser_superadmin') }}">Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Manage Properties</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ Route('manage_approved_properties') }}">Approved Properties</a></li>
							<li><a href="{{ Route('manage_unapproved_properties') }}">UnApproved Properties</a></li>

							
						</ul>
                    </li>
						
					@endif

					@if (Session::get('user')->role=='propertyadmin')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="#" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Manage Property</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ Route('manageproperty_propertyadmin') }}">Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="#" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Manage Users</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ Route('manageuser_propertyadmin') }}">Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<p class="nav-text">Manage Reviews</p>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{ Route('managereviews') }}">Reviews</a></li>
							
							
						</ul>
                    </li>
						
					@endif
					@if (Session::get('user')->role=='itTeam')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Active Queries</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Resolved Queries</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
						
					@endif
					@if (Session::get('user')->role=='facilityTeam')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Active Queries</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Resolved Queries</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
						
					@endif
					@if (Session::get('user')->role=='client')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" style="display:flex; align-items:center">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href='#'>Dashboard</a></li>
							
						</ul>
                    </li>
						
					@endif
                    
                   
                    
                </ul>
            
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head mb-3 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-0">Dashboard</h2>
						<p class="mb-0">Welcome to ITS CoDesk</p>
					</div>
                    <br>
                    <div class="mr-auto d-none d-lg-block">
                        @yield('content')
                    </div>
					
					
        <!--**********************************
            Content body end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	@yield('jscontent')
	
</body>

<!-- Mirrored from eatio-bootstrap-admin-template.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 11:04:12 GMT -->
</html>