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
        <h2 style="margin-top:0px">Tbl_biodata_balita List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('biodata_balita/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('biodata_balita/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('biodata_balita'); ?>" class="btn btn-default">Reset</a>
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
		<th>No Urut</th>
		<th>Nik</th>
		<th>Nama Anak</th>
		<th>Tgl Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Nama Ibu</th>
		<th>Alamat</th>
		<th>No Tlp</th>
		<th>Punya Buku Kia</th>
		<th>Action</th>
            </tr><?php
            foreach ($biodata_balita_data as $biodata_balita)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $biodata_balita->no_urut ?></td>
			<td><?php echo $biodata_balita->nik ?></td>
			<td><?php echo $biodata_balita->nama_anak ?></td>
			<td><?php echo $biodata_balita->tgl_lahir ?></td>
			<td><?php echo $biodata_balita->jenis_kelamin ?></td>
			<td><?php echo $biodata_balita->nama_ibu ?></td>
			<td><?php echo $biodata_balita->alamat ?></td>
			<td><?php echo $biodata_balita->no_tlp ?></td>
			<td><?php echo $biodata_balita->punya_buku_kia ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('biodata_balita/read/'.$biodata_balita->id_balita),'Read'); 
				echo ' | '; 
				echo anchor(site_url('biodata_balita/update/'.$biodata_balita->id_balita),'Update'); 
				echo ' | '; 
				echo anchor(site_url('biodata_balita/delete/'.$biodata_balita->id_balita),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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