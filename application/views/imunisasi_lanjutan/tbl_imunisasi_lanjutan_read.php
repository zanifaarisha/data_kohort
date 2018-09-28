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
        <h2 style="margin-top:0px">Tbl_imunisasi_lanjutan Read</h2>
        <table class="table">
	    <tr><td>Dpt Hb Hib</td><td><?php echo $dpt_hb_hib; ?></td></tr>
	    <tr><td>Campak</td><td><?php echo $Campak; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('imunisasi_lanjutan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>