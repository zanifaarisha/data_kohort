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
        <h2 style="margin-top:0px">Tbl_umur <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Umur Ibu <?php echo form_error('umur_ibu') ?></label>
            <input type="text" class="form-control" name="umur_ibu" id="umur_ibu" placeholder="Umur Ibu" value="<?php echo $umur_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kehamilan Ibu <?php echo form_error('kehamilan_ibu') ?></label>
            <input type="text" class="form-control" name="kehamilan_ibu" id="kehamilan_ibu" placeholder="Kehamilan Ibu" value="<?php echo $kehamilan_ibu; ?>" />
        </div>
	    <input type="hidden" name="id_umur" value="<?php echo $id_umur; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('umur') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>