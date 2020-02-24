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
        <h2 style="margin-top:0px">Keluarga Pasien</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">NORM <?php echo form_error('NORM') ?></label>
            <input type="text" class="form-control" name="NORM" id="NORM" placeholder="NORM" value="<?php echo $NORM; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">JENIS KELAMIN <?php echo form_error('JENIS_KELAMIN') ?></label>
            <input type="text" class="form-control" name="JENIS_KELAMIN" id="JENIS_KELAMIN" placeholder="JENIS KELAMIN" value="<?php echo $JENIS_KELAMIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">ID <?php echo form_error('ID') ?></label>
            <input type="text" class="form-control" name="ID" id="ID" placeholder="ID" value="<?php echo $ID; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMA <?php echo form_error('NAMA') ?></label>
            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="NAMA" value="<?php echo $NAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAMAT <?php echo form_error('ALAMAT') ?></label>
            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="ALAMAT" value="<?php echo $ALAMAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">PENDIDIKAN <?php echo form_error('PENDIDIKAN') ?></label>
            <input type="text" class="form-control" name="PENDIDIKAN" id="PENDIDIKAN" placeholder="PENDIDIKAN" value="<?php echo $PENDIDIKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">PEKERJAAN <?php echo form_error('PEKERJAAN') ?></label>
            <input type="text" class="form-control" name="PEKERJAAN" id="PEKERJAAN" placeholder="PEKERJAAN" value="<?php echo $PEKERJAAN; ?>" />
        </div>
	    <input type="hidden" name="SHDK" value="<?php echo $SHDK; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('keluarga_pasien') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>