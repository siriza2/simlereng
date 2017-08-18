  
 
 <div class="tab-content">
                   
                <div class="box-header">
                  <h3 class="box-title">F. Longsor</h3>
                </div><!-- /.box-header -->
                
				                  
				  <div class="box-body">

				  
				  
                    <div class="form-group">
                      <label>Waktu terjadi longsor</label>                      
                                      <input class="form-control"   type="text">
                    </div>
                    <div class="form-group">
                      <label>Luas longsoran</label>
                       <select class="form-control">
                        <option> </option>
								<?php		 
								 foreach($qlistmaster_luaslongsor as $k => $v){ 
									echo "<option value=\"".$v->kdluaslongsor."\">".$v->nnluaslongsor."</option>"; 
								 }		 
								?>	
                      </select>
                    </div>
					 
					 <div class="form-group">
                      <label>Letak longsoran</label>                      
                       <select   class="form-control select2" multiple="multiple"  
                   style="width: 100%;">
					      <option> </option>
	<?php		 
								 foreach($qlistmaster_letaklongsor as $k => $v){ 
									echo "<option value=\"".$v->kdletaklongsor."\">".$v->nmletaklongsor."</option>"; 
								 }		 
								?>	
                      </select>                      
                    </div>
					
					 <div class="form-group">  
					  <label>Jenis Longsoran</label>					 
                      <select title="Select your surfboard" class="selectpicker">
						<option> </option>
						<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/runtuhjatuhbebas.png') ?>">Runtuhan Jalan Bebas</option>
						<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/runtuhanjungkir.png') ?>"> Runtuhan jungkiran</option>
						<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/gelincirrotasi.png') ?>">Gelincir rotasi</option>
						<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/gelincirtransalasi.png') ?>">Gelincir translasi</option>
						<option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/aliran.png') ?>">Aliran</option>
					  <option data-thumbnail="<?php echo base_url('assets/dropdownimage/images/majemuk2.png') ?>">Majemuk</option>
					  </select>                     
					</div>    
					 
					 <div class="form-group">
                      <label>Tinggi Gawir Longsoran </label>
                      <input class="form-control" placeholder="m" type="text">
                    </div>
					
					 <div class="form-group">
					  <label>Tinggi Gawir Longsoran </label>
                      <input class="form-control" placeholder="Derajat" type="text">
                    </div>
					 
				     <div class="form-group">
                      <label>Material longsoran</label>                      
                       <select class="form-control"> 
                         <option> </option>
							<?php		 
							 foreach($qlistmaster_materiallongsor as $k => $v){ 
								echo "<option value=\"".$v->kdmateriallongsor."\">".$v->nmmateriallongsor."</option>"; 
							 }		 
							?>	
                      </select>                      
                     </div>			 
					 
				  
				  <div class="form-group">
                      <label>Kondisi longsoran</label>                      
                       <select class="form-control">
                        <option> </option>
                       <?php		 
							 foreach($qlistmaster_kondisilongsor as $k => $v){ 
								echo "<option value=\"".$v->kdkondisilongsor."\">".$v->nmkondisilongsor."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					
					 <div class="form-group">
                      <label>Perkiraan Penyebab longsoran</label>                      
                       <select class="form-control">
                       <option> </option>
                       <?php		 
							 foreach($qlistmaster_sebablongsor as $k => $v){ 
								echo "<option value=\"".$v->kdsebablongsor."\">".$v->nmsebablongsor."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					
					<div class="form-group">
                      <label>Kerusakan Jalan Akibat longsoran</label>                      
                       <select class="form-control">
                       <option> </option>
                       <?php		 
							 foreach($qlistmaster_rusaklongsor as $k => $v){ 
								echo "<option value=\"".$v->kdkerusakanlongsor."\">".$v->nmkerusakanlongsor."</option>"; 
							 }		 
							?>	
                      </select>                      
                    </div>
					 
					 <div class="form-group">
                      <label>Potensi kerusakan jalan mendatang bila terjadi longsor</label>                      
                       <select class="form-control">
                         <option> </option>
                       <?php		 
							 foreach($qlistmaster_potensilongsor as $k => $v){ 
								echo "<option value=\"".$v->kdpotensilongsor."\">".$v->nmpotensilongsor."</option>"; 
							 }		 
							?>	
                      </select>      
                      </select>                      
                    </div>
				  
					
                  </div><!-- /.box-body -->
              
              
 </div>