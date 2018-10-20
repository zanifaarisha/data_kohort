
        <h2 style="margin-top:0px">Tbl_meninggal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Tgl Penyebab Kematian <?php echo form_error('tgl_penyebab_kematian') ?></label>
            <input type="text" class="form-control" name="tgl_penyebab_kematian" id="tgl_penyebab_kematian" placeholder="Tgl Penyebab Kematian" value="<?php echo $tgl_penyebab_kematian; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ket <?php echo form_error('ket') ?></label>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
	    <input type="hidden" name="id_meninggal" value="<?php echo $id_meninggal; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('meninggal') ?>" class="btn btn-default">Cancel</a>
	</form>
