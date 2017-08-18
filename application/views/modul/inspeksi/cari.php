<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>

 <div class="content-wrapper">
  <section class="content-header">
      <h1>
        Inspeksi Jalan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
	
	 <!-- Main content -->
   <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Form Cari Inspeksi Jalan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
         
          <div class="row">
            <div class="col-xs-12 text-center">
             <form action="<?php echo base_url(); ?>index.php/inspeksi/cari" method="post" class="form-horizontal">
					
					<div class="form-group">
					<label for="inputName" class="col-sm-2 control-label">Jenis Inspeksi</label> 
					<div class="col-sm-10">
					<select class="form-control" name="jenis_inspeksi">
                    <option>[ Pilih Jenis Inspeksi ]</option>
					<option name='1' value=1 >Berkala</option>
					<option name='2'  value=2 >Rutin</option>
                    <option name='3'  value=3 >Khusus</option> 
					</select>
                    </div> 
					</div>
				   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nomor Lereng</label>

                    <div class="col-sm-10">
					    <select class="form-control" name="NOLERENG">
						<option> </option> 
						  <?php		 
							 foreach($qlistmaster_lereng as $k => $v){ 
							 echo "<option value=\"".$v->no_lereng."\">".$v->no_lereng."-".$v->no_lereng."</option>"; 
							 }		 
							 ?>	
						</select>
					  
					  
                    </div>
                  </div>
                  
                  
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>
          <div class="ajax-content">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section> 
 </div>
<div class="clearfix"></div>
 


 <?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
  ?>
  
  