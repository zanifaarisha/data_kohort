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
        <h2 style="margin-top:0px">Tbl_kunjungan_neonatal Read</h2>
        <table class="table">
	    <tr><td>Pertama</td><td><?php echo $pertama; ?></td></tr>
	    <tr><td>Kedua</td><td><?php echo $kedua; ?></td></tr>
	    <tr><td>Ketiga</td><td><?php echo $ketiga; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kunjungan_neonatal') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>