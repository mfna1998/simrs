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
        <h2 style="margin-top:0px">Kontak Keluarga Pasien</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <input type="hidden" name="SHDK" value="<?php echo $SHDK; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kontak_keluarga_pasien') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>