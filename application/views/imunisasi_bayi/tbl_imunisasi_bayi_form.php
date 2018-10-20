
        <h2 style="margin-top:0px">Tbl_imunisasi_bayi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Hb-7hr <?php echo form_error('hb-7hr') ?></label>
            <input type="text" class="form-control" name="hb-7hr" id="hb_7hr" placeholder="Hb 7hr" value="<?php echo $hb_7hr; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Polio 1 <?php echo form_error('polio 1') ?></label>
            <input type="text" class="form-control" name="polio 1" id="polio 1" placeholder="Polio 1" value="<?php echo $polio_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Polio 2 <?php echo form_error('polio 2') ?></label>
            <input type="text" class="form-control" name="polio 2" id="polio 2" placeholder="Polio 2" value="<?php echo $polio_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Polio 3 <?php echo form_error('polio 3') ?></label>
            <input type="text" class="form-control" name="polio 3" id="polio 3" placeholder="Polio 3" value="<?php echo $polio_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Polio 4 <?php echo form_error('polio 4') ?></label>
            <input type="text" class="form-control" name="polio 4" id="polio 4" placeholder="Polio 4" value="<?php echo $polio_4; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Campak <?php echo form_error('campak') ?></label>
            <input type="text" class="form-control" name="campak" id="campak" placeholder="Campak" value="<?php echo $campak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IDL <?php echo form_error('IDL') ?></label>
            <input type="text" class="form-control" name="IDL" id="IDL" placeholder="IDL" value="<?php echo $IDL; ?>" />
        </div>
	    <input type="hidden" name="id_imunisasi" value="<?php echo $id_imunisasi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('imunisasi_bayi') ?>" class="btn btn-default">Cancel</a>
	</form>
