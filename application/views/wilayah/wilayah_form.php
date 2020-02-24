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
        <h2 style="margin-top:0px">Tambah Wilayah</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="tinyint">JENIS <?php echo form_error('JENIS') ?></label>
            <input type="text" class="form-control" name="JENIS" id="JENIS" placeholder="JENIS" value="<?php echo $JENIS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DESKRIPSI <?php echo form_error('DESKRIPSI') ?></label>
            <input type="text" class="form-control" name="DESKRIPSI" id="DESKRIPSI" placeholder="DESKRIPSI" value="<?php echo $DESKRIPSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">KOTA <?php echo form_error('KOTA') ?></label>
            <input type="text" class="form-control" name="KOTA" id="KOTA" placeholder="KOTA" value="<?php echo $KOTA; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('wilayah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>