<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>KOPERASI</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							KOPERASi
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									{{Auth::user()->name}}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                    <i class="ace-icon fa fa-power-off"></i>  Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="/home">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
          <li class="">
						<a href="/users">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Users </span>
						</a>
					</li>
          <li class="">
						<a href="/anggota">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Anggota </span>
						</a>
					</li>
          <li class="">
						<a href="/petugas">
							<i class="menu-icon fa fa-user-plus"></i>
							<span class="menu-text"> Petugas </span>
						</a>
					</li>
					<li class="">
						<a href="/simpanan">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> Simpanan </span>
						</a>
					</li>
					<li class="">
						<a href="/pinjaman">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> Pinjaman </span>
						</a>
					</li>
					<li class="">
						<a href="/angsuran">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> Angsuran </span>
						</a>
					</li>

				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
        <div class="space-6"></div>
        <div class="col-sm-12 infobox-container">
          <div class="infobox infobox-green">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
              <span class="infobox-data-number">32</span>
              <div class="infobox-content">Users</div>
            </div>
          </div>

          <div class="infobox infobox-blue">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-user-plus"></i>
            </div>

            <div class="infobox-data">
              <span class="infobox-data-number">11</span>
              <div class="infobox-content">Petugas</div>
            </div>
          </div>

          <div class="infobox infobox-pink">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-user"></i>
            </div>

            <div class="infobox-data">
              <span class="infobox-data-number">8</span>
              <div class="infobox-content">Anggota</div>
            </div>
          </div>

          <div class="infobox infobox-red">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-flask"></i>
            </div>

            <div class="infobox-data">
              <span class="infobox-data-number">7</span>
              <div class="infobox-content">experiments</div>
            </div>
          </div>
          <div class="space-6"></div>
        </div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
