
        <h2 style="margin-top:0px">Tbl_kunjungan_neonatal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Pertama <?php echo form_error('pertama') ?></label>
            <input type="text" class="form-control" name="pertama" id="pertama" placeholder="Pertama" value="<?php echo $pertama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kedua <?php echo form_error('kedua') ?></label>
            <input type="text" class="form-control" name="kedua" id="kedua" placeholder="Kedua" value="<?php echo $kedua; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ketiga <?php echo form_error('ketiga') ?></label>
            <input type="text" class="form-control" name="ketiga" id="ketiga" placeholder="Ketiga" value="<?php echo $ketiga; ?>" />
        </div>
	    <input type="hidden" name="id_kunjungan_neonatal" value="<?php echo $id_kunjungan_neonatal; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kunjungan_neonatal') ?>" class="btn btn-default">Cancel</a>
	</form>
