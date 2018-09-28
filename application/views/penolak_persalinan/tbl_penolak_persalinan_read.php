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
        <h2 style="margin-top:0px">Tbl_penolak_persalinan Read</h2>
        <table class="table">
	    <tr><td>Nakes Kongisten</td><td><?php echo $nakes_kongisten; ?></td></tr>
	    <tr><td>Dukun</td><td><?php echo $dukun; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('penolak_persalinan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>