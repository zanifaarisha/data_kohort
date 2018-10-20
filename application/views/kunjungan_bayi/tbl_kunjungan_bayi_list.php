
        <h2 style="margin-top:0px">Tbl_kunjungan_bayi List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('kunjungan_bayi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('kunjungan_bayi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('kunjungan_bayi'); ?>" class="btn btn-default">Reset</a>
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
		<th>Action</th>
            </tr><?php
            foreach ($kunjungan_bayi_data as $kunjungan_bayi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $kunjungan_bayi->id_tahun_pertama ?></td>
			<td><?php echo $kunjungan_bayi->id_tahun_kedua ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('kunjungan_bayi/read/'.$kunjungan_bayi->id_kunjungan_bayi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('kunjungan_bayi/update/'.$kunjungan_bayi->id_kunjungan_bayi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('kunjungan_bayi/delete/'.$kunjungan_bayi->id_kunjungan_bayi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
