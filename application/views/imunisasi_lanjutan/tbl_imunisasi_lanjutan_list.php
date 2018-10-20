
        <h2 style="margin-top:0px">Tbl_imunisasi_lanjutan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('imunisasi_lanjutan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('imunisasi_lanjutan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('imunisasi_lanjutan'); ?>" class="btn btn-default">Reset</a>
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
		<th>Dpt Hb Hib</th>
		<th>Campak</th>
		<th>Action</th>
            </tr><?php
            foreach ($imunisasi_lanjutan_data as $imunisasi_lanjutan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $imunisasi_lanjutan->dpt_hb_hib ?></td>
			<td><?php echo $imunisasi_lanjutan->Campak ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('imunisasi_lanjutan/read/'.$imunisasi_lanjutan->id_imunisasi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('imunisasi_lanjutan/update/'.$imunisasi_lanjutan->id_imunisasi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('imunisasi_lanjutan/delete/'.$imunisasi_lanjutan->id_imunisasi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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