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
        <h2 style="margin-top:0px">Tbl_biodata_bayi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Urut <?php echo form_error('no_urut') ?></label>
            <input type="text" class="form-control" name="no_urut" id="no_urut" placeholder="No Urut" value="<?php echo $no_urut; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Bayi <?php echo form_error('nama_bayi') ?></label>
            <input type="text" class="form-control" name="nama_bayi" id="nama_bayi" placeholder="Nama Bayi" value="<?php echo $nama_bayi; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jenis kelamin') ?></label>
            <input type="text" class="form-control" name="jenis kelamin" id="jenis kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Ibu <?php echo form_error('nama_ibu') ?></label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Tlp <?php echo form_error('no_tlp') ?></label>
            <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Tlp" value="<?php echo $no_tlp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Punya Buku Kia <?php echo form_error('punya_buku_kia') ?></label>
            <input type="text" class="form-control" name="punya_buku_kia" id="punya_buku_kia" placeholder="Punya Buku Kia" value="<?php echo $punya_buku_kia; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Berat Panjang <?php echo form_error('berat_panjang') ?></label>
            <input type="text" class="form-control" name="berat_panjang" id="berat_panjang" placeholder="Berat Panjang" value="<?php echo $berat_panjang; ?>" />
        </div>
	    <input type="hidden" name="id_bayi" value="<?php echo $id_bayi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('biodata_bayi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>