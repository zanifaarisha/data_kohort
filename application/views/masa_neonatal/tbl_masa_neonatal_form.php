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
        <h2 style="margin-top:0px">Tbl_masa_neonatal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Kunjungan Neonatal <?php echo form_error('id_kunjungan_neonatal') ?></label>
            <input type="text" class="form-control" name="id_kunjungan_neonatal" id="id_kunjungan_neonatal" placeholder="Id Kunjungan Neonatal" value="<?php echo $id_kunjungan_neonatal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lahir 5jam <?php echo form_error('lahir_5jam') ?></label>
            <input type="text" class="form-control" name="lahir_5jam" id="lahir_5jam" placeholder="Lahir 5jam" value="<?php echo $lahir_5jam; ?>" />
        </div>
	    <input type="hidden" name="id_masa_neonatal" value="<?php echo $id_masa_neonatal; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('masa_neonatal') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>