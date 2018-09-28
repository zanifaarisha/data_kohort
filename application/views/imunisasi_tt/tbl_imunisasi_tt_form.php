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
        <h2 style="margin-top:0px">Tbl_imunisasi_tt <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Status Imunisasi Tt <?php echo form_error('status_imunisasi_tt') ?></label>
            <input type="text" class="form-control" name="status_imunisasi_tt" id="status_imunisasi_tt" placeholder="Status Imunisasi Tt" value="<?php echo $status_imunisasi_tt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pemberian Imunisasi Tt <?php echo form_error('pemberian_imunisasi_tt') ?></label>
            <input type="text" class="form-control" name="pemberian_imunisasi_tt" id="pemberian_imunisasi_tt" placeholder="Pemberian Imunisasi Tt" value="<?php echo $pemberian_imunisasi_tt; ?>" />
        </div>
	    <input type="hidden" name="id_imunisasi" value="<?php echo $id_imunisasi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('imunisasi_tt') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>