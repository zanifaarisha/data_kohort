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
        <h2 style="margin-top:0px">Tbl_penolak_persalinan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nakes Kongisten <?php echo form_error('nakes_kongisten') ?></label>
            <input type="text" class="form-control" name="nakes_kongisten" id="nakes_kongisten" placeholder="Nakes Kongisten" value="<?php echo $nakes_kongisten; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Dukun <?php echo form_error('dukun') ?></label>
            <input type="text" class="form-control" name="dukun" id="dukun" placeholder="Dukun" value="<?php echo $dukun; ?>" />
        </div>
	    <input type="hidden" name="id_persalinan" value="<?php echo $id_persalinan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('penolak_persalinan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>