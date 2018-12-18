<div class="container">
<div class="row box">
    <div class="col-md-6">

        <!-- <h2 style="margin-top:0px">Form Kohort Ibu </h2> -->
     <table class="table table-responsive table-stripped">
        <thead>
            <tr>
                <th>Pasien</th>
                <th>ANC AWAL</th>
                <th>ANC AKHIR</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($anc_data as $list): ?>
            <tr>
                <td><?php echo $list->nama?> </td>
                <td><?php echo $list->anc_awal?> </td>
                <td><?php echo $list->anc_akhir?> </td>
            </tr>
            <?php endforeach ?>
        </tbody>
     </table>

    </div>
</div>

<script type="text/javascript">

$( document ).ready(function() {
   
});

</script>
</div>