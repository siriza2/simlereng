<?php
$this->load->view('theme/head');
$this->load->view('theme/topbar');
$this->load->view('theme/sidebar');
?>

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Inventarisasi Lereng Jalan 
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section> 
 

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
              <form role="form" name="FrmInvent" > 
			  
			  <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tapak" data-toggle="tab">Tapak</a></li>
                  <li><a href="#geometrik" data-toggle="tab">Geometrik</a></li>
				  <li><a href="#geologi" data-toggle="tab">Geologi</a></li>
				  <li><a href="#lereng" data-toggle="tab">Lereng</a></li>
				  <li><a href="#rekayasa" data-toggle="tab">Rekayasa</a></li>
				  <li><a href="#longsor" data-toggle="tab">Longsor</a></li>
				  <li><a href="#badan" data-toggle="tab">Badan</a></li>
				  <li><a href="#drainase" data-toggle="tab">Drainase</a></li>
				   <li><a href="#intrumentasi" data-toggle="tab">Intrumentasi</a></li>
				  <li><a href="#dokumentasi" data-toggle="tab">Dokumentasi</a></li>
				  <li><a href="#sketsa" data-toggle="tab">Sketsa</a></li>
                </ul>
                <div class="tab-content">
		<?php
		
		$A['qlistmaster_propinsi'] =$qlistmaster_propinsi;
		$A['qlistmaster_ruas'] =$qlistmaster_ruas;
		$A['qlistmaster_bentang'] =$qlistmaster_bentang;
		$A['qlistmaster_tataguna'] =$qlistmaster_tataguna;		
		$A['qlistmaster_vegetasi'] =$qlistmaster_vegetasi;

		$A['qlistmaster_persen_vegetasi'] =$qlistmaster_persen_vegetasi;	
		$A['qlistmaster_hidrologi'] =$qlistmaster_hidrologi;	
		$A['qlistmaster_cuaca'] =$qlistmaster_cuaca;	
		$A['qlistmaster_bangunlereng'] =$qlistmaster_bangunlereng;	
		$A['qlistmaster_bangunataslereng'] =$qlistmaster_bangunataslereng;	
		$A['qlistmaster_bangunbawahlereng'] =$qlistmaster_bangunbawahlereng;	
		
		$A['qlistmaster_jenis'] =$qlistmaster_jenis;	
		$A['qlistmaster_material'] =$qlistmaster_material;	
		$A['qlistmaster_tingkat'] =$qlistmaster_tingkat;	
				
			 //REKAYASA
			$A['qlistmaster_bangunan'] = $qlistmaster_bangunan;	
			
			//LONGSOR 
			$A['qlistmaster_luaslongsor'] = $qlistmaster_luaslongsor;	
			$A['qlistmaster_letaklongsor'] = $qlistmaster_letaklongsor;	
	 
			$A['qlistmaster_materiallongsor'] = $qlistmaster_materiallongsor;	
				$A['qlistmaster_kondisilongsor'] = $qlistmaster_kondisilongsor;	
				$A['qlistmaster_sebablongsor'] = $qlistmaster_sebablongsor;	
					$A['qlistmaster_rusaklongsor'] = $qlistmaster_rusaklongsor;	
				$A['qlistmaster_potensilongsor'] = $qlistmaster_potensilongsor;	
				
			//BAHUDAN BADAN JALAN
				$A['qlistmaster_jenis_perkerasan'] = $qlistmaster_jenis_perkerasan;				
				
				
				
		?>
                  <!-- Tapak -->
                  <div class="tab-pane active" id="tapak" >                   
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/tapak',$A);
						?>				   
                  </div>
		  <!-- /#fa-icons -->
                 
		  <!-- Geometrik-->
                  <div class="tab-pane" id="geometrik">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/geometrik');
						?>
                  </div><!-- /#ion-icons -->

				   <!-- Geologi-->
                  <div class="tab-pane" id="geologi">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/geologi');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Lereng-->
                  <div class="tab-pane" id="lereng">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/lereng');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Rekayasa-->
                  <div class="tab-pane" id="rekayasa">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/rekayasa');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Longsor-->
                  <div class="tab-pane" id="longsor">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/longsor');
						?>
                  </div><!-- /#ion-icons -->
				  
				  
				  <!-- badan bahu jalan-->
                  <div class="tab-pane" id="badan">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/badan');
						?>
                  </div><!-- /#ion-icons -->
				  
				   <!-- Drainase -->
                  <div class="tab-pane" id="drainase">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/drainase');
						?>
                  </div>
				  
				   <!-- intrumentasi -->
                  <div class="tab-pane" id="intrumentasi">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/intrumentasi');
						?>
                  </div>
				  
				   <!-- dokumentasi -->
                  <div class="tab-pane" id="dokumentasi">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/dokumentasi');
						?>
                  </div>
				  
				     <!-- sketsa -->
                  <div class="tab-pane" id="sketsa">
						<?php
						$this->load->view('modul/inventarisasi/form_inventarisasi/sketsa');
						?>
                  </div>
				  
				  
				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
				  
				  
                </div><!-- /.tab-content -->
				
				
              </div><!-- /.nav-tabs-custom -->
            

        

