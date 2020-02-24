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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('keluarga_pasien/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('keluarga_pasien/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('keluarga_pasien'); ?>" class="btn btn-default">Reset</a>
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
		<th>NORM</th>
		<th>JENIS KELAMIN</th>
		<th>ID</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>PENDIDIKAN</th>
		<th>PEKERJAAN</th>
		<th>Action</th>
            </tr><?php
            foreach ($keluarga_pasien_data as $keluarga_pasien)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $keluarga_pasien->NORM ?></td>
			<td><?php echo $keluarga_pasien->JENIS_KELAMIN ?></td>
			<td><?php echo $keluarga_pasien->ID ?></td>
			<td><?php echo $keluarga_pasien->NAMA ?></td>
			<td><?php echo $keluarga_pasien->ALAMAT ?></td>
			<td><?php echo $keluarga_pasien->PENDIDIKAN ?></td>
			<td><?php echo $keluarga_pasien->PEKERJAAN ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('keluarga_pasien/read/'.$keluarga_pasien->SHDK),'Read'); 
				echo ' | '; 
				echo anchor(site_url('keluarga_pasien/update/'.$keluarga_pasien->SHDK),'Update'); 
				echo ' | '; 
				echo anchor(site_url('keluarga_pasien/delete/'.$keluarga_pasien->SHDK),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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