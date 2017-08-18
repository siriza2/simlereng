<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>

 

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Inpeksi Jalan Berkala</h3>
            </div>
            <!-- /.box-header -->
            

         
            <!-- <div class="box-header">
              <h3 class="box-title"></h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">            		
			 <div class="col-xs-12 table-responsive"> <br>
 <a href="<?php echo base_url(); ?>index.php/inspeksi/tambah" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Tambah</a>			 
              <p>
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Lereng</th>
                  <th>Propinsi</th>
                  <th>Ruas Jalan</th>
                  <th>Tanggal Iventarisasi</th>
				    <th>Jenis Inspeksi</th>
				   <th>Aksi</th>
				    
				   
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>123.876.3983.222</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				    <td>Berkala</td>
				   <td> <span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
				   
                </tr>
                 <tr>
                  <td>2</td>
                  <td>123.876.3983.222</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				  <td>Rutin</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
				   
                </tr>
                <tr>
                  <td>3</td>
                  <td>123.876.3983.222</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Rutin</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>123.876.3983.222</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Khusus</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                 <tr>
                  <td>5</td>
                  <td>123.876.3983.222</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Khusus</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>5</td>
                  <td>123.876.3983.229</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Rutin</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>6</td>
                  <td>123.876.3983.223</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Berkala</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>7</td>
                  <td>123.876.3983.224</td>
                  <td>Jawa Barat</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Khusus</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>8</td>
                  <td>123.876.3983.221</td>
                  <td>Jawa Timur</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Rutin</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>8</td>
                  <td>123.876.3983.221</td>
                  <td>Jawa Timur</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Khusus</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
				<tr>
                  <td>8</td>
                  <td>123.876.3983.221</td>
                  <td>Jawa Timur</td>
                  <td>dddd</td>
                  <td>12/02/2017</td>
				   <td>Rutin</td>
				   <td><span class="glyphicon glyphicon-pencil"></span> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                 <th>No</th>
                  <th>Nomor Lereng</th>
                  <th>Propinsi</th>
                  <th>Ruas Jalan</th>
                  <th>Tanggal Iventarisasi</th>
				    <th>Status</th>
				   <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
			  </div>
            </div>
            <!-- /.box-body -->
 
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  
<div class="clearfix"></div>
 


 <?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
  ?>
  