</section><!-- /.content -->
<div class="clearfix"></div>
</div>

<script type="text/javascript"> 

  function cari_level(level_user) {

	 if (level_user==6) 
	  { //administrator
		// alert(level_user);
		  FrmInvent.BENTANGLAIN.disabled=false;  
	 } else  {
	   FrmInvent.BENTANGLAIN.disabled=true;  
	    FrmInvent.BENTANGLAIN.value='';   
	 }
 //
  }

//TATA GUNA LAHAN

function cari_tataguna(id) {

	 if (id==12) 
	  { //administrator
			//alert(id);
			//LAIN LAIN
			FrmInvent.TATAGUNALAIN.disabled=false;  
	 } else {
			FrmInvent.TATAGUNALAIN.disabled=true;  
			 FrmInvent.TATAGUNALAIN.value='';   
			// FrmInvent.elements["TATAGUNALAIN"].value="";
			
	 }
 //
}

function cari_vegetasi(id) {
 alert(id);
	 if (id==5) 
	  { //administrator
			
			//LAIN LAIN
			FrmInvent.VEGETASILAIN.disabled=false;  
	 } else {
			FrmInvent.VEGETASILAIN.disabled=true;  
			 FrmInvent.VEGETASILAIN.value='';   
			// FrmInvent.elements["TATAGUNALAIN"].value="";
			
	 }
 //
}
 
function cari_hidrologi(id) { 
	 if (id==4) 
	  { 	//administrator
			//alert(id);
			//LAIN LAIN
			 FrmInvent.HIDROLOGILAIN.disabled=false;  
	 } else {
			 FrmInvent.HIDROLOGILAIN.disabled=true;  
			 FrmInvent.HIDROLOGILAIN.value='';   
			 //FrmInvent.elements["TATAGUNALAIN"].value=""; 
	 }
 //
}





function cari_bangunan(id) { 
	 if (id==8) 
	  { 	//administrator
			//alert(id);
			//LAIN LAIN
			 FrmInvent.BANGUNLERENGLAIN.disabled=false;  
	 } else {
			 FrmInvent.BANGUNLERENGLAIN.disabled=true;  
			 FrmInvent.BANGUNLERENGLAIN.value='';   
			 //FrmInvent.elements["TATAGUNALAIN"].value=""; 
	 }
 //
}

function cari_bangunanatas(id) { 
	 if (id==8) 
	  { 	//administrator
			//alert(id);
			//LAIN LAIN
			 FrmInvent.BANGUNLERENGATASLAIN.disabled=false;  
	 } else {
			 FrmInvent.BANGUNLERENGATASLAIN.disabled=true;  
			 FrmInvent.BANGUNLERENGATASLAIN.value='';   
			 //FrmInvent.elements["TATAGUNALAIN"].value=""; 
	 }
 //
}

