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
        <h2 style="margin-top:0px">Jenis Referensi</h2>
        <table class="table">
	    <tr><td>DESKRIPSI</td><td><?php echo $DESKRIPSI; ?></td></tr>
	    <tr><td>SINGKATAN</td><td><?php echo $SINGKATAN; ?></td></tr>
	    <tr><td>APLIKASI</td><td><?php echo $APLIKASI; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jenis_referensi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>