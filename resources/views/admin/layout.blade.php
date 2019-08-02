<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="{{ url('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="{{ url('admin/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('admin/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="{{ url('admin/assets/css/fontawesome/font-awesome.min.css') }}">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="{{ url('admin/assets/js/libs/jquery-1.10.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>

	<script type="text/javascript" src="{{ url('admin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/libs/lodash.compat.min.js') }}"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="{{ url('admin/plugins/touchpunch/jquery.ui.touch-punch.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/event.swipe/jquery.event.move.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/event.swipe/jquery.event.swipe.js')}}"></script>

	<!-- General -->
	<script type="text/javascript" src="{{ url('admin/assets/js/libs/breakpoints.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/respond/respond.min.js')}}"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="{{ url('admin/plugins/cookie/jquery.cookie.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/slimscroll/jquery.slimscroll.horizontal.min.js')}}"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="{{ url('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/flot/jquery.flot.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/flot/jquery.flot.resize.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/flot/jquery.flot.time.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/flot/jquery.flot.growraf.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

	<script type="text/javascript" src="{{ url('admin/plugins/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>

	<script type="text/javascript" src="{{ url('admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

	<!-- Noty -->
	<script type="text/javascript" src="{{ url('admin/plugins/noty/jquery.noty.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/noty/layouts/top.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/noty/themes/default.js')}}"></script>

	<!-- Forms -->
	<script type="text/javascript" src="{{ url('admin/plugins/uniform/jquery.uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/plugins/select2/select2.min.js')}}"></script>

	<!-- App -->
	<script type="text/javascript" src="{{ url('admin/assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/plugins.form-components.js')}}"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="{{ url('admin/assets/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/demo/pages_calendar.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/demo/charts/chart_filled_blue.js')}}"></script>
	<script type="text/javascript" src="{{ url('admin/assets/js/demo/charts/chart_simple.js')}}"></script>
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="{{ url('admin/assets/img/logo.png') }}" alt="logo" style="width: 30px;" />
				<strong>ME</strong>LON
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username">{{ $currentUser }}</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="icon-user"></i>Tài khoản</a></li>
						<li><a href="pages_calendar.html"><i class="icon-key"></i>Đổi mật khẩu</a></li>
						<li class="divider"></li>
						<li><a href="{{ 'http://' . getenv("HTTP_HOST") . '/baocaotuan/public/logout' }}"><i class="icon-signout"></i>Đăng xuất</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li class="current">
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
				</ul>
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

			
				<!-- Search Results -->
				<div class="sidebar-search-results">

					<i class="icon-remove close"></i>
					<!-- Documents -->
					<div class="title">
						Documents
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-info"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message"><strong>John Doe</strong> received $1.527,32</span>
									<span class="time">finances.xls</span>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-success"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">My name is <strong>John Doe</strong> ...</span>
									<span class="time">briefing.docx</span>
								</div>
							</a>
						</li>
					</ul>
					<!-- /Documents -->
					<!-- Persons -->
					<div class="title">
						Persons
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-danger"><i class="icon-female"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">Jane <strong>Doe</strong></span>
									<span class="time">21 years old</span>
								</div>
							</a>
						</li>
					</ul>
				</div> <!-- /.sidebar-search-results -->

				<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="{!! url('admin/home') !!}">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="{!! url('admin/list') !!}">
							<i class="icon-user"></i>
							User
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-cog"></i>
							Hệ thống
						</a>
					</li>
				</ul>

				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Dashboard</h3>
						<span>Good morning, John!</span>
					</div>

					<!-- Page Stats -->
					<ul class="page-stats">
						<li>
							<div class="summary">
								<span>New orders</span>
								<h3>17,561</h3>
							</div>
							<div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
							<!-- Use instead of sparkline e.g. this:
							<div class="graph circular-chart" data-percent="73">73%</div>
							-->
						</li>
						<li>
							<div class="summary">
								<span>My balance</span>
								<h3>$21,561.21</h3>
							</div>
							<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
						</li>
					</ul>
					<!-- /Page Stats -->
				</div>
				<!-- /Page Header -->

				@section('content')
				@show

				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>