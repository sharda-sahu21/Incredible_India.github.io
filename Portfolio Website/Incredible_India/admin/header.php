<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Continue with admin panel content
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin panel</title>
	<!-- -------------font awesom link-------------- -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
 -->
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="canonical" href="https://demo-basic.adminkit.io/icons-feather.html" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- --------------bootstrap-------------- -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body >
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index_admin.php">
          <span class="align-middle">Admin Panel</span>
          
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index_admin.php">
			              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
			            </a>
					</li>

	 				<li class="button-dropdown">
							<a class="sidebar-link" href="show_con.php">
				              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Contact list</span>
				            </a>       
					</li>
	 

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="slidebar-item dropdown">

					   <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="coffee"></i>  
					    <span class="align-middle">Logo</span>
					   </a>
					   <div class="dropdown-menu ">          
						    <a class="dropdown-item" href="addlogo.php"> Insert Logo</a>
					    	<a class="dropdown-item" href="show_logo.php">View Logo</a>
					    </div>

					</li>

					<li class="slidebar-item dropdown">

					   <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="video"></i>  
					    <span class="align-middle">Video</span>
					   </a>
					   <div class="dropdown-menu ">          
						    <a class="dropdown-item" href="addvideo.php"> Insert Video</a>
					    	<a class="dropdown-item" href="show_video.php">View Video</a>
					    </div>

					</li>
			

					<li class="slidebar-item dropdown">

			           <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="align-left"></i>
			           <span class="align-middle">About</span>
			           </a>
			            <div class="dropdown-menu ">
			                <a class="dropdown-item" href="about.php"> Insert About </a>
			                <a class="dropdown-item" href="show_about.php">View About</a>
			            </div>
			        </li>


					<li class="slidebar-item dropdown">
			             <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="grid"></i>
			             <span class="align-middle">Cards</span>
			             </a>
			             <div class="dropdown-menu ">
			                <a class="dropdown-item" href="addcard.php"> Insert Cards</a>
			                <a class="dropdown-item" href="show_card.php"> View Cards</a>
			             </div>
		           </li>


					<li class="slidebar-item dropdown">
			             <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="coffee"></i>
			             <span class="align-middle">Icons</span>
			             </a>
			             <div class="dropdown-menu ">
			                <a class="dropdown-item" href="icon.php"> Insert Icons</a>     
			                <a class="dropdown-item" href="icon_show.php"> View Icons</a>
			              
			              </div>
			         </li>
					
					 <li class="slidebar-item dropdown">
			             <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="square"></i>
			              <span class="align-middle">Form</span>
			             </a>
			             <div class="dropdown-menu ">
			                <a class="dropdown-item" href="addform.php"> Insert Form</a>  
			                <a class="dropdown-item" href="showform.php"> View Form</a>
						</div>
		          	</li>

						

					<li class="sidebar-header">
							Plugins & Addons
					</li>


					<li class="slidebar-item dropdown">
			             <a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
			                 <i class="align-middle" data-feather="bar-chart-2"></i>
			                <span class="align-middle">QR Code</span>
			             </a>
			             <div class="dropdown-menu ">
			                <a class="dropdown-item" href="addQR.php"> Insert QR</a>
			                <a class="dropdown-item" href="showQR.php"> View QR</a>
			              
			             </div>
			          </li>

		
					<li class="slidebar-item dropdown">
						<a class=" sidebar-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
			              <i class="align-middle" data-feather="map"></i> 
			              <span class="align-middle">Map</span>
			            </a>
			             <div class="dropdown-menu ">
			                <a class="dropdown-item" href="addmap2.php"> Insert Map</a>
			                <a class="dropdown-item" href="show_map2.php"> View map</a>
			            </div>
					</li>
				</ul>		
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								 <div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div> 
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<!-- <div class="dropdown-menu-header">
									4 New Notifications
								</div> -->
								<div class="list-group">
									
									
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<!-- <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
				                <i class="align-middle" data-feather="settings"></i>
				              </a> -->

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
				                <img src=" " class="avatar img-fluid rounded me-1"/> 
				                <span class="text-dark">Incredible India</span>
				            </a>
							<div class="dropdown-menu dropdown-menu-end">
								  
								
								<!-- <div class="dropdown-divider"></div> -->
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>

								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								
								<a class="dropdown-item" href="logout.php">Log out</a>

							</div>
						</li>
					</ul>
				</div>
			</nav>
	<!--  </div>

	</div> -->



	</body>
</html> 

<?php ?>