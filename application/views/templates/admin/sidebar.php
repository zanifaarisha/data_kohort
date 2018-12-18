 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>templates/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kohort Ibu Hamil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>nama"><i class="fa fa-circle-o"></i> Nama</a></li>
            <li><a href="<?php echo site_url() ?>umur"><i class="fa fa-circle-o"></i> Umur</a></li>
            <li><a href="<?php echo site_url() ?>biodata_ibu_hamil"><i class="fa fa-circle-o"></i> Biodata Ibu Hamil</a></li>
            <li><a href="<?php echo site_url() ?>kelahiran"><i class="fa fa-circle-o"></i> Kelahiran</a></li>


          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kohort Bayi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>biodata_bayi"><i class="fa fa-circle-o"></i> Biodata Bayi</a></li>
            <li><a href="<?php echo site_url() ?>imunisasi_bayi"><i class="fa fa-circle-o"></i> Imunisasi Bayi</a></li>
          </ul>
        </li>
      
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kohort Balita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>biodata_balita"><i class="fa fa-circle-o"></i> Biodata Balita</a></li>
            <li><a href="<?php echo site_url() ?>imunisasi_lanjutan"><i class="fa fa-circle-o"></i> Imunisasi Lanjutan</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>perhitungan/pelayanan"><i class="fa fa-circle-o"></i> Form Pelayanan Kohort</a></li>
            <li><a href="<?php echo site_url() ?>perhitungan/pemeriksaan"><i class="fa fa-circle-o"></i> Pemeriksaan</a></li>
            <li><a href="<?php echo site_url() ?>perhitungan/anc"><i class="fa fa-circle-o"></i> ANC</a></li>
            <li><a href="<?php echo site_url() ?>perhitungan/cf"><i class="fa fa-circle-o"></i> Certainty Factor</a></li>


          </ul>
        </li>

         <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>administrator"><i class="fa fa-circle-o"></i> Data Admin</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>