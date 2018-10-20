
        <h2 style="margin-top:0px">Tbl_nama <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Ibu <?php echo form_error('nama_ibu') ?></label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Suami <?php echo form_error('nama_suami') ?></label>
            <input type="text" class="form-control" name="nama_suami" id="nama_suami" placeholder="Nama Suami" value="<?php echo $nama_suami; ?>" />
        </div>
	    <input type="hidden" name="id_nama" value="<?php echo $id_nama; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('nama') ?>" class="btn btn-default">Cancel</a>
	    </form>
