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
        <h2 style="margin-top:0px">Tbl_nifas Read</h2>
        <table class="table">
	    <tr><td>6jam 3hr</td><td><?php echo $6jam_3hr; ?></td></tr>
	    <tr><td>4 28hr</td><td><?php echo $4_28hr; ?></td></tr>
	    <tr><td>29 42hr</td><td><?php echo $29_42hr; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('nifas') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>