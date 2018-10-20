
        <h2 style="margin-top:0px">Tbl_kematian_post_natal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Ket <?php echo form_error('ket') ?></label>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
	    <input type="hidden" name="id_kematian" value="<?php echo $id_kematian; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kematian_post_natal') ?>" class="btn btn-default">Cancel</a>
	</form>
l>