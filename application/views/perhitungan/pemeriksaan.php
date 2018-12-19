<div class="container">
<div class="row box">
    <div class="col-md-6">

        <!-- <h2 style="margin-top:0px">Form Kohort Ibu </h2> -->
        <!-- <form action="<?php echo base_url()?>perhitungan/pemeriksaan" method="post" id="form2" > -->
        <?php if($this->session->flashdata('success') ): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->flashdata('success') ?>
              </div>
            <?php endif ?>
            
        <h3>Pemeriksaan Kunjungan </h3>
            
            <div class="form-group">
                <!-- <label for="id_pasien">Pilih Pasien</label> -->
                <select name="id_pasien" id="id_pasien" class="form-control" >
                    <option value='' >Pilih Pasien</option>
                    <?php foreach($pasien as $list): ?>
                    <option value="<?php echo $list->id ?>"><?php echo $list->nama ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="control-pemeriksaan" style="display:none;" >
                <p>Data Kunjungan</p>
                <select name="k" id="k" class="form-control" >
                    <option value="k0">Pilih</option>
                    <option value="k1">K-1</option>
                    <option value="k2">K-2</option>
                    <option value="k3">K-3</option>
                    <option value="k4">K-4</option>
                </select>

                <table class="table table-responsive table-stripped" >
                    <thead>
                        <tr>
                            <th>Status Kunjungan</th>
                            <th>Nilai Kunjungan</th>
                            <th>Status Pemeriksaan</th>
                            <th>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>K1</td>
                            <td id="nk1" ></td>
                            <td id="sp1" ></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>K2</td>
                            <td id="nk2"></td>
                            <td id="sp2"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>K3</td>
                            <td id="nk3"></td>
                            <td id="sp3"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>K4</td>
                            <td id="nk4"></td>
                            <td id="sp4"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>ANC Akhir</td>
                            <td id="anc_akhir"></td>
                            <td id="keterangan"></td>
                            <td></td>
                        </tr>
                        

                        <tr class="control-kunjungan" style="display:none" >
                        <p id="ket"></p>

                            <td>
                                <label for="tekanan_darah">tekanan darah</label>
                                <input type="number" name="tekanan_darah" id="tekanan_darah" >
                            </td>
                            <td>
                                <label for="berat_badan">berat badan</label>
                                <input type="number" name="berat_badan" id="berat_badan" > 
                            </td>
                            <td>
                                <label for="lingkar_perut">lingkar perut</label>
                                <input type="number" name="lingkar_perut" id="lingkar_perut" > 
                            </td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-success btn-sm" id="btn-periksa" >Periksa</button></td>
                        </tr>
                        
                    </tbody>
                </table>


                
                <!-- <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>

                <div class="form-group">
                    <button type="submit" name="submit" id="btnProcess" class="btn btn-primary">Proses</button> 
                </div> -->

            </div>


            
        <!-- </form> -->

    </div>
</div>

<script type="text/javascript">

