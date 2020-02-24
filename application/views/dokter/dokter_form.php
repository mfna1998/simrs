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
        <h2 style="margin-top:0px">Dokter <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NIP <?php echo form_error('NIP') ?></label>
            <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $NIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SIP <?php echo form_error('SIP') ?></label>
            <input type="text" class="form-control" name="SIP" id="SIP" placeholder="SIP" value="<?php echo $SIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TANGGAL BERLAKU SIP <?php echo form_error('TANGGAL_BERLAKU_SIP') ?></label>
            <input type="text" class="form-control" name="TANGGAL_BERLAKU_SIP" id="TANGGAL_BERLAKU_SIP" placeholder="TANGGAL BERLAKU SIP" value="<?php echo $TANGGAL_BERLAKU_SIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TANGGAL BERAKHIR SIP <?php echo form_error('TANGGAL_BERAKHIR_SIP') ?></label>
            <input type="text" class="form-control" name="TANGGAL_BERAKHIR_SIP" id="TANGGAL_BERAKHIR_SIP" placeholder="TANGGAL BERAKHIR SIP" value="<?php echo $TANGGAL_BERAKHIR_SIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">HAFIS <?php echo form_error('HAFIS') ?></label>
            <input type="text" class="form-control" name="HAFIS" id="HAFIS" placeholder="HAFIS" value="<?php echo $HAFIS; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dokter') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>