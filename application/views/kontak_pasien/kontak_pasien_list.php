<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<title>Kontak Pasien</title>

	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" /> -->
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

<body>
	<aside class="menu-sidebar d-none d-lg-block">
		<div class="logo">
			<a href="#">
				<img src="images/icon/logo.png" style="width: 50px" alt="Cool Admin" />
			</a>
		</div>

		<div class="menu-sidebar__content js-scrollbar1">
			<nav class="navbar-sidebar">
				<ul class="list-unstyled navbar__list">
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="fas fa-tachometer-alt"></i>Data Pasien</a>
					</li>

					<li>
						<a href="chart.html">
							<i class="fas fa-chart-bar"></i>Jenis Referensi</a>
					</li>

					<li class="active">
						<a href="table.html">
							<i class="fas fa-table"></i>Referensi</a>
					</li>

					<li>
						<a href="form.html">
							<i class="far fa-check-square"></i>Forms</a>
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

	<!-- PAGE CONTAINER-->
	<div class="page-container">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="header-wrap">
						<form class="form-header" action="" method="POST">
							<input class="au-input au-input--xl" type="text" name="search"
								placeholder="Search for datas &amp; reports..." />

							<button class="au-btn--submit" type="submit">
								<i class="zmdi zmdi-search"></i>
							</button>

						</form>

						<div class="header-button">
							<div class="account-wrap">
								<div class="account-item clearfix js-item-menu">
									<div class="image">
										<img src="#" alt="User" />
									</div>

									<div class="content">
										<a class="js-acc-btn" href="#">User</a>
									</div>

									<div class="account-dropdown js-dropdown">
										<div class="info clearfix">
											<div class="image">
												<a href="#">
													<img src="images/icon/avatar-01.jpg" alt="John Doe" />
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
					<h2 style="margin-top:0px">Kontak Pasien</h2>
					<div class="row" style="margin-bottom: 10px">
						<div class="col-md-4">
							<?php echo anchor(site_url('kontak_pasien/create'),'Create', 'class="btn btn-primary"'); ?>
						</div>

						<div class="col-md-4 text-center">
							<div style="margin-top: 8px" id="message">
								<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
							</div>
						</div>

						<div class="col-md-1 text-right">
						</div>

						<div class="col-md-3 text-right">
							<form action="<?php echo site_url('kontak_pasien/index'); ?>" class="form-inline"
								method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
									<span class="input-group-btn">
										<?php 
                                            if ($q <> '') {
                                        ?>
										<a href="<?php echo site_url('kontak_pasien'); ?>"
											class="btn btn-default">Reset</a>
										<?php
                                        }
                                        ?>

										<button class="btn btn-primary" type="submit">Search</button>
									</span>
								</div>
							</form>
						</div>
					</div>

					<div class="table-responsive x" style="overflow-x:hidden;">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>NORM</th>
									<th>JENIS</th>
									<th>NOMOR</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<?php
                                foreach ($kontak_pasien_data as $kontak_pasien) {
                            ?>
							<tr>
								<td><?php echo ++$start ?></td>
								<td><?php echo $kontak_pasien->NORM ?></td>
								<td><?php echo $kontak_pasien->JENIS ?></td>
								<td><?php echo $kontak_pasien->NOMOR ?></td>
								<td>
									<?php 
				                        echo anchor(site_url('kontak_pasien/read/'.$kontak_pasien->JENIS),'Read'); 
				                        echo ' | '; 
				                        echo anchor(site_url('kontak_pasien/update/'.$kontak_pasien->JENIS),'Update'); 
				                        echo ' | '; 
				                        echo anchor(site_url('kontak_pasien/delete/'.$kontak_pasien->JENIS),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				                    ?>
								</td>
							</tr>
							<tr class="spacer"></tr>
							<?php
                            }
                            ?>
						</table>

						<div class="row">
							<div class="col-md-6">
								<a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
							</div>

							<div class="col-md-6 text-right">
								<?php echo $pagination ?>
							</div>
						</div>
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
