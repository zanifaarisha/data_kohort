
        <h2 style="margin-top:0px">Tbl_nifas <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">6jam 3hr <?php echo form_error('6jam_3hr') ?></label>
            <input type="text" class="form-control" name="6jam_3hr" id="6jam_3hr" placeholder="6jam 3hr" value="<?php echo $enamjam_3hr; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">4 28hr <?php echo form_error('4_28hr') ?></label>
            <input type="text" class="form-control" name="4_28hr" id="4_28hr" placeholder="4 28hr" value="<?php echo $empat_28hr; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">29 42hr <?php echo form_error('29_42hr') ?></label>
            <input type="text" class="form-control" name="29_42hr" id="29_42hr" placeholder="29 42hr" value="<?php echo $duasembilan_42hr; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ket <?php echo form_error('ket') ?></label>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
	    <input type="hidden" name="id_nifas" value="<?php echo $id_nifas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('nifas') ?>" class="btn btn-default">Cancel</a>
	</form>
