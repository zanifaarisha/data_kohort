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
        <h2 style="margin-top:0px">Tbl_pendeteksi_faktor_resiko <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Nakes <?php echo form_error('nakes') ?></label>
            <input type="text" class="form-control" name="nakes" id="nakes" placeholder="Nakes" value="<?php echo $nakes; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Masyarakat <?php echo form_error('masyarakat') ?></label>
            <input type="text" class="form-control" name="masyarakat" id="masyarakat" placeholder="Masyarakat" value="<?php echo $masyarakat; ?>" />
        </div>
	    <input type="hidden" name="id_resiko" value="<?php echo $id_resiko; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pendeteksi_faktor_resiko') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>