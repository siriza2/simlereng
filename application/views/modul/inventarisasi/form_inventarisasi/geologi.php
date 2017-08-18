 <div class="tab-content">
                   
                <div class="box-header">
                  <h3 class="box-title">C. Geologi Lereng</h3>
                </div><!-- /.box-header -->
                
				                  
				    <div class="box-body">
                    <div class="form-group">
                      <label>Meterial Lereng Jalan</label>                      
                       <select class="form-control">
                       <option> </option>
							<?php		 
							 foreach($qlistmaster_material as $k => $v){ 
								echo "<option value=\"".$v->kdmaterial."\">".$v->nmmaterial."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					
					
                    <div class="form-group">
                      <label >Struktur Geologi yang tampak secara visual</label>
                       <select class="form-control">
                        <option value=1>Ada</option>
                        <option  value=2>Tidak Ada</option>
                        
                      </select>
                    </div>
					 
					 <div class="form-group">
                      <label>Tingkat Pelapukan</label>                      
                       <select class="form-control">
                        <option> </option>
							<?php		 
							 foreach($qlistmaster_tingkat as $k => $v){ 
								echo "<option value=\"".$v->kdtingkatlapuk."\">".$v->nmtingkatlapuk."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					
					 <div class="form-group">
                      <label>Jumlah set diskontinuitas</label>                      
                       <select class="form-control">
                      <option> </option>
							<?php		 
							 foreach($qlistmaster_setdiskon as $k => $v){ 
								echo "<option value=\"".$v->kdsetdiskon."\">".$v->nmsetdiskon."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					 		 			  
					
                  </div><!-- /.box-body -->
              
              
 </div>