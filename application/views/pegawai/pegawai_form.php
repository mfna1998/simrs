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
        <h2 style="margin-top:0px">Tambah Pegawai</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">NIP <?php echo form_error('NIP') ?></label>
            <input type="number" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $NIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMA <?php echo form_error('NAMA') ?></label>
            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="NAMA" value="<?php echo $NAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PANGGILAN <?php echo form_error('PANGGILAN') ?></label>
            <input type="text" class="form-control" name="PANGGILAN" id="PANGGILAN" placeholder="PANGGILAN" value="<?php echo $PANGGILAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GELAR DEPAN <?php echo form_error('GELAR_DEPAN') ?></label>
            <input type="text" class="form-control" name="GELAR_DEPAN" id="GELAR_DEPAN" placeholder="GELAR DEPAN" value="<?php echo $GELAR_DEPAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GELAR BELAKANG <?php echo form_error('GELAR_BELAKANG') ?></label>
            <input type="text" class="form-control" name="GELAR_BELAKANG" id="GELAR_BELAKANG" placeholder="GELAR BELAKANG" value="<?php echo $GELAR_BELAKANG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TEMPAT LAHIR <?php echo form_error('TEMPAT_LAHIR') ?></label>
            <input type="text" class="form-control" name="TEMPAT_LAHIR" id="TEMPAT_LAHIR" placeholder="TEMPAT LAHIR" value="<?php echo $TEMPAT_LAHIR; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">TANGGAL LAHIR <?php echo form_error('TANGGAL_LAHIR') ?></label>
            <input type="text" class="form-control" name="TANGGAL_LAHIR" id="TANGGAL_LAHIR" placeholder="TANGGAL LAHIR" value="<?php echo $TANGGAL_LAHIR; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">AGAMA <?php echo form_error('AGAMA') ?></label>
            <input type="text" class="form-control" name="AGAMA" id="AGAMA" placeholder="AGAMA" value="<?php echo $AGAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">JENIS KELAMIN <?php echo form_error('JENIS_KELAMIN') ?></label>
            <input type="text" class="form-control" name="JENIS_KELAMIN" id="JENIS_KELAMIN" placeholder="JENIS KELAMIN" value="<?php echo $JENIS_KELAMIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="mediumint">PROFESI <?php echo form_error('PROFESI') ?></label>
            <input type="text" class="form-control" name="PROFESI" id="PROFESI" placeholder="PROFESI" value="<?php echo $PROFESI; ?>" />
        </div>
	    <div class="form-group">
            <label for="mediumint">SMF <?php echo form_error('SMF') ?></label>
            <input type="text" class="form-control" name="SMF" id="SMF" placeholder="SMF" value="<?php echo $SMF; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAMAT <?php echo form_error('ALAMAT') ?></label>
            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="ALAMAT" value="<?php echo $ALAMAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">RT <?php echo form_error('RT') ?></label>
            <input type="text" class="form-control" name="RT" id="RT" placeholder="RT" value="<?php echo $RT; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">RW <?php echo form_error('RW') ?></label>
            <input type="text" class="form-control" name="RW" id="RW" placeholder="RW" value="<?php echo $RW; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">KODEPOS <?php echo form_error('KODEPOS') ?></label>
            <input type="text" class="form-control" name="KODEPOS" id="KODEPOS" placeholder="KODEPOS" value="<?php echo $KODEPOS; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">WILAYAH <?php echo form_error('WILAYAH') ?></label>
            <input type="text" class="form-control" name="WILAYAH" id="WILAYAH" placeholder="WILAYAH" value="<?php echo $WILAYAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <input type="hidden" name="NIP" value="<?php echo $NIP; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>