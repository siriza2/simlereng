 <div style="background-color:#f7f7f7;">
 <div class="tab-content">
                   
               <section class="content">
			    <div class="box-header">
                  <h3 class="box-title">B. Geometrik Lereng Jalan</h3>
                </div><!-- /.box-header -->
			   <div class="row">
			   <div class="col-md-12">
			   <div class="box">
			   <div class="box-header">
			   
			   <div class="form-group">
                       <label><b>Jenis Lereng [B1]</b></label>                     
                       <select class="form-control">
                      <option> </option>
                        <?php		 
						foreach($qlistmaster_jenis as $k => $v){ 
						echo "<option value=\"".$v->kdjenislereng."\">".$v->nmjenislereng."</option>"; 
						}		 
						?>	
                      </select>                      
               </div>
			  
			   </div>
			   </div>
			   </div>
			   
			   </div>
			   
	   <div class="box box-default">
        <div class="box-header with-border">
          <label><b>Lereng Alam [B2]</b></label>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               
              <!-- /.form-group -->
                    <div class="form-group">
                      <label>Panjang Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
              <!-- /.form-group -->
			    <div class="form-group">
                      <label>Tinggi Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
			  
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               
              <!-- /.form-group -->
               <div class="form-group">
                      <label>Panjang Kemiringan Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
              <!-- /.form-group -->
			   <div class="form-group">
                      <label>Sudut Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
			   
		<div class="box box-default">
        <div class="box-header with-border">
          <label><b>Lereng Galian [B3]</b></label>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               
              <!-- /.form-group -->
                    <div class="form-group">
                      <label>Panjang Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
              <!-- /.form-group -->
			    <div class="form-group">
                      <label>Tinggi Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
			  
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               
              <!-- /.form-group -->
               <div class="form-group">
                      <label>Panjang Kemiringan Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
              <!-- /.form-group -->
			   <div class="form-group">
                      <label>Sudut Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>	 
			   
			   
			   
			   	<div class="box box-default">
        <div class="box-header with-border">
          <label><b>Jumlah Bahu Sengkedan Lereng [B4]</b></label>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               
              <!-- /.form-group -->
                      <div class="form-group">
                      <label>4a1-Lebar bahu sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4a2-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4a3-Tinggi sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4a4-Sudut sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
              <!-- /.form-group -->
			    <div class="form-group">
                      <label>4b1-Lebar bahu sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4b2-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4b3-Tinggi sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4b4-Sudut sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					 
					 <!-- /.form-group -->
					 <div class="form-group">
                      <label>4c1-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					<div class="form-group">
                      <label>4c2-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4c3-Tinggi sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4c4-Sudut sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					
					 <!-- /.form-group -->
					
					
					
					
			  
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               
              <!-- /.form-group -->
                <div class="form-group">
                      <label>4d1-Lebar bahu sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>	
                    <div class="form-group">
                      <label>4d2-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4d3-Tinggi sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4d4-Sudut sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					
              <!-- /.form-group -->
			   <div class="form-group">
                      <label>4e1-Lebar bahu sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>	
                    <div class="form-group">
                      <label>4e2-Panjang kemiringan sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4e3-Tinggi sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>4e4-Sudut sengkedan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
			   
			   
			   
			   
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              

			  <div class="box box-danger">
                <div class="box-header">
                  <label><b>Profil Mendatar Lereng Jalan [B5]</b></label>
                </div>
                <div class="box-body">
                                   
                     <div class="form-group">
                                         
                        <select  class="selectpicker"> 
							<option></option>
							<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/lurus.png') ?>">Lurus</option>
							<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/cembung.png') ?>">Cembung</option>
							<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/cekung.png') ?>">Cekung</option>
							<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/kelok.png') ?>">Berkelok-kelok</option> 
					    </select>
                     
					</div>    
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->	  
			  
            </div><!--/.col (left) -->
            
			
			<!-- right column -->
            <div class="col-md-6">
             <!-- general form elements -->
              <div class="box box-warning">
                 <div class="box-header">
                  <label><b>Bentuk Lereng Jalan [B6]</b></label>
                </div>
                <!-- form start -->
                
                  <div class="box-body"> 		  
				
  <select   class="selectpicker">
   
    <option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/sederhana.png') ?>">Sederhana</option>
    <option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/datar.png') ?>">Datar</option>
    <option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/asimetri.png') ?>">Asimetri</option>
    <option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/majemuk.png') ?>">Majemuk</option>
    
  </select>
                  
			 
					
               </div><!-- /.box-body -->
			  </div><!-- /.box -->
				  
			  
				  
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section>
		
		
		
                   </div>
				   </div>