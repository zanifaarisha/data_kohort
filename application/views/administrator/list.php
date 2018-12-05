        <h2 style="margin-top:0px">Administrator List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('administrator/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
          
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Action</th>
            </tr><?php $no=1;
            foreach ($admin_data as $admin)
            {
                ?>
            <tr>
                <td width="80px"><?php echo ++$no ?></td>
                <td><?php echo $admin->username ?></td>
                <td><?php echo $admin->nama ?></td>
                <td style="text-align:center" width="200px">
                    <?php 
                    echo anchor(site_url('administrator/update/'.$admin->id_admin),'Update'); 
                    echo ' | '; 
                    if (count($admin_data) == 1 ) {
                        echo 'Delete';
                    }else{
                        echo anchor(site_url('administrator/delete/'.$admin->id_admin),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                    }
                    ?>
                </td>
		    </tr>
                <?php }   ?>
        </table>
