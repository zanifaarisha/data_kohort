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
        <h2 style="margin-top:0px">Tbl_biodata_bayi Read</h2>
        <table class="table">
	    <tr><td>No Urut</td><td><?php echo $no_urut; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama Bayi</td><td><?php echo $nama_bayi; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis kelamin; ?></td></tr>
	    <tr><td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Tlp</td><td><?php echo $no_tlp; ?></td></tr>
	    <tr><td>Punya Buku Kia</td><td><?php echo $punya_buku_kia; ?></td></tr>
	    <tr><td>Berat Panjang</td><td><?php echo $berat_panjang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('biodata_bayi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>