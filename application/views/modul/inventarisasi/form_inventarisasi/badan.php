 <div class="tab-content">
                   
                <div class="box-header">
                  <h3 class="box-title">G.Badan dan Bahu Jalan</h3>
                </div><!-- /.box-header -->
                
				                  
				  <div class="box-body">
				  
                    <div class="form-group">
                      <label>Lebar Perkerasan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					
                    <div class="form-group">
                      <label >Jenis Perkerasan</label>
                       <select class="form-control">
                      <option> </option>
                       <?php		 
							 foreach($qlistmaster_jenis_perkerasan as $k => $v){ 
								echo "<option value=\"".$v->kdjnsperkerasan."\">".$v->nmjnsperkerasan."</option>"; 
							 }		 
							?>	
                      </select>
                    </div>
					 
					  <div class="form-group">
                      <label>Lebar Bahu Jalan</label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					
 
					
                  </div><!-- /.box-body -->
              
              
 </div>