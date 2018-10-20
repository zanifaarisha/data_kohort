
        <h2 style="margin-top:0px">Tbl_pendeteksi_faktor_resiko List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pendeteksi_faktor_resiko/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pendeteksi_faktor_resiko/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pendeteksi_faktor_resiko'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nakes</th>
		<th>Masyarakat</th>
		<th>Action</th>
            </tr><?php
            foreach ($pendeteksi_faktor_resiko_data as $pendeteksi_faktor_resiko)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pendeteksi_faktor_resiko->nakes ?></td>
			<td><?php echo $pendeteksi_faktor_resiko->masyarakat ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pendeteksi_faktor_resiko/read/'.$pendeteksi_faktor_resiko->id_resiko),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pendeteksi_faktor_resiko/update/'.$pendeteksi_faktor_resiko->id_resiko),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pendeteksi_faktor_resiko/delete/'.$pendeteksi_faktor_resiko->id_resiko),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
