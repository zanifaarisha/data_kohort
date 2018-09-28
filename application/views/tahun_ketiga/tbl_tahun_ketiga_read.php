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
        <h2 style="margin-top:0px">Tbl_tahun_ketiga Read</h2>
        <table class="table">
	    <tr><td>Jan</td><td><?php echo $jan; ?></td></tr>
	    <tr><td>Feb</td><td><?php echo $feb; ?></td></tr>
	    <tr><td>Maret</td><td><?php echo $maret; ?></td></tr>
	    <tr><td>April</td><td><?php echo $april; ?></td></tr>
	    <tr><td>Mei</td><td><?php echo $mei; ?></td></tr>
	    <tr><td>Juni</td><td><?php echo $juni; ?></td></tr>
	    <tr><td>July</td><td><?php echo $july; ?></td></tr>
	    <tr><td>Agst</td><td><?php echo $agst; ?></td></tr>
	    <tr><td>Sept</td><td><?php echo $sept; ?></td></tr>
	    <tr><td>Okt</td><td><?php echo $okt; ?></td></tr>
	    <tr><td>Nov</td><td><?php echo $nov; ?></td></tr>
	    <tr><td>Des</td><td><?php echo $des; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tahun_ketiga') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>