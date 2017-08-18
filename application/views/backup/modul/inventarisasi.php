<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

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

<!--
<div class="pad margin no-print">
          <div class="callout callout-info" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
          </div>
</div>
-->


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
				  
				  
				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
				  
				  
                </div><!-- /.tab-content -->
				
				
              </div><!-- /.nav-tabs-custom -->
            

           

              
             

        

</section><!-- /.content -->
  <div class="clearfix"></div>

<?php
$this->load->view('template/js');
?>

<?php
$this->load->view('template/foot');
?>