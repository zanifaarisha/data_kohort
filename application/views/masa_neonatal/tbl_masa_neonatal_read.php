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
        <h2 style="margin-top:0px">Tbl_masa_neonatal Read</h2>
        <table class="table">
	    <tr><td>Id Kunjungan Neonatal</td><td><?php echo $id_kunjungan_neonatal; ?></td></tr>
	    <tr><td>Lahir 5jam</td><td><?php echo $lahir_5jam; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('masa_neonatal') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>