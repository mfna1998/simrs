<!doctype html>
<html>

<head>
	<title>SIMRS</title>
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/> -->
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
	<style>
		body {
			padding: 15px;
		}

	</style>
</head>

<body>
	<div class="page-wrapper">

		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- DATA TABLE -->
							<!-- <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div> -->
							<div class="row" style="margin-bottom: 10px">
								<div class="col-md-4">
									<?php echo anchor(site_url('pasien/create'),'Create', 'class="btn btn-primary"'); ?>
								</div>
								<div class="col-md-4 text-center">
									<div style="margin-top: 8px" id="message">
										<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
									</div>
								</div>
								<div class="col-md-1 text-right">
								</div>
								<div class="col-md-3 text-right">
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
							<table class="table table-bordered" style="margin-bottom: 10px">
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
								</tr><?php
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
									<td style="text-align:center" width="200px">

										<?php 
				echo anchor(site_url('pasien/read/'.$pasien->NORM),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pasien/update/'.$pasien->NORM),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pasien/delete/'.$pasien->NORM),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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

				<h2 style="margin-top:0px">Data Pasien</h2>


				<div class="row">
					<div class="col-md-6">
						<a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
					</div>
					<div class="col-md-6 text-right">
						<?php echo $pagination ?>
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
