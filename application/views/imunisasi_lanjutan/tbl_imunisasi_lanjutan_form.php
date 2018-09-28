<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_imunisasi_lanjutan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Dpt Hb Hib <?php echo form_error('dpt_hb_hib') ?></label>
            <input type="text" class="form-control" name="dpt_hb_hib" id="dpt_hb_hib" placeholder="Dpt Hb Hib" value="<?php echo $dpt_hb_hib; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Campak <?php echo form_error('Campak') ?></label>
            <input type="text" class="form-control" name="Campak" id="Campak" placeholder="Campak" value="<?php echo $Campak; ?>" />
        </div>
	    <input type="hidden" name="id_imunisasi" value="<?php echo $id_imunisasi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('imunisasi_lanjutan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>