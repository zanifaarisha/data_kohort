
        <h2 style="margin-top:0px">Tbl_pelayanan_balita <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Tahun Pertama <?php echo form_error('id_tahun_pertama') ?></label>
            <input type="text" class="form-control" name="id_tahun_pertama" id="id_tahun_pertama" placeholder="Id Tahun Pertama" value="<?php echo $id_tahun_pertama; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Tahun Kedua <?php echo form_error('id_tahun_kedua') ?></label>
            <input type="text" class="form-control" name="id_tahun_kedua" id="id_tahun_kedua" placeholder="Id Tahun Kedua" value="<?php echo $id_tahun_kedua; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Tahun Ketiga <?php echo form_error('id_tahun_ketiga') ?></label>
            <input type="text" class="form-control" name="id_tahun_ketiga" id="id_tahun_ketiga" placeholder="Id Tahun Ketiga" value="<?php echo $id_tahun_ketiga; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Tahun Keempat <?php echo form_error('id_tahun_keempat') ?></label>
            <input type="text" class="form-control" name="id_tahun_keempat" id="id_tahun_keempat" placeholder="Id Tahun Keempat" value="<?php echo $id_tahun_keempat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Tahun Kelima <?php echo form_error('id_tahun_kelima') ?></label>
            <input type="text" class="form-control" name="id_tahun_kelima" id="id_tahun_kelima" placeholder="Id Tahun Kelima" value="<?php echo $id_tahun_kelima; ?>" />
        </div>
	    <input type="hidden" name="id_pelayanan_balita" value="<?php echo $id_pelayanan_balita; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pelayanan_balita') ?>" class="btn btn-default">Cancel</a>
	</form>
  