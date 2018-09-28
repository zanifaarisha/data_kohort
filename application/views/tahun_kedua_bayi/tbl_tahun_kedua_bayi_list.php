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
        <h2 style="margin-top:0px">Tbl_tahun_kedua_bayi List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tahun_kedua_bayi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tahun_kedua_bayi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tahun_kedua_bayi'); ?>" class="btn btn-default">Reset</a>
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
		<th>Jan</th>
		<th>Feb</th>
		<th>Maret</th>
		<th>April</th>
		<th>Mei</th>
		<th>Juni</th>
		<th>Juli</th>
		<th>Agst</th>
		<th>Sept</th>
		<th>Okt</th>
		<th>Nov</th>
		<th>Des</th>
		<th>Action</th>
            </tr><?php
            foreach ($tahun_kedua_bayi_data as $tahun_kedua_bayi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tahun_kedua_bayi->jan ?></td>
			<td><?php echo $tahun_kedua_bayi->feb ?></td>
			<td><?php echo $tahun_kedua_bayi->maret ?></td>
			<td><?php echo $tahun_kedua_bayi->april ?></td>
			<td><?php echo $tahun_kedua_bayi->mei ?></td>
			<td><?php echo $tahun_kedua_bayi->juni ?></td>
			<td><?php echo $tahun_kedua_bayi->juli ?></td>
			<td><?php echo $tahun_kedua_bayi->agst ?></td>
			<td><?php echo $tahun_kedua_bayi->sept ?></td>
			<td><?php echo $tahun_kedua_bayi->okt ?></td>
			<td><?php echo $tahun_kedua_bayi->nov ?></td>
			<td><?php echo $tahun_kedua_bayi->des ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tahun_kedua_bayi/read/'.$tahun_kedua_bayi->id_tahun_kedua),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tahun_kedua_bayi/update/'.$tahun_kedua_bayi->id_tahun_kedua),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tahun_kedua_bayi/delete/'.$tahun_kedua_bayi->id_tahun_kedua),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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