<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Dokter Read</h2>
        <table class="table">
	    <tr><td>NIP</td><td><?php echo $NIP; ?></td></tr>
	    <tr><td>SIP</td><td><?php echo $SIP; ?></td></tr>
	    <tr><td>TANGGAL BERLAKU SIP</td><td><?php echo $TANGGAL_BERLAKU_SIP; ?></td></tr>
	    <tr><td>TANGGAL BERAKHIR SIP</td><td><?php echo $TANGGAL_BERAKHIR_SIP; ?></td></tr>
	    <tr><td>HAFIS</td><td><?php echo $HAFIS; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $STATUS; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('dokter') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>