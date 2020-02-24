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
        <h2 style="margin-top:0px">Negara <?php echo $button ?></h2>
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
            <label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('negara') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>