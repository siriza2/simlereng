  
 <div class="tab-content">
                   
                <div class="box-header">
                  <h3 class="box-title">A. Tapak Umum</h3>
                </div><!-- /.box-header -->
				 		 
		<div class="box-body">
		
                    <div class="form-group">
                      <label>Provinsi</label>                      
                       <select class="form-control">
			<option>[Pilih Propinsi]</option>  
				  <?php		 
					 foreach($qlistmaster_propinsi as $k7 => $v7){ 
					 echo "<option value=\"".$v7->kdpropinsi."\">".$v7->nmpropinsi."</option>"; 
					 }		 
				   ?>	 											
                      </select>                      
                    </div>
		    
                    <div class="form-group">
                      <label >Ruas Jalan</label>
                       <select class="form-control"> 
		       <option>[Pilih Ruas Jalan]</option>  
                        <option>option 1</option> 
                      </select>
                    </div>
		    
		    <div class="form-group">
                      <label>Arah Jalan</label>
                      <div class="row">
                      <div class="col-xs-3">
                      <input class="form-control" placeholder=".Awal" type="text">
                      </div>
                      <div class="col-xs-1">
                       <label>Ke</label>
                      </div>
                      <div class="col-xs-3">
                      <input class="form-control" placeholder=".Akhir" type="text">
                      </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
						  <label>Nomor Lereng</label>
						  <div class="row">
						<div class="col-xs-1">
						  <input class="form-control" placeholder="." type="text">
						</div>                   
						<div class="col-xs-1">
						  <input class="form-control" placeholder="." type="text">
						</div>
						<div class="col-xs-1">
						  <input class="form-control" placeholder="." type="text">
						</div>
						<div class="col-xs-1">
						  <input class="form-control" placeholder="." type="text">
						</div>
					  </div>
                    </div>
					
					<div class="form-group">
                      <label>Kilometer</label>
                      <div class="row">
                      <div class="col-xs-3">
                      <input class="form-control" placeholder=".Awal" type="text">
                      </div>
                      <div class="col-xs-1">
                       <label>Ke</label>
                      </div>
                      <div class="col-xs-3">
                      <input class="form-control" placeholder=".Akhir" type="text">
                      </div>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label>Bagian Lereng</label>
                      <input class="form-control" placeholder="Enter ..." type="text">
                    </div>
			 <div class="form-group">
                      <label>Status Jalan</label>                      
                       <select class="form-control">
						<option>[Pilih Status Jalan]</option>  
                        <option value=1>Jalan nasional</option>
                        <option value=2>Jalan provinsi</option>
                        <option value=3>Jalan kabupaten</option>
                        <option value=4>Jalan Kota</option>
			<option value=5>Jalan Non Status</option>
                      </select>                      
                    </div>
					
					<div class="form-group">
                      <label>Koordinasi GPS</label>
                      <input class="form-control" placeholder="Enter ..." type="text">
                    </div>
					
					<div class="form-group">
                    <label>	Tanggal Inventarisasi</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text">
                    </div><!-- /.input group -->
                  </div>
				  
		    <div class="form-group">
                      <label>Pelaksana Inventarisasi</label>
                      <input class="form-control" placeholder="Enter ..." type="text">
                    </div>
				  
		 

			<div class="form-group">
                      <label>Bentang Alam</label>
                      <div class="row">
                      <div class="col-xs-5">
                       <select class="form-control" name="KDBENTANGALAM" onchange="cari_level(this.value);" >
                       <option> </option>  
                          <?php		 
							 foreach($qlistmaster_bentang as $k => $v){ 
							 echo "<option value=\"".$v->kdbentangalam."\">".$v->nmbentangalam."</option>"; 
							 }		 
							?>	
                      </select> 
                      </div>                     
                      <div class="col-xs-3">
                      <input class="form-control" placeholder="." type="text" disabled="" name="BENTANGLAIN"  name="BENTANGLAIN">
                      </div>
                      </div>
                    </div>


		    
				<div class="form-group">
                      <label>Tata Guna Lahan</label>
                      <div class="row">
                      <div class="col-xs-5">
                       <select class="form-control" name="KDTATAGUNALAHAN" onchange="cari_tataguna(this.value);">
                      <option>[Pilih Tata Guna Lahan]</option>  
                       
                     <?php		 
					 foreach($qlistmaster_tataguna as $k => $v){ 
					 echo "<option value=\"".$v->kdtatagunalahan."\">".$v->nmtatagunalahan."</option>"; 
					 }		 
					 ?>	
                      </select> 
                      </div>                     
                      <div class="col-xs-3">
                      <input class="form-control" placeholder="." type="text" disabled="" name="TATAGUNALAIN"  id="TATAGUNALAIN">
                      </div>
                      </div>
                    </div>
										
		        <div class="form-group">
                      <label>Vegetasi</label>
                      <div class="row">
                      <div class="col-xs-5">
                       <select class="form-control select2" multiple="multiple"   name="KDVEGETASI" OnChange="cari_vegetasi(this.value);"  >
						 <?php		 
						 foreach($qlistmaster_vegetasi as $k => $v){ 
						 echo "<option value=\"".$v->kdvegetasi."\">".$v->nmvegetasi."</option>"; 
						 }		 
						 ?>	
                       </select> 
                      </div>                     
                      <div class="col-xs-3">
                      <input class="form-control" placeholder="." type="text" disabled="" name="VEGETASILAIN"  id="VEGETASILAIN">
                      </div>
                      </div>
                      </div>
					
					
		    <div class="form-group">
                      <label>Persentase Vegetasi</label>                      
                       <select class="form-control">
		         <option> </option>
					<?php		 
					 foreach($qlistmaster_persen_vegetasi as $k => $v){ 
					 echo "<option value=\"".$v->kdvegetasi_persen."\">".$v->nmvegetasi_persen."</option>"; 
					 }		 
					 ?>	
                      </select>                      
                    </div>
					
					<div class="form-group">
						<label>Hidrologi</label>
                      <div class="row">
                      <div class="col-xs-5">
                       <select class="form-control" name="KDHIDROLOGI" Onchange="cari_hidrologi(this.value);">
					 <option></option>
					 <?php		 
					 foreach($qlistmaster_hidrologi as $k => $v){ 
					 echo "<option value=\"".$v->kdhidrologi."\">".$v->nmhidrologi."</option>"; 
					 }		 
					 ?>	
                      </select> 
                      </div>                     
                      <div class="col-xs-3">
                      <input class="form-control" placeholder="." type="text" disabled="" name="HIDROLOGILAIN" id="HIDROLOGILAIN">
                      </div>
                      </div>
                    </div>
					
					    <div class="form-group">
                        <label>Cuaca saat inventarisasi</label>                      
                        <select class="form-control">
                         <option> </option>
                         <?php		 
						 foreach($qlistmaster_cuaca as $k => $v){ 
						 echo "<option value=\"".$v->kdcuaca."\">".$v->nmcuaca."</option>"; 
						 }		 
						 ?>	
						 </select>                      
						</div>
					
					   <div class="form-group">
                       <label>Bangunan yang ada di lereng</label>
                       <div class="row">
                       <div class="col-xs-5">
                       <select class="form-control" name="KDBANGUNLERENG" Onchange="cari_bangunan(this.value);">
                       <option> </option> 
						<?php		 
						 foreach($qlistmaster_bangunlereng as $k => $v){ 
						 echo "<option value=\"".$v->kdbangunlereng."\">".$v->nmbangunlereng."</option>"; 
						 }		 
						 ?>	 
                       </select> 
                       </div>     '
					   
                       <div class="col-xs-3">
                       <input class="form-control" placeholder="." type="text" disabled="" name="BANGUNLERENGLAIN" id="BANGUNLERENGLAIN">
                       </div>
                       </div>
                       </div>
					
					   <div class="form-group">
                       <label>Bangunan yang ada di atas lereng</label>
                       <div class="row">
                       <div class="col-xs-5">
                        <select class="form-control" name="KDBANGUNLERENG_ATAS" Onchange="cari_bangunanatas(this.value);">
                        <option> </option>
								<?php		 
								 foreach($qlistmaster_bangunataslereng as $k => $v){ 
								 echo "<option value=\"".$v->kdbangunlereng_atas."\">".$v->nmbangunlereng_atas."</option>"; 
								 }		 
								?>	
                        </select> 
                      </div>       

					  
                      <div class="col-xs-3">
							<input class="form-control" placeholder="." type="text" disabled="" name="BANGUNLERENGATASLAIN" id="BANGUNLERENGATASLAIN">
                      </div>
					  
                      </div>
                    </div>
					
					<div class="form-group">
						  <label>Bangunan yang ada di bawah lereng</label>
						  <div class="row">
						  <div class="col-xs-5">
						  <select class="form-control" name="KDBANGUNLERENG_BAWAH" Onchange="cari_bangunanbawah(this.value);">
                          <option> </option>
                          <?php		 
							 foreach($qlistmaster_bangunbawahlereng as $k => $v){ 
							 echo "<option value=\"".$v->kdbangunlereng_bawah."\">".$v->nmbangunlereng_bawah."</option>"; 
							 }		 
					   	  ?>	
                      </select> 
                      </div>                     
                      <div class="col-xs-3">
                      <input class="form-control" placeholder="." type="text" disabled="" name="BANGUNLERENGBAWAHLAIN" id="BANGUNLERENGBAWAHLAIN">
                      </div>
                      </div>
                    </div>
					
					  <div class="form-group">
                      <label>Ketersediaan jalan akses untuk inventarisasi dan inspeksi</label>                      
                       <select class="form-control">
                        <option></option>
                        <option value=1>Tersedia</option>
                        <option  value=2>Tidak Tersedia</option> 
                      </select>                      
                      </div>
					
					
					
					<div class="form-group">
                      <label>Volume Lalulintas</label>
                      <input class="form-control" placeholder="smp" type="text">
                    </div>
					 
					
					<div class="form-group">
                      <label>Catatan</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
				  
					
                  </div><!-- /.box-body -->
              
              
 </div>
  
