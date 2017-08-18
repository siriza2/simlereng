<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>

<div class="content-wrapper">




<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Form Inpeksi Berkala 
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>



 <form action="#" method="post">

<!-- Main content -->
<section class="content">
    <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tapak Umum</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
             <div class="col-md-12">
			 
              <div class="form-horizontal">
                <div class="form-group">
                  <label   class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" placeholder="" type="text" disabled="">
                  </div>
                </div>
                <div class="form-group">
                  <label   class="col-sm-2 control-label">Ruas Jalan</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				 <div class="form-group">
                  <label   class="col-sm-2 control-label">Arah Jalan</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				 <div class="form-group">
                  <label   class="col-sm-2 control-label">Nomor Lereng</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				 <div class="form-group">
                  <label   class="col-sm-2 control-label">Kilometer</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				 <div class="form-group">
                  <label   class="col-sm-2 control-label">Bagian Lereng</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				<div class="form-group">
                  <label   class="col-sm-2 control-label">Status Jalan</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				<div class="form-group">
                  <label   class="col-sm-2 control-label">Koordinat GPS</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text" disabled="">
                  </div>
                </div>
				
				<div class="form-group">
                <label   class="col-sm-2 control-label">Tanggal Inpeksi</label>

				 <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control pull-right" id="datepicker" type="text">
                </div>
				 </div>
                <!-- /.input group -->
              </div>
				<div class="form-group">
                  <label   class="col-sm-2 control-label">Pelaksana Inpeksi</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="inputPassword3" placeholder="" type="text">
                  </div>
                </div>
                </div>
              
              
              <!-- /.box-footer -->
            </div>
			 
			 
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      
      </div>
      <!-- /.box -->


<div class="row">
<section class="invoice">
    <!-- Small boxes (Stat box) -->
    
    <!-- Main row -->
    <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Bagian-bagian Lereng
                <small class="pull-right"></small>
              </h2>
            </div><!-- /.col -->
    </div>
              
			  <!-- form start -->
              <form role="form">
			  
			  <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#inpeksi" data-toggle="tab">Inpeksi</a></li>
                  <li><a href="#intrumentasi" data-toggle="tab">Intrumentasi</a></li>
				  <li><a href="#geologi" data-toggle="tab">Drainase</a></li>
				  <li><a href="#lereng" data-toggle="tab">Badan</a></li>
				  <li><a href="#rekayasa" data-toggle="tab">Bahu</a></li>
				  <li><a href="#longsor" data-toggle="tab">Lereng</a></li>
				  <li><a href="#badan" data-toggle="tab">Bangunan</a></li>				 			  
				  <li><a href="#dokumentasi" data-toggle="tab">Dokumentasi</a></li>
				  <li><a href="#sketsa" data-toggle="tab">Sketsa</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Tapak -->
                  <div class="tab-pane active" id="inpeksi" >                   
						<?php
						$this->load->view('modul/form_inpeksiberkala/inpeksi_jalan');
						?>				   
                  </div><!-- /#fa-icons -->
                 
				 <!-- Geometrik-->
                  <div class="tab-pane" id="intrumentasi">
						<?php
						$this->load->view('modul/form_inpeksiberkala/intrumentasi');
						?>
                  </div><!-- /#ion-icons -->

				   <!-- Geologi-->
                  <div class="tab-pane" id="geologi">
						<?php
						$this->load->view('modul/form_inventarisasi/geologi');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Lereng-->
                  <div class="tab-pane" id="lereng">
						<?php
						$this->load->view('modul/form_inventarisasi/lereng');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Rekayasa-->
                  <div class="tab-pane" id="rekayasa">
						<?php
						$this->load->view('modul/form_inventarisasi/rekayasa');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Longsor-->
                  <div class="tab-pane" id="longsor">
						<?php
						$this->load->view('modul/form_inventarisasi/longsor');
						?>
                  </div><!-- /#ion-icons -->
				  
				  
				  <!-- badan bahu jalan-->
                  <div class="tab-pane" id="badan">
						<?php
						$this->load->view('modul/form_inventarisasi/badan');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Drainase -->
                  <div class="tab-pane" id="drainase">
						<?php
						$this->load->view('modul/form_inventarisasi/drainase');
						?>
                  </div>
				  
				   <!-- intrumentasi -->
                  <div class="tab-pane" id="intrumentasi">
						<?php
						$this->load->view('modul/form_inventarisasi/intrumentasi');
						?>
                  </div>
				  
				   <!-- dokumentasi -->
                  <div class="tab-pane" id="dokumentasi">
						<?php
						$this->load->view('modul/form_inventarisasi/dokumentasi');
						?>
                  </div>
				  
				     <!-- sketsa -->
                  <div class="tab-pane" id="sketsa">
						<?php
						$this->load->view('modul/form_inventarisasi/sketsa');
						?>
                  </div>
				  
				  
				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
				  
				  
                </div><!-- /.tab-content -->
				
				
              </div><!-- /.nav-tabs-custom -->
            

        

	</section><!-- /.invoice -->
 </div>
	
</section><!-- /.content -->



<div class="clearfix"></div>

</div>


 <?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
  ?>
  