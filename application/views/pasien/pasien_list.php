<!doctype html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
	
	<title>SIMRS</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
  
	<!-- Fontfaces CSS-->
  	<link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/bootstrap/css/theme.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<style>
		body {
			padding: 15px;
		}

	</style>
</head>

<body>
	<!-- MENU SIDEBAR-->
	<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
                        <li class="active">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
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
		<!-- END MENU SIDEBAR-->
		
		 <!-- PAGE CONTAINER-->
		 <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <!-- <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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

	<div class="page-wrapper">
	<h2 style="margin-top:0px">Data Pasien</h2>
		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="row" style="margin-bottom: 10px">
								<div class="col-md-2">
									<?php echo anchor(site_url('pasien/create'),'Create', 'class="btn btn-primary"'); ?>
								</div>
								<div class="col-md-6 ">
									<div style="margin-top: 8px" id="message">
										<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
									</div>
								</div>
								<div class="col-md-13">
									<form action="<?php echo site_url('pasien/index'); ?>" class="form-inline"
										method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
											<span class="input-group-btn">
												<?php 
                                if ($q <> '')
                                {
                                    ?>
												<a href="<?php echo site_url('pasien'); ?>"
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
						</div>
						<div class="table-responsive x">
							<table class="table table-bordered" style="margin-bottom: 10px, border: 25px">
							<thead class="thead-light">
								<tr>
									<th>No</th>
									<th>NORM</th>
									<th>NAMA</th>
									<th>PANGGILAN</th>
									<th>GELAR DEPAN</th>
									<th>GELAR BELAKANG</th>
									<th>JENIS KELAMIN</th>
									<th>TUJUANPERIKSA</th>
									<th>JENIS PASIEN</th>
									<th>CEKNIK</th>
									<th>STATUS</th>
									<th>Action</th>
								</tr>
							<thead>
								<?php
            foreach ($pasien_data as $pasien)
            {
                ?>
								<tr>
									<td width="80px"><?php echo ++$start ?></td>
									<td><?php echo $pasien->NORM ?></td>
									<td><?php echo $pasien->NAMA ?></td>
									<td><?php echo $pasien->PANGGILAN ?></td>
									<td><?php echo $pasien->GELAR_DEPAN ?></td>
									<td><?php echo $pasien->GELAR_BELAKANG ?></td>
									<td><?php echo $pasien->JENIS_KELAMIN ?></td>
									<td><?php echo $pasien->TUJUANPERIKSA ?></td>
									<td><?php echo $pasien->JENIS_PASIEN ?></td>
									<td><?php echo $pasien->CEKNIK ?></td>
									<td><?php echo $pasien->STATUS ?></td>
									<td style="text-align:center" width="20%">

										<?php 
				echo anchor(site_url('pasien/read/'.$pasien->NORM),'Detail', 'class="btn  btn-outline-primary"'); 
				echo '  '; 
				echo anchor(site_url('pasien/update/'.$pasien->NORM),'Update', 'class="btn  btn-outline-warning"'); 
				echo '  '; 
				echo anchor(site_url('pasien/delete/'.$pasien->NORM),'Delete', 'class="btn btn-outline-danger"','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
									</td>
								</tr>
								<?php
            }
            ?>
							</table>
						</div>
						<!-- END DATA TABLE -->
					</div>
				</div>

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

</body>

</html>
