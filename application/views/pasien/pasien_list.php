<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<title>List Data Patients</title>

	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
	<!-- MENU SIDEBAR-->
	<aside class="menu-sidebar d-none d-lg-block">
		<div class="logo">
			<a href="#">
				<img src="images/icon/Logo-Dharmais.png" style="width: 70px; margin-left: 100%" />
			</a>
		</div>
		<div class="menu-sidebar__content js-scrollbar1">
			<nav class="navbar-sidebar">
				<ul class="list-unstyled navbar__list">
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="fas fa-tachometer-alt"></i>Dashboard</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="index.html">Dashboard 1</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="chart.html">
							<i class="fas fa-chart-bar"></i>Charts</a>
					</li>
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="fas fa-table"></i>Tables</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<?php echo anchor(site_url('pasien'),'Patients'); ?>
							</li>
							<li>
								<a href="register.html">Register</a>
							</li>
							<li>
								<a href="forget-pass.html">Forget Password</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="far fa-check-square"></i>Forms</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<?php echo anchor(site_url('pasien/create'),'Add New Patient'); ?>
							</li>
							<li>
								<a href="register.html">Register</a>
							</li>
							<li>
								<a href="forget-pass.html">Forget Password</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="fas fa-copy"></i>Pages</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="login.html">Login</a>
							</li>
							<li>
								<a href="register.html">Register</a>
							</li>
							<li>
								<a href="forget-pass.html">Forget Password</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</aside>
	<!-- END MENU SIDEBAR-->

	<!-- PAGE CONTAINER-->
	<div class="page-container">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="header-wrap">
						<form action="<?php echo site_url('pasien'); ?>" class="form-inline" method="get">
							<input class="au-input au-input--xl" type="text" name="q" value="<?php echo $q; ?>"
								placeholder="Search for datas &amp; reports..." />

							<span class="input-group-btn">
								<?php 
                                    if ($q <> '') {
                                    ?>
								<a href="<?php echo site_url('pasien'); ?>" class="btn btn-primary">Reset</a>

								<?php
                                    }
                                    ?>
								<button class="btn btn-primary" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</span>
						</form>
						<div class="header-button">
							<div class="account-wrap">
								<div class="account-item clearfix js-item-menu">
									<div class="image">
										<img src="images/icon/Logo-Dharmais.png" alt="User" />
									</div>

									<div class="content">
										<a class="js-acc-btn" href="#">User</a>
									</div>
									<div class="account-dropdown js-dropdown">
										<div class="info clearfix">
											<div class="image">
												<a href="#">
													<img src="images/icon/Logo-Dharmais.png" />
												</a>
											</div>
											<div class="content">
												<h5 class="name">
													<a href="#">user</a>
												</h5>
												<span class="email">user@example.com</span>
											</div>

										</div>
										<div class="account-dropdown__body">
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-account"></i>Account</a>
											</div>
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-settings"></i>Setting</a>
											</div>
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-money-box"></i>Billing</a>
											</div>
										</div>
										<div class="account-dropdown__footer">
											<a href="#">
												<i class="zmdi zmdi-power"></i>Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER DESKTOP-->

		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<h2 style="margin-top:0px">List Data Patients</h2>
					<br>
					<div class="row" style="margin-bottom: 10px">
						<div class="col-md-6">
							<?php echo anchor(site_url('pasien/create'),'Add New Patient', 'class="btn btn-primary"'); ?>
						</div>
						<div class="col-md-6 text-center">
							<div style="margin-top: 8px" id="message">
								<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
							</div>
						</div>
						<div class="table-responsive x" style="overflow-x:hidden;">
							<table class="table table-data2">
								<thead>
									<tr>
										<th>No</th>
										<th>NAMA</th>
										<th>JENIS KELAMIN</th>
										<th>GOLONGAN DARAH</th>
										<th>TUJUANPERIKSA</th>
										<th>JENIS PASIEN</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php
                                    foreach ($pasien_data as $pasien)
                                    {
                                ?>
								<tr>
									<td width="80px"><?php echo ++$start ?></td>
									<td><?php echo $pasien->NAMA ?></td>
									<td><?php echo $pasien->JENIS_KELAMIN ?></td>
									<td><?php echo $pasien->GOLONGAN_DARAH ?></td>
									<td><?php echo $pasien->TUJUANPERIKSA ?></td>
									<td><?php echo $pasien->JENIS_PASIEN ?></td>
									<td style="text-align:center" width="200px">
										<?php 
                                        echo anchor(site_url('pasien/read/'.$pasien->NORM), ' ', 'i class="btn btn-outline-primary zmdi zmdi-eye"');
                                        ?>
										<?php	
                                        echo anchor(site_url('pasien/update/'.$pasien->NORM),' ', 'i class="btn btn-outline-warning zmdi zmdi-edit"');
                                        ?>
                                                                <?php	 
                                        echo anchor(site_url('pasien/delete/'.$pasien->NORM),' ', 'i class="btn btn-outline-danger zmdi zmdi-delete"','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                        ?>
									</td>
								</tr>
								<tr class="spacer"></tr>
								<?php
                                }
                                ?>
							</table>
							<br>
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="btn btn-info">Total Record : <?php echo $total_rows ?></a>
								</div>
								<div class="col-md-6">
									<?php echo $pagination ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Jquery JS-->
				<script src="vendor/jquery-3.2.1.min.js"></script>
				<!-- Bootstrap JS-->
				<script src="vendor/bootstrap-4.1/popper.min.js"></script>
				<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
				<!-- Vendor JS       -->
				<script src="vendor/slick/slick.min.js">
				</script>
				<script src="vendor/wow/wow.min.js"></script>
				<script src="vendor/animsition/animsition.min.js"></script>
				<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
				</script>
				<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
				<script src="vendor/counter-up/jquery.counterup.min.js">
				</script>
				<script src="vendor/circle-progress/circle-progress.min.js"></script>
				<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
				<script src="vendor/chartjs/Chart.bundle.min.js"></script>
				<script src="vendor/select2/select2.min.js">
				</script>

				<!-- Main JS-->
				<script src="js/main.js"></script>

</body>

</html>
