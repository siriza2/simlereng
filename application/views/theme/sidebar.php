 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li><a href="<?php echo base_url(); ?>index.php/home"><i class="fa fa-laptop text-red"></i> <span>Home</span></a></li>
       
       
        <li class="treeview">
          <a href="#">
             <i class="fa fa-edit"></i>  <span>Modul</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
			<li><a href="<?php echo base_url(); ?>index.php/inventarisasi"><i class="fa fa-circle-o"></i> Inventarisasi Lereng</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/inspeksi"><i class="fa fa-circle-o"></i> Inspeksi Lereng</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Penilaian Tingkat Resiko</a></li>
                    
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Mitigasi Resiko
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Resiko Tinggi</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Resiko Sedang</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Resiko Rendah</a></li>
                <!--
				<li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
				-->
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pemeliharaan Lereng</a></li>
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
             <i class="fa fa-folder"></i>  <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
			<li><a href="#"><i class="fa fa-circle-o"></i> Inventarisasi Lereng</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Inspeksi Lereng</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Penilaian Tingkat Resiko</a></li>
                    
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Mitigasi Resiko
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Resiko Tinggi</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Resiko Sedang</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Resiko Rendah</a></li>
                <!--
				<li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
				-->
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pemeliharaan Lereng</a></li>
          </ul>
        </li>
        
     
      <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Managemen User</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Managemen User</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> Tambah User</a></li>
					
                </ul>
            </li>
		
				
		
       
        <!--
		<li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>