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
        <h2 style="margin-top:0px">Pegawai</h2>
        <table class="table">
	    <tr><td>NAMA</td><td><?php echo $NAMA; ?></td></tr>
	    <tr><td>PANGGILAN</td><td><?php echo $PANGGILAN; ?></td></tr>
	    <tr><td>GELAR DEPAN</td><td><?php echo $GELAR_DEPAN; ?></td></tr>
	    <tr><td>GELAR BELAKANG</td><td><?php echo $GELAR_BELAKANG; ?></td></tr>
	    <tr><td>TEMPAT LAHIR</td><td><?php echo $TEMPAT_LAHIR; ?></td></tr>
	    <tr><td>TANGGAL LAHIR</td><td><?php echo $TANGGAL_LAHIR; ?></td></tr>
	    <tr><td>AGAMA</td><td><?php echo $AGAMA; ?></td></tr>
	    <tr><td>JENIS KELAMIN</td><td><?php echo $JENIS_KELAMIN; ?></td></tr>
	    <tr><td>PROFESI</td><td><?php echo $PROFESI; ?></td></tr>
	    <tr><td>SMF</td><td><?php echo $SMF; ?></td></tr>
	    <tr><td>ALAMAT</td><td><?php echo $ALAMAT; ?></td></tr>
	    <tr><td>RT</td><td><?php echo $RT; ?></td></tr>
	    <tr><td>RW</td><td><?php echo $RW; ?></td></tr>
	    <tr><td>KODEPOS</td><td><?php echo $KODEPOS; ?></td></tr>
	    <tr><td>WILAYAH</td><td><?php echo $WILAYAH; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $STATUS; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>