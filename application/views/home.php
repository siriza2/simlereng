<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

	 <!-- Main content -->
    <section class="invoice">

	
	<div class="row">
	
	<div class="col-xs-12">
	<!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body"  >
              <div id="world-map" style="height: 250px; width: 100%;"  ></div>
            </div>
            <!-- /.box-body-->
 
          </div>
          <!-- /.box -->
		</div>

	</div>
	
	
			
   </section>
   
   <div class="clearfix"></div>
 
</div>

<?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
?>