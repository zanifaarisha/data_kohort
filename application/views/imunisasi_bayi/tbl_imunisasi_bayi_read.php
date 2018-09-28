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
        <h2 style="margin-top:0px">Tbl_imunisasi_bayi Read</h2>
        <table class="table">
	    <tr><td>Hb-7hr</td><td><?php echo $hb-7hr; ?></td></tr>
	    <tr><td>Polio 1</td><td><?php echo $polio 1; ?></td></tr>
	    <tr><td>Polio 2</td><td><?php echo $polio 2; ?></td></tr>
	    <tr><td>Polio 3</td><td><?php echo $polio 3; ?></td></tr>
	    <tr><td>Polio 4</td><td><?php echo $polio 4; ?></td></tr>
	    <tr><td>Campak</td><td><?php echo $campak; ?></td></tr>
	    <tr><td>IDL</td><td><?php echo $IDL; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('imunisasi_bayi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>