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
        <h2 style="margin-top:0px">Jenis_referensi <?php echo $button ?></h2>
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