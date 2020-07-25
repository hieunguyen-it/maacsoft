<?php
    if (!defined("TEMPLATE")) {
        die("Bạn không có quyền truy cập!") ;
    }
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>MAAC ANALYSIS - Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

		<!-- Chartist css -->
		<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css" />

	</head>

	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper pinned">
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.php" class="logo">
						<img src="img/logo.png" alt="Wafi Admin Dashboard" />
					</a>
					<a href="index.php" class="logo-sm">
						<img src="img/logo-sm.png" alt="Wafi Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">General</li>
							<li class="sidebar-dropdown active">
								<a href="#">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Báo cáo</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="index.php?page_layout=dashboard">Dashboard tổng hợp</a>
										</li>
										<li>
											<a href="index.php?page_layout=project">Quản lý dự án</a>
										</li>
										<li>
											<a href="index.php?page_layout=sales">Quản trị bán hàng</a>
										</li>
										<li>
											<a href="index.php?page_layout=crm">Báo cáo CRM</a>
										</li>
										<li>
											<a href="index.php?page_layout=ecommerce">Báo cáo bán hàng</a>
										</li>

										<li>
											<a href="index.php?page_layout=smart">Báo cáo thông minh</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="chat.php">
									<i class="icon-message-circle"></i>
									<span class="menu-text">Ứng dụng chat</span>
								</a>
							</li>
							<li class="sidebar-dropdown">

							</li>
							<li>
								<a href="contacts.php">
									<i class="icon-phone1"></i>
									<span class="menu-text">Danh sách nhân sự</span>
								</a>
							</li>
							<li>
								<a href="documents.php">
									<i class="icon-documents"></i>
									<span class="menu-text">Lưu trữ tài liệu</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-layout"></i>
									<span class="menu-text">Giao diện</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="default-layout.php">Giao diện mặc định</a>
										</li>
										<li>
											<a href="default-dark-layout.php">Giao diện Dark</a>
										</li>
										<li>
											<a href="fixed-layout.php">Giao diện cố định</a>
										</li>
										<li>
											<a href="fixed-layout-dark.php">Giao diện cố định Dark</a>
										</li>
										<li>
											<a href="slim-sidebar.php">Giao diện slim</a>
										</li>
										<li>
											<a href="slim-sidebar-dark.php">Giao diện Slim Dark</a>
										</li>
										<li>
											<a href="card-options.php">Tuỳ chọn thẻ</a>
										</li>
										<li>
											<a href="drag-drop-cards.php">Thẻ kéo và thả</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-book-open"></i>
									<span class="menu-text">Trang</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="account-settings.php">Cài đặt Account</a>
										</li>
										<li>
											<a href="timeline.php">Timeline</a>
										</li>
									</ul>
								</div>
							</li>

							<li>
								<a href="user-profile.php">
									<i class="icon-user1"></i>
									<span class="menu-text">Hồ sơ người dùng</span>
								</a>
							</li>
							<li>
								<a href="tasks.php">
									<i class="icon-check-circle"></i>
									<span class="menu-text">Tasks công việc</span>
								</a>
							</li>
							<li class="header-menu">Forms</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Nhập liệu</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="form-inputs.php">Form nhập liệu</a>
										</li>
										<li>
											<a href="input-groups.php">Nhập liệu nhóm</a>
										</li>
										<li>
											<a href="check-radio.php">Check Boxes</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-file-text"></i>
									<span class="menu-text">Forms liên hệ</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="contact.php">Contact Form</a>
										</li>
										<li>
											<a href="contact2.php">Contact Form #2</a>
										</li>
										<li>
											<a href="contact3.php">Contact Form #3</a>
										</li>
										<li>
											<a href="contact4.php">Contact Form #4</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="bs-select.php">
									<i class="icon-pocket"></i>
									<span class="menu-text">BS Select</span>
								</a>
							</li>
							<li>
								<a href="editor.php">
									<i class="icon-edit-3"></i>
									<span class="menu-text">Editor</span>
								</a>
							</li>
							<li>
								<a href="input-masks.php">
									<i class="icon-eye-off"></i>
									<span class="menu-text">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="input-tags.php">
									<i class="icon-terminal"></i>
									<span class="menu-text">Input Tags</span>
								</a>
							</li>
							<li>
								<a href="range-sliders.php">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Range Sliders</span>
								</a>
							</li>
							<li>
								<a href="wizard.php">
									<i class="icon-triangle"></i>
									<span class="menu-text">Wizards</span>
								</a>
							</li>
							<li class="header-menu">UI Elements</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-list2"></i>
									<span class="menu-text">Accordions</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="accordion.php">Accordion</a>
										</li>
										<li>
											<a href="accordion-icons.php">Accordion Icons</a>
										</li>
										<li>
											<a href="accordion-arrows.php">Accordion Arrows</a>
										</li>
										<li>
											<a href="accordion-lg.php">Accordion Large</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-disc"></i>
									<span class="menu-text">Buttons</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="buttons.php">Buttons</a>
										</li>
										<li>
											<a href="button-groups.php">Button Groups</a>
										</li>
										<li>
											<a href="dropdowns.php">Dropdowns</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="carousel.php">
									<i class="icon-toll"></i>
									<span class="menu-text">Carousels</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">Components</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="jumbotron.php">Jumbotron</a>
										</li>
										<li>
											<a href="labels-badges.php">Labels &amp; Badges</a>
										</li>
										<li>
											<a href="list-items.php">List Items</a>
										</li>
										<li>
											<a href="pagination.php">Paginations</a>
										</li>
										<li>
											<a href="progress.php">Progress Bars</a>
										</li>
										<li>
											<a href="pills.php">Pills</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-image"></i>
									<span class="menu-text">Gallery</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="gallery.php">Gallery Slider</a>
										</li>
										<li>
											<a href="gallery2.php">Gallery Thumbnail</a>
										</li>
										<li>
											<a href="gallery3.php">Gallery Hover</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">Grid</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="grid.php">Grid</a>
										</li>
										<li>
											<a href="grid-doc.php">Grid Doc</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="icons.php">
									<i class="icon-timer"></i>
									<span class="menu-text">Icons</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-image"></i>
									<span class="menu-text">Images</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="avatars.php">Avatars</a>
										</li>
										<li>
											<a href="media-objects.php">Media Objects</a>
										</li>
										<li>
											<a href="images.php">Thumbnails</a>
										</li>
										<li>
											<a href="text-avatars.php">Text Avatars</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="modals.php">
									<i class="icon-credit-card"></i>
									<span class="menu-text">Modals</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-bell"></i>
									<span class="menu-text">Notifications</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="bootstrap-alerts.php">Default Alerts</a>
										</li>
										<li>
											<a href="custom-alerts.php">Custom Alerts</a>
										</li>
										<li>
											<a href="toasts.php">Toasts</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="spinners.php">
									<i class="icon-circular-graph"></i>
									<span class="menu-text">Spinners</span>
								</a>
							</li>
							<li>
								<a href="tooltips.php">
									<i class="icon-change_history"></i>
									<span class="menu-text">Tooltips</span>
								</a>
							</li>
							<li>
								<a href="typography.php">
									<i class="icon-sort_by_alpha"></i>
									<span class="menu-text">Typography</span>
								</a>
							</li>
							<li class="header-menu">Tables</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Tables</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="custom-tables.php">Custom Tables</a>
										</li>
										<li>
											<a href="default-table.php">Default Table</a>
										</li>
										<li>
											<a href="table-bordered.php">Table Bordered</a>
										</li>
										<li>
											<a href="table-hover.php">Table Hover</a>
										</li>
										<li>
											<a href="table-striped.php">Table Striped</a>
										</li>
										<li>
											<a href="table-small.php">Table Small</a>
										</li>
										<li>
											<a href="table-colors.php">Table Colors</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="data-tables.php">
									<i class="icon-border_all"></i>
									<span class="menu-text">Data Tables</span>
								</a>
							</li>
							<li class="header-menu">Graphs &amp; Maps</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Apex Graphs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="area-graphs.php">Area Charts</a>
										</li>
										<li>
											<a href="bubble.php">Bubble Graphs</a>
										</li>
										<li>
											<a href="bar-graphs.php">Bar Charts</a>
										</li>
										<li>
											<a href="candlestick.php">Candlestick</a>
										</li>
										<li>
											<a href="column-graphs.php">Column Charts</a>
										</li>
										<li>
											<a href="donut-graphs.php">Donut Charts</a>
										</li>
										<li>
											<a href="line-graphs.php">Line Charts</a>
										</li>
										<li>
											<a href="mixed-graphs.php">Mixed Charts</a>
										</li>
										<li>
											<a href="pie-graphs.php">Pie Charts</a>
										</li>
										<li>
											<a href="radial-chart.php">Radial Graph</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="morris-graphs.php">
									<i class="icon-tonality"></i>
									<span class="menu-text">Morris Graphs</span>
								</a>
							</li>
							<li>
								<a href="flot-graphs.php">
									<i class="icon-pie_chart_outlined"></i>
									<span class="menu-text">Flot Graphs</span>
								</a>
							</li>
							<li>
								<a href="c3-graphs.php">
									<i class="icon-activity"></i>
									<span class="menu-text">C3 Graphs</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-map2"></i>
									<span class="menu-text">Maps</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="vector-maps.php">Vector Maps</a>
										</li>
										<li>
											<a href="google-maps.php">Google Maps</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="header-menu">Extra</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-airplay"></i>
									<span class="menu-text">Login</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="login.php">Login</a>
										</li>
										<li>
											<a href="signup.php">Signup</a>
										</li>
										<li>
											<a href="forgot-pwd.php">Forgot Password</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-mail"></i>
									<span class="menu-text">Subscribe</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="subscribe.php">Subscribe 1</a>
										</li>
										<li>
											<a href="subscribe2.php">Subscribe 2</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-alert-triangle"></i>
									<span class="menu-text">Error Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="error.php">404</a>
										</li>
										<li>
											<a href="error2.php">505</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="coming-soon.php">
									<i class="icon-schedule"></i>
									<span class="menu-text">Coming Soon</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-box"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Tasks (05)
									</div>	
									<ul class="header-tasks">
										<li>
											<p>#48 - Dashboard UI<span>90%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
													<span class="sr-only">90% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#95 - Alignment Fix<span>60%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													<span class="sr-only">60% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#7 - Broken Button<span>40%</span></p>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Zyan Ferris</span>
									<span class="avatar">ZF<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user.png" alt="Admin Template">
											</div>
											<h5>Zyan Ferris</h5>
											<p>Admin</p>
										</div>
										<a href="user-profile.php"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.php"><i class="icon-settings1"></i> Account Settings</a>
										<a href="logout.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Dashboards</li>
						<li class="breadcrumb-item active">Admin Dashboard</li>
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
								<i class="icon-print"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
								<i class="icon-cloud_download"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<?php
				// dashboard
				if (isset($_GET["page_layout"])) {
					switch ($_GET["page_layout"]) {
						case 'project':include_once("dashboard/project-dashboard.php") ;break;
						case 'sales':include_once("dashboard/sales-dashboard.php") ;break;
						case 'crm':include_once("dashboard/crm-dashboard.php") ;break;
						case 'ecommerce':include_once("dashboard/ecommerce-dashboard.php") ;break;
						case 'smart':include_once("dashboard/smart-dashboard.php") ;break;
						case 'dashboard':include_once("dashboard/dashboard.php") ;break;
						
					}
				}else {
					include_once("dashboard/dashboard.php") ;
				}
				

				
				?>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Chartist JS -->
		<script src="vendor/chartist/js/chartist.min.js"></script>
		<script src="vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="vendor/chartist/js/custom/threshold/threshold.js"></script>
		<script src="vendor/chartist/js/custom/bar/bar-chart-orders.js"></script>

		<!-- jVector Maps -->
		<script src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="vendor/jvectormap/world-mill-en.js"></script>
		<script src="vendor/jvectormap/gdp-data.js"></script>
		<script src="vendor/jvectormap/custom/world-map-markers2.js"></script>

		<!-- Rating JS -->
		<script src="vendor/rating/raty.js"></script>	
		<script src="vendor/rating/raty-custom.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
    
</html>
