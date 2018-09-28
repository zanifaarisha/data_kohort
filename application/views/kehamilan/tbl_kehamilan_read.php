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
        <h2 style="margin-top:0px">Tbl_kehamilan Read</h2>
        <table class="table">
	    <tr><td>Jarakk Kehamilan</td><td><?php echo $jarakk_kehamilan; ?></td></tr>
	    <tr><td>Id Imunisasi</td><td><?php echo $id_imunisasi; ?></td></tr>
	    <tr><td>Buku Kia Pasang Stiker</td><td><?php echo $buku_kia_pasang_stiker; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kehamilan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>