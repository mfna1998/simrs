<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<link href="../../css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
	<!-- MENU SIDEBAR-->
	<aside class="menu-sidebar d-none d-lg-block">
		<div class="logo">
			<a href="#">
				<img src="../../images/icon/Logo-Dharmais.png" style="width: 70px; margin-left: 100%" />
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
							<i class="fas fa-copy"></i>Tables</a>
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
							<?php echo anchor(site_url('negara/create'),'Add New Nations'); ?>
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
					<div class="header-wrap float-right">
						<div class="header-button ">
							<div class="account-wrap">
								<div class="account-item clearfix js-item-menu">
									<div class="image">
										<img src="../../images/icon/Logo-Dharmais.png" alt="User" />
									</div>

									<div class="content">
										<a class="js-acc-btn" href="#">User</a>
									</div>

									<div class="account-dropdown js-dropdown">
										<div class="info clearfix">
											<div class="image">
												<a href="#">
													<img src="../../images/icon/Logo-Dharmais.png" alt="John Doe" />
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
					<div class="col-lg-12">
						<div class="card-header">
							<ul class="nav nav-tabs card-header-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#">
										<h3>Detail Patient</h3>
									</a>
								</li>
							</ul>
						</div>
						<div class="top-campaign">
							<div class="table-responsive">
								<table class="table table-top-campaign">
									<tbody>
										<tr>
											<td>NAMA</td>
											<td><?php echo $NAMA; ?></td>
										</tr>
										<tr>
											<td>PANGGILAN</td>
											<td><?php echo $PANGGILAN; ?></td>
										</tr>
										<tr>
											<td>GELAR DEPAN</td>
											<td><?php echo $GELAR_DEPAN; ?></td>
										</tr>
										<tr>
											<td>GELAR BELAKANG</td>
											<td><?php echo $GELAR_BELAKANG; ?></td>
										</tr>
										<tr>
											<td>TEMPAT LAHIR</td>
											<td><?php echo $TEMPAT_LAHIR; ?></td>
										</tr>
										<tr>
											<td>TANGGAL LAHIR</td>
											<td><?php echo $TANGGAL_LAHIR; ?></td>
										</tr>
										<tr>
											<td>JENIS KELAMIN</td>
											<td><?php echo $JENIS_KELAMIN; ?></td>
										</tr>
										<tr>
											<td>ALAMAT</td>
											<td><?php echo $ALAMAT; ?></td>
										</tr>
										<tr>
											<td>RT</td>
											<td><?php echo $RT; ?></td>
										</tr>
										<tr>
											<td>RW</td>
											<td><?php echo $RW; ?></td>
										</tr>
										<tr>
											<td>KODEPOS</td>
											<td><?php echo $KODEPOS; ?></td>
										</tr>
										<tr>
											<td>WILAYAH</td>
											<td><?php echo $WILAYAH; ?></td>
										</tr>
										<tr>
											<td>AGAMA</td>
											<td><?php echo $AGAMA; ?></td>
										</tr>
										<tr>
											<td>PENDIDIKAN</td>
											<td><?php echo $PENDIDIKAN; ?></td>
										</tr>
										<tr>
											<td>PEKERJAAN</td>
											<td><?php echo $PEKERJAAN; ?></td>
										</tr>
										<tr>
											<td>STATUS PERKAWINAN</td>
											<td><?php echo $STATUS_PERKAWINAN; ?></td>
										</tr>
										<tr>
											<td>GOLONGAN DARAH</td>
											<td><?php echo $GOLONGAN_DARAH; ?></td>
										</tr>
										<tr>
											<td>KEWARGANEGARAAN</td>
											<td><?php echo $KEWARGANEGARAAN; ?></td>
										</tr>
										<tr>
											<td>SUKUBANGSA</td>
											<td><?php echo $SUKUBANGSA; ?></td>
										</tr>
										<tr>
											<td>BAHASA</td>
											<td><?php echo $BAHASA; ?></td>
										</tr>
										<tr>
											<td>LINGKUNGANKERJA</td>
											<td><?php echo $LINGKUNGANKERJA; ?></td>
										</tr>
										<tr>
											<td>TUJUANPERIKSA</td>
											<td><?php echo $TUJUANPERIKSA; ?></td>
										</tr>
										<tr>
											<td>JENIS PASIEN</td>
											<td><?php echo $JENIS_PASIEN; ?></td>
										</tr>
										<tr>
											<td>CEKNIK</td>
											<td><?php echo $CEKNIK; ?></td>
										</tr>
										<tr>
											<td>TANGGAL</td>
											<td><?php echo $TANGGAL; ?></td>
										</tr>
										<tr>
											<td>STATUS</td>
											<td><?php echo $STATUS; ?></td>
										</tr>
										<tr>
											<br>
											<br>
											<td><a href="<?php echo site_url('pasien') ?>"
													class="btn btn-danger">Close</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jquery JS-->
		<script src="../../vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JS-->
		<script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
		<script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
		<!-- Vendor JS       -->
		<script src="../../vendor/slick/slick.min.js">
		</script>
		<script src="../../vendor/wow/wow.min.js"></script>
		<script src="../../vendor/animsition/animsition.min.js"></script>
		<script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
		</script>
		<script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
		<script src="../../vendor/counter-up/jquery.counterup.min.js">
		</script>
		<script src="../../vendor/circle-progress/circle-progress.min.js"></script>
		<script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
		<script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
		<script src="../../vendor/select2/select2.min.js">
		</script>

		<!-- Main JS-->
		<script src="../../js/main.js"></script>
</body>

</html>
