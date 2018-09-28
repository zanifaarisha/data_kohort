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
        <h2 style="margin-top:0px">Tbl_nama Read</h2>
        <table class="table">
	    <tr><td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td></tr>
	    <tr><td>Nama Suami</td><td><?php echo $nama_suami; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('nama') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>