$(document).ready(function() {

    // $('#anc_akhir').text($('#nk1').text()+$('#nk2').text()+$('#nk3').text()+$('#nk4').text());
    $('#id_pasien').on('change', function() {
        // alert( this.value );
        var v = this.value;
        // alert(v);

        $('.control-pemeriksaan').css('display','');
        $("#k option[value='k0']").prop('selected', true);
        $('.control-kunjungan').css('display','none');
        $('#ket').text('');
        if (v !='' ) {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>perhitungan/get_pemeriksaan',
                data:{ id_pasien: v },
                dataType: 'JSON',
                success: function(response) {
                        // alert(response.data);
                        // console.log(response);

                    var data = response.data;
                    var nu_nk = 1;
                    var nu_sp = 1;
                    if (response.data != 'no data') {
                        data.forEach(function(k){

                            var nk = k.nilai_kunjungan;
                            var sp = k.status;
                        
                            $('#nk'+nu_nk++).text(nk);
                            $('#sp'+nu_sp++).text(sp);
                            $('#anc_akhir').val(response.anc_akhir.anc / response.anc_awal.anc_awal );


                        });
                    }else{
                        for (let i = 1; i < 5; i++) {
                            $('#nk'+i).text('');
                            $('#sp'+i).text('');
                        }
                        alert('Isi Form Pelayanan Terlebih dahulu pada menu ANC');

                    }
                }
           });
        }
    });

     $('#k').on('change', function() {
        // alert( this.value );
        var v = this.value;
        var  id_p = $('#id_pasien').val();

        // $('#tekanan_darah').val('');
        // $('#berat_badan').val('');
        // $('#lingkar_perut').val('');

          $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>perhitungan/get_pemeriksaan_row',
                data:{ id_pasien: id_p, kunjungan:v },
                dataType: 'JSON',
                success: function(response) {
                        // alert(response.data);
                        var data = response.data;
                        var td = data.tekanan_darah;
                        var bb = data.berat_badan;
                        var lp = data.lingkar_perut;

                        $('#tekanan_darah').val(td);
                        $('#berat_badan').val(bb);
                        $('#lingkar_perut').val(lp);
                        $('#anc_akhir').val(response.anc_akhir.anc / response.anc_awal.anc_awal);


                }
           });

        if(v == 'k0'){
            $('#ket').text('');
            $('.control-kunjungan').css('display','none');

        }else{
            $('.control-kunjungan').css('display','');
            if(v == 'k1'){
                $('#ket').text('Data Kunjungan pertama (K-1)');
            }else if(v == 'k2'){
                $('#ket').text('Data Kunjungan kedua (K-2)');
            }
            else if(v == 'k3'){
                $('#ket').text('Data Kunjungan ketiga (K-3)');
            }else if(v == 'k4'){
                $('#ket').text('Data Kunjungan keempat (K-4)');
            }
        }
        
    });

    $('#btn-periksa').on('click', function() {
        // alert( $('#id_pasien').val() );
        var  id_p = $('#id_pasien').val();
        var  k = $('#k').val();
        var  td = $('#tekanan_darah').val();
        var  bb = $('#berat_badan').val();
        var  lp = $('#lingkar_perut').val();
        $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>perhitungan/update_pemeriksaan',
                data:{ id_pasien: id_p, kunjungan:k, tekanan_darah:td, berat_badan:bb, lingkar_perut:lp },
                dataType: 'JSON',
                success: function(response) {
                        // alert(response.data);
                        // console.log(response);
                        var data = response.data;
                        var anc = response.anc_akhir;
                        var nu_nk = 1;
                        var nu_sp = 1;
                        data.forEach(function(k){
                            var nk = k.nilai_kunjungan;
                            var sp = k.status;
                        
                            $('#nk'+nu_nk++).text(nk);
                            $('#sp'+nu_sp++).text(sp);

            

                        });

                        if (anc) {
                            // if (response.data.kunjungan_ke == ) {
                                
                            // }
                                // alert(anc.anc_akhir);
                                $('#anc_akhir').text(anc.anc / response.anc_awal.anc_awal);
                                var ket ='';
                                if (anc.anc <200) {
                                    ket = 'penanganan nifas secara caesar dan memungkinan mengakibatkan meninggalnya ibu hamil dan anak cukup tinggi.';
                                }else if(anc.anc >= 200 && anc.anc<=300){
                                    ket = 'penanganan nifas secara normal dengan kemungkinan meninggalnya ibu hamil dan anak cukup rendah.';
                                }else if(anc.anc > 300){
                                    ket = 'penanganan nifas secara caesar dan memungkinan mengakibatkan meninggalnya ibu hamil dan anak cukup tinggi';
                                }

                                $('#keterangan').text(ket);
                                // console.log(anc.anc);
                        }
                        // $('#keterangan').text('adasd');


                }
           });
        

    });
});

</script>
</div>