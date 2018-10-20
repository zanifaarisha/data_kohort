
        <h2 style="margin-top:0px">Tbl_biodata_ibu_hamil <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Urut <?php echo form_error('no_urut') ?></label>
            <input type="text" class="form-control" name="no_urut" id="no_urut" placeholder="No Urut" value="<?php echo $no_urut; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Indek <?php echo form_error('no_indek') ?></label>
            <input type="text" class="form-control" name="no_indek" id="no_indek" placeholder="No Indek" value="<?php echo $no_indek; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Nama <?php echo form_error('id_nama') ?></label>
            <input type="text" class="form-control" name="id_nama" id="id_nama" placeholder="Id Nama" value="<?php echo $id_nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Umur <?php echo form_error('id_umur') ?></label>
            <input type="text" class="form-control" name="id_umur" id="id_umur" placeholder="Id Umur" value="<?php echo $id_umur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hamil Ke <?php echo form_error('hamil_ke') ?></label>
            <input type="text" class="form-control" name="hamil_ke" id="hamil_ke" placeholder="Hamil Ke" value="<?php echo $hamil_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bb Tb <?php echo form_error('bb_tb') ?></label>
            <input type="text" class="form-control" name="bb_tb" id="bb_tb" placeholder="Bb Tb" value="<?php echo $bb_tb; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lila Mt <?php echo form_error('lila_mt') ?></label>
            <input type="text" class="form-control" name="lila_mt" id="lila_mt" placeholder="Lila Mt" value="<?php echo $lila_mt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hb Goldar <?php echo form_error('hb_goldar') ?></label>
            <input type="text" class="form-control" name="hb_goldar" id="hb_goldar" placeholder="Hb Goldar" value="<?php echo $hb_goldar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tensi <?php echo form_error('tensi') ?></label>
            <input type="text" class="form-control" name="tensi" id="tensi" placeholder="Tensi" value="<?php echo $tensi; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Resiko <?php echo form_error('id_resiko') ?></label>
            <input type="text" class="form-control" name="id_resiko" id="id_resiko" placeholder="Id Resiko" value="<?php echo $id_resiko; ?>" />
        </div>
	    <input type="hidden" name="id_ibu_hamil" value="<?php echo $id_ibu_hamil; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('biodata_ibu_hamil') ?>" class="btn btn-default">Cancel</a>
	</form>