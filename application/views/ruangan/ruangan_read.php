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
        <h2 style="margin-top:0px">Ruangan</h2>
        <table class="table">
	    <tr><td>JENIS</td><td><?php echo $JENIS; ?></td></tr>
	    <tr><td>JENIS KUNJUNGAN</td><td><?php echo $JENIS_KUNJUNGAN; ?></td></tr>
	    <tr><td>DESKRIPSI</td><td><?php echo $DESKRIPSI; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $STATUS; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ruangan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>