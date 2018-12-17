<div class="row">
    <div class="col-md-6">

        <h2 style="margin-top:0px">Form Kohort Ibu </h2>
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="varchar">No Urut <?php echo form_error('no_urut') ?></label>
                <input type="text" class="form-control" name="no_urut" id="no_urut" placeholder="BIsmillah" />
            </div>
            
            <button type="submit" class="btn btn-primary">Proses</button> 
        </form>

    </div>
</div>