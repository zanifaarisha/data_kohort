
        <h2 style="margin-top:0px">Tbl_kehamilan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Jarakk Kehamilan <?php echo form_error('jarakk_kehamilan') ?></label>
            <input type="text" class="form-control" name="jarakk_kehamilan" id="jarakk_kehamilan" placeholder="Jarakk Kehamilan" value="<?php echo $jarakk_kehamilan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Imunisasi <?php echo form_error('id_imunisasi') ?></label>
            <input type="text" class="form-control" name="id_imunisasi" id="id_imunisasi" placeholder="Id Imunisasi" value="<?php echo $id_imunisasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Buku Kia Pasang Stiker <?php echo form_error('buku_kia_pasang_stiker') ?></label>
            <input type="text" class="form-control" name="buku_kia_pasang_stiker" id="buku_kia_pasang_stiker" placeholder="Buku Kia Pasang Stiker" value="<?php echo $buku_kia_pasang_stiker; ?>" />
        </div>
	    <input type="hidden" name="id_kehamilan" value="<?php echo $id_kehamilan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kehamilan') ?>" class="btn btn-default">Cancel</a>
	</form>
