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
        <h2 style="margin-top:0px">Tbl_biodata_ibu_hamil Read</h2>
        <table class="table">
	    <tr><td>No Urut</td><td><?php echo $no_urut; ?></td></tr>
	    <tr><td>No Indek</td><td><?php echo $no_indek; ?></td></tr>
	    <tr><td>Id Nama</td><td><?php echo $id_nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Id Umur</td><td><?php echo $id_umur; ?></td></tr>
	    <tr><td>Hamil Ke</td><td><?php echo $hamil_ke; ?></td></tr>
	    <tr><td>Bb Tb</td><td><?php echo $bb_tb; ?></td></tr>
	    <tr><td>Lila Mt</td><td><?php echo $lila_mt; ?></td></tr>
	    <tr><td>Hb Goldar</td><td><?php echo $hb_goldar; ?></td></tr>
	    <tr><td>Tensi</td><td><?php echo $tensi; ?></td></tr>
	    <tr><td>Id Resiko</td><td><?php echo $id_resiko; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('biodata_ibu_hamil') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>