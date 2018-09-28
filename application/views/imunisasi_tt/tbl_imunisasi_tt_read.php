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
        <h2 style="margin-top:0px">Tbl_imunisasi_tt Read</h2>
        <table class="table">
	    <tr><td>Status Imunisasi Tt</td><td><?php echo $status_imunisasi_tt; ?></td></tr>
	    <tr><td>Pemberian Imunisasi Tt</td><td><?php echo $pemberian_imunisasi_tt; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('imunisasi_tt') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>