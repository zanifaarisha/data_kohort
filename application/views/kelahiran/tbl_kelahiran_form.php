
        <h2 style="margin-top:0px">Tbl_kelahiran <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Lahir Mati <?php echo form_error('lahir_mati') ?></label>
            <input type="text" class="form-control" name="lahir_mati" id="lahir_mati" placeholder="Lahir Mati" value="<?php echo $lahir_mati; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lahir Hidup <?php echo form_error('lahir_hidup') ?></label>
            <input type="text" class="form-control" name="lahir_hidup" id="lahir_hidup" placeholder="Lahir Hidup" value="<?php echo $lahir_hidup; ?>" />
        </div>
	    <input type="hidden" name="id_kelahiran" value="<?php echo $id_kelahiran; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kelahiran') ?>" class="btn btn-default">Cancel</a>
	</form>
 