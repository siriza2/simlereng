<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Inventarisasi Lereng Jalan 
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

 

<!-- Main content -->
<section class="invoice">
    <!-- Small boxes (Stat box) -->
    
    <!-- Main row -->
    <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Inventarisasi.
                <small class="pull-right"></small>
              </h2>
            </div><!-- /.col -->
    </div>
              
			  <!-- form start -->
              <form role="form">
			  
			  <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tapak" data-toggle="tab">Tapak</a></li>
                  <li><a href="#geometrik" data-toggle="tab">Geometry</a></li>
				  <li><a href="#geologi" data-toggle="tab">Geologi</a></li>
				  <li><a href="#lereng" data-toggle="tab">Lereng</a></li>
				  <li><a href="#rekayasa" data-toggle="tab">Rekayasa</a></li>
				  <li><a href="#longsor" data-toggle="tab">Longsor</a></li>
				  <li><a href="#badan" data-toggle="tab">Badan</a></li>
				  <li><a href="#drainase" data-toggle="tab">Drainase</a></li>
				   <li><a href="#intrumentasi" data-toggle="tab">Intrumentasi</a></li>
				  <li><a href="#dokumentasi" data-toggle="tab">Dokumentasi</a></li>
				  <li><a href="#sketsa" data-toggle="tab">Sketsa</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Tapak -->
                  <div class="tab-pane active" id="tapak" >                   
						<?php
						$this->load->view('modul/form_inventarisasi/tapak');
						?>				   
                  </div><!-- /#fa-icons -->
                 
				 <!-- Geometrik-->
                  <div class="tab-pane" id="geometrik">
						<?php
						$this->load->view('modul/form_inventarisasi/geometrik');
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
            

        

</section><!-- /.content -->
<div class="clearfix"></div>
</div>


 <?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
  ?>
  