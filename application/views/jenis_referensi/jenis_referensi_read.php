<!doctype html>
<html>

<head><meta charset="UTF-8">
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

<body>
	<h2 style="margin-top:0px">Jenis Referensi</h2>
	<table class="table">
		<tr>
			<td>DESKRIPSI</td>
			<td><?php echo $DESKRIPSI; ?></td>
		</tr>
		<tr>
			<td>SINGKATAN</td>
			<td><?php echo $SINGKATAN; ?></td>
		</tr>
		<tr>
			<td>APLIKASI</td>
			<td><?php echo $APLIKASI; ?></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="<?php echo site_url('jenis_referensi') ?>" class="btn btn-default">Cancel</a></td>
		</tr>
	</table>
</body>

</html>
