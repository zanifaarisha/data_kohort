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
        <h2 style="margin-top:0px">Tbl_biodata_ibu_hamil List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('biodata_ibu_hamil/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('biodata_ibu_hamil/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('biodata_ibu_hamil'); ?>" class="btn btn-default">Reset</a>
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
		<th>No Indek</th>
		<th>Id Nama</th>
		<th>Alamat</th>
		<th>Id Umur</th>
		<th>Hamil Ke</th>
		<th>Bb Tb</th>
		<th>Lila Mt</th>
		<th>Hb Goldar</th>
		<th>Tensi</th>
		<th>Id Resiko</th>
		<th>Action</th>
            </tr><?php
            foreach ($biodata_ibu_hamil_data as $biodata_ibu_hamil)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $biodata_ibu_hamil->no_urut ?></td>
			<td><?php echo $biodata_ibu_hamil->no_indek ?></td>
			<td><?php echo $biodata_ibu_hamil->id_nama ?></td>
			<td><?php echo $biodata_ibu_hamil->alamat ?></td>
			<td><?php echo $biodata_ibu_hamil->id_umur ?></td>
			<td><?php echo $biodata_ibu_hamil->hamil_ke ?></td>
			<td><?php echo $biodata_ibu_hamil->bb_tb ?></td>
			<td><?php echo $biodata_ibu_hamil->lila_mt ?></td>
			<td><?php echo $biodata_ibu_hamil->hb_goldar ?></td>
			<td><?php echo $biodata_ibu_hamil->tensi ?></td>
			<td><?php echo $biodata_ibu_hamil->id_resiko ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('biodata_ibu_hamil/read/'.$biodata_ibu_hamil->id_ibu_hamil),'Read'); 
				echo ' | '; 
				echo anchor(site_url('biodata_ibu_hamil/update/'.$biodata_ibu_hamil->id_ibu_hamil),'Update'); 
				echo ' | '; 
				echo anchor(site_url('biodata_ibu_hamil/delete/'.$biodata_ibu_hamil->id_ibu_hamil),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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