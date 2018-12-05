
        <h2 style="margin-top:0px">Tbl_biodata_bayi List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('biodata_bayi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('biodata_bayi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('biodata_bayi'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama Bayi</th>
		<th>Tgl Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Nama Ibu</th>
		<th>Alamat</th>
		<th>No Tlp</th>
		<th>Berat Panjang</th>
		<th>Action</th>
            </tr><?php
            foreach ($biodata_bayi_data as $biodata_bayi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $biodata_bayi->no_urut ?></td>
			<td><?php echo $biodata_bayi->nik ?></td>
			<td><?php echo $biodata_bayi->nama_bayi ?></td>
			<td><?php echo $biodata_bayi->tgl_lahir ?></td>
			<td><?php echo $biodata_bayi->jenis_kelamin ?></td>
			<td><?php echo $biodata_bayi->nama_ibu ?></td>
			<td><?php echo $biodata_bayi->alamat ?></td>
			<td><?php echo $biodata_bayi->no_tlp ?></td>
			<td><?php echo $biodata_bayi->berat_panjang ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('biodata_bayi/read/'.$biodata_bayi->id_bayi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('biodata_bayi/update/'.$biodata_bayi->id_bayi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('biodata_bayi/delete/'.$biodata_bayi->id_bayi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
