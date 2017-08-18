 <div style="background-color:#f7f7f7;">
 <div class="tab-content">
                   
               <section class="content">
			    <div class="box-header">
                  <h3 class="box-title">E. Rekayasa Lereng Jalan</h3>
                </div><!-- /.box-header -->
			   <div class="row">
			   <div class="col-md-12">
			   <div class="box">
			   <div class="box-header">
			   <div class="form-group">
                <label><b>Keberadaan Bangunan Rekayasa Lereng [ E1 ]</b></label>
						<select class="form-control select2" multiple="multiple" style="width: 100%;">
									<option></option>
									<?php		 
										 foreach($qlistmaster_bangunan as $k => $v){ 
											echo "<option value=\"".$v->KDBANGUNAN."\">".$v->NMBANGUNAN."</option>"; 
										 }		 
									?>	
						</select>
              </div>
			   
			   
			   
			  
			  
			  
			   </div>
			   </div>
			   </div>
			   
			   </div>
			   
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header">
                  <label><b>Dimensi Bangunan [ E2 ]</b></label>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <div class="box-header">
					  <label><b>DINGING PENAHAN PASANGAN BATU</b></label>
				 </div><!-- /.box-header -->
                 
				 <div class="box-body">
				  
				   
                    <div class="form-group">
                      <label>Panjang</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>lebar atas</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>Lebar Bawah</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>Tinggi</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                  </div><!-- /.box-body -->

                 
				 
				 
				 
              </div><!-- /.box -->

 
			  aaa
            </div><!--/.col (left) -->
            
			
			<!-- right column -->
            <div class="col-md-6">
             <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header">
                  <label">&nbsp;</label>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <div class="box-header">
					  <label><b>VEGETASI</b></label>
				 </div><!-- /.box-header -->
                  
				  <div class="box-body">
                  <div class="form-group">
                      <label>Panjang</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>Lebar Miring Lereng</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    <div class="form-group">
                      <label>Tinggi</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
                    
                  
					
               </div><!-- /.box-body -->
			  </div><!-- /.box -->
				  
							<!-- /.TOLONG DIEDIT LAGI -->
							<!-- /.TOLONG DIEDIT LAGI -->
			  
			  
							<input type="button"  name="tambah" value="&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;"   onclick="this.blur();addRowToTable();" >
							<input type="button" name="tambah" value="&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;"  onclick="this.blur();removeRowFromTable();" >

							<table width="100%" class="table table-striped table-bordered bootstrap-datatable" >
									<tr>
										<th class="thead" width="2%" align="left"><b><div align="center"> No</b></th>
										<th class="thead" width="25%"  align="center"><b><div align="center">Keberadaan bangunan rekayasa lereng</div></b></th>		
										<th class="thead" width="25%" align="center"><b><div align="center">Keterangan</div></b></th>
										<th class="thead" width="25%" align="center"><b><div align="center">Panjang</div></b></th>		
										<th class="thead" width="20%" align="center"><b><div align="center">Lebar Atas</div></b></th>	
										<th class="thead" width="25%" align="center"><b><div align="center">Lebar Bawah</div></b></th>	
										<th class="thead" width="25%" align="center"><b><div align="center">Tinggi</div></b></th>	
									</tr>	 
							</table>
	
											  <table id="tblItem"  width="100%"></TABLE> 
											  <input type="hidden"  id="iterasi_spph" name="iterasi_spph"/> 
										      <!-- /.TOLONG DIEDIT LAGI -->
										      <!-- /.TOLONG DIEDIT LAGI -->
											  <!-- /.TOLONG DIEDIT LAGI -->
											    <!-- /.TOLONG DIEDIT LAGI -->
												
												
												
												
												
												<!-- /.box-body --> 
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
       </section>
      </div>
	   </div>
 
 
 
   