<!doctype html>
<html>
    <head>
        <title>SIMRS</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Detail Keluarga Pasien</h2>
        <table class="table">
	    <tr><td>NORM</td><td><?php echo $NORM; ?></td></tr>
	    <tr><td>JENIS KELAMIN</td><td><?php echo $JENIS_KELAMIN; ?></td></tr>
	    <tr><td>ID</td><td><?php echo $ID; ?></td></tr>
	    <tr><td>NAMA</td><td><?php echo $NAMA; ?></td></tr>
	    <tr><td>ALAMAT</td><td><?php echo $ALAMAT; ?></td></tr>
	    <tr><td>PENDIDIKAN</td><td><?php echo $PENDIDIKAN; ?></td></tr>
	    <tr><td>PEKERJAAN</td><td><?php echo $PEKERJAAN; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('keluarga_pasien') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>