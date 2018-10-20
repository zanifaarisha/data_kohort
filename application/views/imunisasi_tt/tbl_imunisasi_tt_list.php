
        <h2 style="margin-top:0px">Tbl_imunisasi_tt List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('imunisasi_tt/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('imunisasi_tt/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('imunisasi_tt'); ?>" class="btn btn-default">Reset</a>
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
		<th>Status Imunisasi Tt</th>
		<th>Pemberian Imunisasi Tt</th>
		<th>Action</th>
            </tr><?php
            foreach ($imunisasi_tt_data as $imunisasi_tt)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $imunisasi_tt->status_imunisasi_tt ?></td>
			<td><?php echo $imunisasi_tt->pemberian_imunisasi_tt ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('imunisasi_tt/read/'.$imunisasi_tt->id_imunisasi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('imunisasi_tt/update/'.$imunisasi_tt->id_imunisasi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('imunisasi_tt/delete/'.$imunisasi_tt->id_imunisasi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
