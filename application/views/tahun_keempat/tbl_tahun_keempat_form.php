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
        <h2 style="margin-top:0px">Tbl_tahun_keempat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Jan <?php echo form_error('jan') ?></label>
            <input type="text" class="form-control" name="jan" id="jan" placeholder="Jan" value="<?php echo $jan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Feb <?php echo form_error('feb') ?></label>
            <input type="text" class="form-control" name="feb" id="feb" placeholder="Feb" value="<?php echo $feb; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Maret <?php echo form_error('maret') ?></label>
            <input type="text" class="form-control" name="maret" id="maret" placeholder="Maret" value="<?php echo $maret; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">April <?php echo form_error('april') ?></label>
            <input type="text" class="form-control" name="april" id="april" placeholder="April" value="<?php echo $april; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mei <?php echo form_error('mei') ?></label>
            <input type="text" class="form-control" name="mei" id="mei" placeholder="Mei" value="<?php echo $mei; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Juni <?php echo form_error('juni') ?></label>
            <input type="text" class="form-control" name="juni" id="juni" placeholder="Juni" value="<?php echo $juni; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">July <?php echo form_error('july') ?></label>
            <input type="text" class="form-control" name="july" id="july" placeholder="July" value="<?php echo $july; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Agst <?php echo form_error('agst') ?></label>
            <input type="text" class="form-control" name="agst" id="agst" placeholder="Agst" value="<?php echo $agst; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sept <?php echo form_error('sept') ?></label>
            <input type="text" class="form-control" name="sept" id="sept" placeholder="Sept" value="<?php echo $sept; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Okt <?php echo form_error('okt') ?></label>
            <input type="text" class="form-control" name="okt" id="okt" placeholder="Okt" value="<?php echo $okt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nov <?php echo form_error('nov') ?></label>
            <input type="text" class="form-control" name="nov" id="nov" placeholder="Nov" value="<?php echo $nov; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Des <?php echo form_error('des') ?></label>
            <input type="text" class="form-control" name="des" id="des" placeholder="Des" value="<?php echo $des; ?>" />
        </div>
	    <input type="hidden" name="id_tahun_keempat" value="<?php echo $id_tahun_keempat; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tahun_keempat') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>