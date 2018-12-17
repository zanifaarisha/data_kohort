<div class="row">
    <div class="col-md-6">

        <!-- <h2 style="margin-top:0px">Form Kohort Ibu </h2> -->
        <form action="<?php echo $action; ?>" method="post">
        <h3>Form Pelayanan Kohort</h3>
            
            <div class="form-group">
                <select name="id_pasien" id="" class="form-control" >
                    <option >Pilih Pasien</option>
                    <?php foreach($pasien as $list): ?>
                    <option value="<?php echo $list->id ?>"><?php echo $list->nama ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tgl_hpht">Tanggal HPHT(Hari Pertama Haid Terakhir)</label>
                <input type="date" name="tgl_hpht" class="form-control" >
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="obsetri" value="obsetri">Belum Pernah Obsetri</label>
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="paritas" value="paritas">Belum Pernah Paritas</label>
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="jarak_kehamilan" value="jarak_kehamilan" >jarak Kehamilan < 2 Tahun</label>
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="umur" value="umur" >umur pasien 25-35 Tahun</label>
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="komplikasi" value="komplikasi" >Belum Pernah komplikasi</label>
                    </div>
                    
                </div>
            </div>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Proses</button> 
            </div>

            
        </form>

    </div>
</div>