<!doctype html>
<html>

<head>
	<title>Input Data Patient</title>
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
				<img src="../images/icon/Logo-Dharmais.png" style="width: 70px; margin-left: 100%" />
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
										<img src="../images/icon/Logo-Dharmais.png" alt="User" />
									</div>
									<div class="content">
										<a class="js-acc-btn" href="#">User</a>
									</div>
									<div class="account-dropdown js-dropdown">
										<div class="info clearfix">
											<div class="image">
												<a href="#">
													<img src="../images/icon/Logo-Dharmais.png" alt="John Doe" />
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

		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<ul class="nav nav-tabs card-header-tabs">
										<li class="nav-item">
											<a class="nav-link active" href="#">
												<h3>Input New Patient</h3>
											</a>
										</li>
									</ul>
								</div>
								<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"
									class="form-horizontal">
									<div class="card-body card-block">

										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">NAMA <?php echo form_error('NAMA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="NAMA" id="NAMA"
													value="<?php echo $NAMA; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="tinyint">PENDIDIKAN
													<?php echo form_error('PENDIDIKAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="PENDIDIKAN"
													id="PENDIDIKAN" value="<?php echo $PENDIDIKAN; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">PANGGILAN
													<?php echo form_error('PANGGILAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="PANGGILAN" id="PANGGILAN"
													value="<?php echo $PANGGILAN; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="char">RT <?php echo form_error('RT') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="RT" id="RT"
													value="<?php echo $RT; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">GELAR DEPAN
													<?php echo form_error('GELAR_DEPAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="GELAR_DEPAN"
													id="GELAR_DEPAN" value="<?php echo $GELAR_DEPAN; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="char">RW <?php echo form_error('RW') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="RW" id="RW"
													value="<?php echo $RW; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">GELAR BELAKANG
													<?php echo form_error('GELAR_BELAKANG') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="GELAR_BELAKANG"
													id="GELAR_BELAKANG" value="<?php echo $GELAR_BELAKANG; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="char">KODEPOS <?php echo form_error('KODEPOS') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="KODEPOS" id="KODEPOS"
													value="<?php echo $KODEPOS; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">TEMPAT LAHIR
													<?php echo form_error('TEMPAT_LAHIR') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="TEMPAT_LAHIR"
													id="TEMPAT_LAHIR" value="<?php echo $TEMPAT_LAHIR; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="char">WILAYAH <?php echo form_error('WILAYAH') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="WILAYAH" id="WILAYAH"
													value="<?php echo $WILAYAH; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="datetime">TANGGAL LAHIR
													<?php echo form_error('TANGGAL_LAHIR') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="date" class="form-control" name="TANGGAL_LAHIR"
													id="TANGGAL_LAHIR" value="<?php echo $TANGGAL_LAHIR; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="tinyint">PEKERJAAN
													<?php echo form_error('PEKERJAAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="PEKERJAAN" id="PEKERJAAN"
													value="<?php echo $PEKERJAAN; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="tinyint">JENIS KELAMIN
													<?php echo form_error('JENIS_KELAMIN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="JENIS_KELAMIN"
													id="JENIS_KELAMIN" value="<?php echo $JENIS_KELAMIN; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="tinyint">STATUS PERKAWINAN
													<?php echo form_error('STATUS_PERKAWINAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="STATUS_PERKAWINAN"
													id="STATUS_PERKAWINAN" value="<?php echo $STATUS_PERKAWINAN; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="varchar">ALAMAT <?php echo form_error('ALAMAT') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="ALAMAT" id="ALAMAT"
													value="<?php echo $ALAMAT; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="datetime">TANGGAL
													<?php echo form_error('TANGGAL') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="date" class="form-control" name="TANGGAL"
													id="TANGGAL" value="<?php echo $TANGGAL; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="tinyint">GOLONGAN DARAH
													<?php echo form_error('GOLONGAN_DARAH') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="GOLONGAN_DARAH"
													id="GOLONGAN_DARAH" value="<?php echo $GOLONGAN_DARAH; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="smallint">KEWARGANEGARAAN
													<?php echo form_error('KEWARGANEGARAAN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="KEWARGANEGARAAN"
													id="KEWARGANEGARAAN" value="<?php echo $KEWARGANEGARAAN; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="smallint">SUKUBANGSA
													<?php echo form_error('SUKUBANGSA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="SUKUBANGSA"
													id="SUKUBANGSA" value="<?php echo $SUKUBANGSA; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="smallint">BAHASA <?php echo form_error('BAHASA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="BAHASA" id="BAHASA"
													value="<?php echo $BAHASA; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="smallint">LINGKUNGANKERJA
													<?php echo form_error('LINGKUNGANKERJA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="LINGKUNGANKERJA"
													id="LINGKUNGANKERJA" value="<?php echo $LINGKUNGANKERJA; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="smallint">TUJUANPERIKSA
													<?php echo form_error('TUJUANPERIKSA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="TUJUANPERIKSA"
													id="TUJUANPERIKSA" value="<?php echo $TUJUANPERIKSA; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="tinyint">JENIS PASIEN
													<?php echo form_error('JENIS_PASIEN') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="JENIS_PASIEN"
													id="JENIS_PASIEN" value="<?php echo $JENIS_PASIEN; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="tinyint">CEKNIK <?php echo form_error('CEKNIK') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="CEKNIK" id="CEKNIK"
													value="<?php echo $CEKNIK; ?>" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-2">
												<label for="tinyint">AGAMA <?php echo form_error('AGAMA') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="AGAMA" id="AGAMA"
													value="<?php echo $AGAMA; ?>" />
											</div>
											<div class="col col-md-2">
												<label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
											</div>
											<div class="col-12 col-md-4">
												<input type="text" class="form-control" name="STATUS" id="STATUS"
													value="<?php echo $STATUS; ?>" />
											</div>
										</div>
									</div>

									<div class="card-footer">
										<input type="hidden" name="NORM" value="<?php echo $NORM; ?>" />
										<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
										<a href="<?php echo site_url('pasien') ?>" i class="btn btn-danger">Cancel</a>
									</div>
								</form>
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