function cari_bangunanbawah(id) { 
	 if (id==8) 
	  { 	//administrator
			//alert(id);
			//LAIN LAIN
			 FrmInvent.BANGUNLERENGBAWAHLAIN.disabled=false;  
	 } else {
			 FrmInvent.BANGUNLERENGBAWAHLAIN.disabled=true;  
			 FrmInvent.BANGUNLERENGBAWAHLAIN.value='';   
			 //FrmInvent.elements["TATAGUNALAIN"].value=""; 
	 }
 //
}
</script> 
  
   
   
   
   	
 <script type="text/javascript">	
function addRowToTable()
{
		var tbl = document.getElementById('tblItem');
		var lastRow = tbl.rows.length;
		var iterasi_spph = lastRow+1;
		var row = tbl.insertRow(lastRow); 
 
		var cell1 = row.insertCell(0);
		cell1.innerHTML = "<td class='tdatahead' width='5%'  align='center' >&nbsp;"+iterasi_spph+".&nbsp;&nbsp;&nbsp;</td>";

		var cell2 = row.insertCell(1);
		cell2.innerHTML =  "<TD><SELECT  name=\"KDBANGUNAN_"+iterasi_spph+ "\"  onchange=\"cari_level2(this.value,"+iterasi_spph+");\" style='width=10px'> "+				
		"<OPTION VALUE='0'> </OPTION>"+
		"<?php  $data_detail = $this->minventarisasi->qlistmaster_bangunan(); ?>"+ 
		"<?php  foreach($data_detail as $k1 => $v1) { ?>"+ 
		"<?php echo "<option value = '$v1->kdbangunan'>$v1->nmbangunan</option>" ?>"+	
		"<?php } ?>"+
		"</SELECT></TD>"; 
				 
		var cell3 = row.insertCell(2);
		cell3.innerHTML = "<td class='tdatahead' width='25%' ><td class='tdatahead' width='20%'  ><input type='text' disabled style='width: 150px;' value='' name='ket_"+iterasi_spph+"' class=span4 id='ket_"+iterasi_spph+"' ></td></TD> ";
		
		var cell4 = row.insertCell(3);
		cell4.innerHTML = "<td class='tdatahead' width='20%'><input type='text' style='width: 50px;' value='' name='panjang_"+iterasi_spph+"' class=span4 id='panjang_"+iterasi_spph+"' ></td>" ;
		
		var cell5 = row.insertCell(4);
		cell5.innerHTML = "<td class='tdatahead'   width='25%' ><input type='text' style='width: 50px;' value='' name='lebaratas_"+iterasi_spph+"' class=span4  id='lebar_"+iterasi_spph+"' ></td>" ;
		
		
		var cell6 = row.insertCell(5);
		cell6.innerHTML = "<td class='tdatahead'   width='25%' ><input type='text' style='width: 50px;' value='' name='lebarbawah_"+iterasi_spph+"' class=span4  id='lebarbawah_"+iterasi_spph+"' ></td>" ;
		
		
		var cell7 = row.insertCell(6);
		cell7.innerHTML = "<td class='tdatahead'   width='25%' ><input type='text' style='width: 50px;' value='' name='tinggi_"+iterasi_spph+"' class=span4  id='tinggi_"+iterasi_spph+"' ></td>" ;
		 
		document.getElementById("iterasi_spph").value = iterasi_spph;		
}

				function removeRowFromTable() 
				{
					var tbl = document.getElementById('tblItem');
					var lastRow2 = tbl.rows.length;	
					var iterasi_spph2 = lastRow2-1;
					if (lastRow2 > 0) {
						tbl.deleteRow(lastRow2 - 1);	
						document.getElementById("iterasi_spph").value = iterasi_spph2;
					}
				}

				
				
				
	//DRAINASE
    //DRAINASE
