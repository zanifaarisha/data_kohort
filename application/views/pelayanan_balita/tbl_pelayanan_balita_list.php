
        <h2 style="margin-top:0px">Tbl_pelayanan_balita List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pelayanan_balita/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pelayanan_balita/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pelayanan_balita'); ?>" class="btn btn-default">Reset</a>
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
		<th>Id Tahun Pertama</th>
		<th>Id Tahun Kedua</th>
		<th>Id Tahun Ketiga</th>
		<th>Id Tahun Keempat</th>
		<th>Id Tahun Kelima</th>
		<th>Action</th>
            </tr><?php
            foreach ($pelayanan_balita_data as $pelayanan_balita)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pelayanan_balita->id_tahun_pertama ?></td>
			<td><?php echo $pelayanan_balita->id_tahun_kedua ?></td>
			<td><?php echo $pelayanan_balita->id_tahun_ketiga ?></td>
			<td><?php echo $pelayanan_balita->id_tahun_keempat ?></td>
			<td><?php echo $pelayanan_balita->id_tahun_kelima ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pelayanan_balita/read/'.$pelayanan_balita->id_pelayanan_balita),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pelayanan_balita/update/'.$pelayanan_balita->id_pelayanan_balita),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pelayanan_balita/delete/'.$pelayanan_balita->id_pelayanan_balita),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
