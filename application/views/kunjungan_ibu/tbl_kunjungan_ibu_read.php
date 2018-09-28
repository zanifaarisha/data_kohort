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
        <h2 style="margin-top:0px">Tbl_kunjungan_ibu Read</h2>
        <table class="table">
	    <tr><td>Id Tahun Pertama</td><td><?php echo $id_tahun_pertama; ?></td></tr>
	    <tr><td>Id Tahun Kedua</td><td><?php echo $id_tahun_kedua; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kunjungan_ibu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>