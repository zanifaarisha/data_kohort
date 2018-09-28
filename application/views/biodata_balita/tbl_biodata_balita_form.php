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
        <h2 style="margin-top:0px">Tbl_biodata_balita <?php echo $button ?></h2>
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
            <label for="varchar">Nama Anak <?php echo form_error('nama_anak') ?></label>
            <input type="text" class="form-control" name="nama_anak" id="nama_anak" placeholder="Nama Anak" value="<?php echo $nama_anak; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
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
	    <input type="hidden" name="id_balita" value="<?php echo $id_balita; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('biodata_balita') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>