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
        <h2 style="margin-top:0px">Pasien List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pasien/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pasien/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pasien'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NAMA</th>
		<th>PANGGILAN</th>
		<th>GELAR DEPAN</th>
		<th>GELAR BELAKANG</th>
		<th>TEMPAT LAHIR</th>
		<th>TANGGAL LAHIR</th>
		<th>JENIS KELAMIN</th>
		<th>ALAMAT</th>
		<th>RT</th>
		<th>RW</th>
		<th>KODEPOS</th>
		<th>WILAYAH</th>
		<th>AGAMA</th>
		<th>PENDIDIKAN</th>
		<th>PEKERJAAN</th>
		<th>STATUS PERKAWINAN</th>
		<th>GOLONGAN DARAH</th>
		<th>KEWARGANEGARAAN</th>
		<th>SUKUBANGSA</th>
		<th>BAHASA</th>
		<th>LINGKUNGANKERJA</th>
		<th>TUJUANPERIKSA</th>
		<th>JENIS PASIEN</th>
		<th>CEKNIK</th>
		<th>TANGGAL</th>
		<th>STATUS</th>
		<th>Action</th>
            </tr><?php
            foreach ($pasien_data as $pasien)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pasien->NAMA ?></td>
			<td><?php echo $pasien->PANGGILAN ?></td>
			<td><?php echo $pasien->GELAR_DEPAN ?></td>
			<td><?php echo $pasien->GELAR_BELAKANG ?></td>
			<td><?php echo $pasien->TEMPAT_LAHIR ?></td>
			<td><?php echo $pasien->TANGGAL_LAHIR ?></td>
			<td><?php echo $pasien->JENIS_KELAMIN ?></td>
			<td><?php echo $pasien->ALAMAT ?></td>
			<td><?php echo $pasien->RT ?></td>
			<td><?php echo $pasien->RW ?></td>
			<td><?php echo $pasien->KODEPOS ?></td>
			<td><?php echo $pasien->WILAYAH ?></td>
			<td><?php echo $pasien->AGAMA ?></td>
			<td><?php echo $pasien->PENDIDIKAN ?></td>
			<td><?php echo $pasien->PEKERJAAN ?></td>
			<td><?php echo $pasien->STATUS_PERKAWINAN ?></td>
			<td><?php echo $pasien->GOLONGAN_DARAH ?></td>
			<td><?php echo $pasien->KEWARGANEGARAAN ?></td>
			<td><?php echo $pasien->SUKUBANGSA ?></td>
			<td><?php echo $pasien->BAHASA ?></td>
			<td><?php echo $pasien->LINGKUNGANKERJA ?></td>
			<td><?php echo $pasien->TUJUANPERIKSA ?></td>
			<td><?php echo $pasien->JENIS_PASIEN ?></td>
			<td><?php echo $pasien->CEKNIK ?></td>
			<td><?php echo $pasien->TANGGAL ?></td>
			<td><?php echo $pasien->STATUS ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pasien/read/'.$pasien->NORM),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pasien/update/'.$pasien->NORM),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pasien/delete/'.$pasien->NORM),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>