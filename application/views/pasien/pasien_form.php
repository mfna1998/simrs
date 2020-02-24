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
        <h2 style="margin-top:0px">Tambah Pasien</h2>
        <form action="<?php echo $action; ?>" method="post">
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
            <input type="date" class="form-control" name="TANGGAL_LAHIR" id="TANGGAL_LAHIR" placeholder="TANGGAL LAHIR" value="<?php echo $TANGGAL_LAHIR; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">JENIS KELAMIN <?php echo form_error('JENIS_KELAMIN') ?></label>
            <input type="text" class="form-control" name="JENIS_KELAMIN" id="JENIS_KELAMIN" placeholder="JENIS KELAMIN" value="<?php echo $JENIS_KELAMIN; ?>" />
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
            <label for="tinyint">AGAMA <?php echo form_error('AGAMA') ?></label>
            <input type="text" class="form-control" name="AGAMA" id="AGAMA" placeholder="AGAMA" value="<?php echo $AGAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">PENDIDIKAN <?php echo form_error('PENDIDIKAN') ?></label>
            <input type="text" class="form-control" name="PENDIDIKAN" id="PENDIDIKAN" placeholder="PENDIDIKAN" value="<?php echo $PENDIDIKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">PEKERJAAN <?php echo form_error('PEKERJAAN') ?></label>
            <input type="text" class="form-control" name="PEKERJAAN" id="PEKERJAAN" placeholder="PEKERJAAN" value="<?php echo $PEKERJAAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">STATUS PERKAWINAN <?php echo form_error('STATUS_PERKAWINAN') ?></label>
            <input type="text" class="form-control" name="STATUS_PERKAWINAN" id="STATUS_PERKAWINAN" placeholder="STATUS PERKAWINAN" value="<?php echo $STATUS_PERKAWINAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">GOLONGAN DARAH <?php echo form_error('GOLONGAN_DARAH') ?></label>
            <input type="text" class="form-control" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH" placeholder="GOLONGAN DARAH" value="<?php echo $GOLONGAN_DARAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">KEWARGANEGARAAN <?php echo form_error('KEWARGANEGARAAN') ?></label>
            <input type="text" class="form-control" name="KEWARGANEGARAAN" id="KEWARGANEGARAAN" placeholder="KEWARGANEGARAAN" value="<?php echo $KEWARGANEGARAAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">SUKUBANGSA <?php echo form_error('SUKUBANGSA') ?></label>
            <input type="text" class="form-control" name="SUKUBANGSA" id="SUKUBANGSA" placeholder="SUKUBANGSA" value="<?php echo $SUKUBANGSA; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">BAHASA <?php echo form_error('BAHASA') ?></label>
            <input type="text" class="form-control" name="BAHASA" id="BAHASA" placeholder="BAHASA" value="<?php echo $BAHASA; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">LINGKUNGANKERJA <?php echo form_error('LINGKUNGANKERJA') ?></label>
            <input type="text" class="form-control" name="LINGKUNGANKERJA" id="LINGKUNGANKERJA" placeholder="LINGKUNGANKERJA" value="<?php echo $LINGKUNGANKERJA; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">TUJUANPERIKSA <?php echo form_error('TUJUANPERIKSA') ?></label>
            <input type="text" class="form-control" name="TUJUANPERIKSA" id="TUJUANPERIKSA" placeholder="TUJUANPERIKSA" value="<?php echo $TUJUANPERIKSA; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">JENIS PASIEN <?php echo form_error('JENIS_PASIEN') ?></label>
            <input type="text" class="form-control" name="JENIS_PASIEN" id="JENIS_PASIEN" placeholder="JENIS PASIEN" value="<?php echo $JENIS_PASIEN; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">CEKNIK <?php echo form_error('CEKNIK') ?></label>
            <input type="text" class="form-control" name="CEKNIK" id="CEKNIK" placeholder="CEKNIK" value="<?php echo $CEKNIK; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">TANGGAL <?php echo form_error('TANGGAL') ?></label>
            <input type="text" class="form-control" name="TANGGAL" id="TANGGAL" placeholder="TANGGAL" value="<?php echo $TANGGAL; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <input type="hidden" name="NORM" value="<?php echo $NORM; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pasien') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>