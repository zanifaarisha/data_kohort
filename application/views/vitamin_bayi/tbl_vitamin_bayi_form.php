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
        <h2 style="margin-top:0px">Tbl_vitamin_bayi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Vit A <?php echo form_error('vit_A') ?></label>
            <input type="text" class="form-control" name="vit_A" id="vit_A" placeholder="Vit A" value="<?php echo $vit_A; ?>" />
        </div>
	    <input type="hidden" name="id_vitamin" value="<?php echo $id_vitamin; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('vitamin_bayi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>