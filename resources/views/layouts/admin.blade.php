<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboad</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
			<?php /*?><!-- CSRF Token -->
			<meta name="csrf-token" content="{{ csrf_token() }}">

			<!-- Scripts -->
			<script>
				window.Laravel = <?php echo json_encode([
					'csrfToken' => csrf_token(),
				]); ?>
			</script><?php */?>
		<link rel="shortcut icon" href="{{asset('back-end/images/icon-phum.png')}}" >

		<link rel ="stylesheet" href="{{asset('back-end/js/bootstrap/bootstrap.min.css')}}">

		<link rel ="stylesheet" href="{{asset('back-end/css/style-admin.css')}}">
		<link rel ="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
		<script src="{{asset('back-end/js/dashboard/jquery.min.js')}}"></script>
		<link rel ="stylesheet" href="{{asset('back-end/css/style-add.css')}}">
		

		<?Php /* Datatables */?>
		<!-- <script src="{{ asset('back-end/js/datatable/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('back-end/js/datatable/dataTables.bootstrap.min.js') }}"></script> -->
		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
		
		<?Php /* tinymce */?>
		<script src="{{url('back-end/js/tinymce/tinymce.min.js')}}"></script>

<!--
		<script type="text/javascript">
		window.onload = function() {
		   $('body.sidebar-mini').addClass('sidebar-collapse');
		};</script>
-->

	</head>
<body class="hold-transition skin-blue sidebar-mini" id="main">

	<div class="wrapper">
		<header class="main-header">
			 <a href="" class="logo"> 
			   <span class="logo-mini">ADM</span>
			   <span class="logo-lg">Admin</span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<img src="{{url('back-end/images/hamburger.png')}}"/>
				</a>


				<div class="navbar-custom-menu hidden-xs">
					<ul class="nav navbar-nav">
			  	
				  	<li class="dropdown language-switch">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<img src="{{url('back-end/images/en.png')}}" class="position-left" alt="">
							English
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<div class="arrow-border"></div>
							<li><a href="" class="deutsch"><img src="{{url('back-end/images/en.png')}}"> English</a></li>
							<li><a href="" class="english"><img src="{{url('back-end/images/kh.png')}}"> Khmer</a></li>
						</ul>
					</li>

					  <!-- messages -->
						<li class="dropdown messages-menu mess">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <i class="fa fa-envelope-o"></i>
							  <span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<div class="arrow-border"></div>
								<li class="header">You have 4 messages</li>
								  <li>
									<!-- inner menu: contains the actual data -->
										<ul class="menu">

											<li>
												<a href="#">
													<div class="pull-left">
														<img src="http://placehold.it/160x160&text" class="img-circle" alt="User Image">
													</div>
													<h4>Reviewers<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="http://placehold.it/160x160&text" class="img-circle" alt="User Image">
													</div>
													<h4>Reviewers<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="http://placehold.it/160x160&text" class="img-circle" alt="User Image">
													</div>
													<h4>Reviewers<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="http://placehold.it/160x160&text" class="img-circle" alt="User Image">
													</div>
													<h4>Reviewers<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>

										</ul>
								  </li>
							  <li class="footer-mes"><a href="#">See All Messages</a></li>
							</ul>
						  </li>

						<!-- notifications -->
						<li class="dropdown notifications-menu mess">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<div class="arrow-border"></div>
								<li class="header">You have 10 notifications</li>
									<li>
										<ul class="menu">
											<li>
												<a href="#"><i class="fa fa-users text-aqua"></i> 5 new members joined today</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-users text-red"></i> 5 new members joined</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-shopping-cart text-green"></i> 25 sales made</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-user text-red"></i> You changed your username</a>
											</li>
										</ul>
									</li>
									<li class="footer-mes"><a href="#">View all</a>
								</li>
							</ul>
						</li>

					   <!-- user profile -->
						<li class="dropdown user user-menu">
							<a href="" class="dropdown-toggle1" data-toggle="dropdown" >
							   <img src="http://via.placeholder.com/150x150" class="img-circle" width="25px" height="25px">
							   {{auth::user()->name}}
							</a>
							<ul class="dropdown-menu">
							   <div class="arrow-border"></div>
								<li class="user-header">
									<img src="http://via.placeholder.com/150x150" class="img-circle">
									<p>  {{auth::user()->name}} </p>
								</li>
								<div class="col-sm-12 groups-management">
									<li class="edite-profile">
										<a href=""><span class="fa fa-edit"></span>Edit profile</a>
									</li>
									<li class="sign-out">
										<a href="{{url('logout')}}"><span class="fa fa-sign-out"></span>Logout</a>
									</li>
								</div>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header><!-- header -->






		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="http://via.placeholder.com/150x150" class="img-circle">
					</div>
					<div class="pull-left info">
						<p>{{auth::user()->name}}</p>
					</div>
				</div>


				<ul class="sidebar-menu">
					<li class="treeview">
						<a href="">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard </span>
							<i class="fa fa-angle-right pull-right"></i>
						</a>
					</li>
					
					<li class="treeview">
						<a>
							<i class="fa fa-users"></i>
							<span>Users Management </span>
							<i class="fa fa-angle-right pull-right"></i>
						</a>
						<ul class="treeview-menu" id="treeopen">
							@permission('role-list')
							<li><a  href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>List All Role </a></li>
							@endpermission
							@permission('user-list')
							<li><a  href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>List All Users </a></li>
							@endpermission
						</ul>
					</li>


					
				</ul>


			</section>
		</aside><!-- main-sidebar -->
	</div><!-- wrapper -->


	 @yield('content')



<div class="wrapper">
	<div class="footer main-footer">
		<div class="col-sm-12">
			<span class="pull-left">
			Develop by: Mr, Tuy Pheaktra
			</span>
			<span class="pull-right hidden-xs version-system">Version 0.1</span>
		</div>
	</div>
</div>



<script src="{{asset('back-end/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('back-end/js/dashboard/app.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // JQuery for active menu
        $(function(){
            var asset = window.location.href;
            $(".treeview a").each(function() {

                if(asset == (this.href)) {
                    $(this).closest(".treeview").addClass("treeview active");
                    $(this).closest(".treeview-menu li a").addClass("active-page");
                }
            });
        });

    });

    $('#datatable').dataTable( {
			"responsive": true,
			//"paging": false,
			"bInfo" : false,
			"order": [[ 0, "desc" ]],
			 "columnDefs": [ {
				//"targets": [2,3],
				"orderable": false
				} ],
		} );
</script>

</body>
</html>
