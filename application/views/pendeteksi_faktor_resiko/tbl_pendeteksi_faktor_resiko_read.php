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
        <h2 style="margin-top:0px">Tbl_pendeteksi_faktor_resiko Read</h2>
        <table class="table">
	    <tr><td>Nakes</td><td><?php echo $nakes; ?></td></tr>
	    <tr><td>Masyarakat</td><td><?php echo $masyarakat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pendeteksi_faktor_resiko') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>