function addRowToTableDrainase()
{
		var tbl = document.getElementById('tblItemDrainase');
		var lastRow = tbl.rows.length;
		var iterasi_spph = lastRow+1;
		var row = tbl.insertRow(lastRow); 
 
		var cell1 = row.insertCell(0);
		cell1.innerHTML = "<td class='tdatahead' width='5%'  align='center' >&nbsp;"+iterasi_spph+".&nbsp;&nbsp;&nbsp;</td>";

		var cell2 = row.insertCell(1);
		cell2.innerHTML =  "<TD><SELECT  name=\"KDBANGUNAN_"+iterasi_spph+ "\"  onchange=\"cari_level_drainase(this.value,"+iterasi_spph+");\" style='width=10px'> "+				
		"<OPTION VALUE='0'> </OPTION>"+
		"<?php  $data_detail = $this->minventarisasi->qlistmaster_drainase(); ?>"+ 
		"<?php  foreach($data_detail as $k1 => $v1) { ?>"+ 
		"<?php echo "<option value = '$v1->kddrainase'>$v1->nmdrainase</option>" ?>"+	
		"<?php } ?>"+
		"</SELECT></TD>"; 
				 
		var cell3 = row.insertCell(2);
		cell3.innerHTML = "<td class='tdatahead' width='25%' ><td class='tdatahead' width='20%'  ><input type='text' disabled style='width: 150px;' value='' name='ket_"+iterasi_spph+"' class=span4 id='ket_"+iterasi_spph+"' ></td></TD> ";
		
		var cell4 = row.insertCell(3);
		cell4.innerHTML = "<td class='tdatahead' width='20%'><input type='text' style='width: 50px;' value='' name='panjang_"+iterasi_spph+"' class=span4 id='panjang_"+iterasi_spph+"' ></td>" ;
		
		var cell5 = row.insertCell(4);
		cell5.innerHTML = "<td class='tdatahead'   width='25%' ><input type='text' style='width: 50px;' value='' name='lebar_"+iterasi_spph+"' class=span4  id='lebar_"+iterasi_spph+"' ></td>" ;
		
		
		var cell6 = row.insertCell(5);
		cell6.innerHTML = "<td class='tdatahead'   width='25%' ><input type='text' style='width: 50px;' value='' name='tinggi_"+iterasi_spph+"' class=span4  id='tinggi_"+iterasi_spph+"' ></td>" ;

		 
		document.getElementById("iterasi_spph_drainase").value = iterasi_spph;		
}

				function removeRowFromTableDrainase() 
				{
					var tbl = document.getElementById('tblItemDrainase');
					var lastRow2 = tbl.rows.length;	
					var iterasi_spph2 = lastRow2-1;
					if (lastRow2 > 0) {
						tbl.deleteRow(lastRow2 - 1);	
						document.getElementById("iterasi_spph_drainase").value = iterasi_spph2;
					}
				}


//DRAINASE
 //DRAINASE			
				function myFunction()
				{	
					var j= document.getElementById("iterasi_spph").value+1;
					for (var i=1;i<j;i++)
					{
						var x=document.getElementById("harga2_"+i.toString());
						var y=document.getElementById("kuantitas2_"+i.toString());
						if ((!isNaN(x.value))&&(!isNaN(y.value)))
						{
							document.getElementById("jumlah_harga2_"+i.toString()).value=x.value*y.value;
						}
					}	
				}
    
	 
				function cari_level2(id,a) {  
							//alert(id);   
							if (id==20) 
							{ 		 
							
									// FrmInvent.+x.disabled=false;  
									 
									 document.getElementById("ket_"+a).disabled = false;
							 } else {
									// FrmInvent.x.disabled=true;  
									 //FrmInvent.x.value='';   
									 
									 document.getElementById("ket_"+a).disabled = true;
									 
							 }
				}

					function cari_level_drainase(id,a) {  
							//	alert(id);   
							 if (id==5 ) 
						  	 { 		  
									// FrmInvent.+x.disabled=false;   
									 document.getElementById("ket_"+a).disabled = false;
							 } 
							 
							  else if (id==11 ) 
							  { 		  
									 //FrmInvent.+x.disabled=false;   
									 document.getElementById("ket_"+a).disabled = false;
									 
							  } else { 
									 // FrmInvent.x.disabled=true;  
									 // FrmInvent.x.value='';    
									 document.getElementById("ket_"+a).disabled = true;
									 
							 }
				}
  
   
   
   </script>
   

 <?php
  $this->load->view('theme/footer');
  $this->load->view('theme/control');
  $this->load->view('theme/js');
  ?>
  