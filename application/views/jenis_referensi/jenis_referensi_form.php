<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<title>Jenis Referensi</title>

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

	<style>
		body {
			padding: 15px;
		}

	</style>
    </head>
    <body class="animsition">
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
        <div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<h2 style="margin-top:0px">Tambah Jenis Referensi</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">DESKRIPSI <?php echo form_error('DESKRIPSI') ?></label>
            <input type="text" class="form-control" name="DESKRIPSI" id="DESKRIPSI" placeholder="DESKRIPSI" value="<?php echo $DESKRIPSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">SINGKATAN <?php echo form_error('SINGKATAN') ?></label>
            <input type="text" class="form-control" name="SINGKATAN" id="SINGKATAN" placeholder="SINGKATAN" value="<?php echo $SINGKATAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">APLIKASI <?php echo form_error('APLIKASI') ?></label>
            <input type="text" class="form-control" name="APLIKASI" id="APLIKASI" placeholder="APLIKASI" value="<?php echo $APLIKASI; ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenis_referensi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>