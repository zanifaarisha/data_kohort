
        <h2 style="margin-top:0px">Tbl_kunjungan_bayi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Tahun Pertama <?php echo form_error('id_tahun_pertama') ?></label>
            <input type="text" class="form-control" name="id_tahun_pertama" id="id_tahun_pertama" placeholder="Id Tahun Pertama" value="<?php echo $id_tahun_pertama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Tahun Kedua <?php echo form_error('id_tahun_kedua') ?></label>
            <input type="text" class="form-control" name="id_tahun_kedua" id="id_tahun_kedua" placeholder="Id Tahun Kedua" value="<?php echo $id_tahun_kedua; ?>" />
        </div>
	    <input type="hidden" name="id_kunjungan_bayi" value="<?php echo $id_kunjungan_bayi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kunjungan_bayi') ?>" class="btn btn-default">Cancel</a>
	</form>
