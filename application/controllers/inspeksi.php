<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Inspeksi extends CI_Controller { 
 
	public function tambah()
	{	 	
					$this->load->model('inspeksi/minspeksi');   
					$d['qlistmaster_lereng'] = $this->minspeksi->qlistmaster_lereng(); 
					$this->load->view('modul/inspeksi/cari',$d);	 
	}
	 
	
	public function index()
	{	 	
				$this->load->view('modul/inspeksi/listdata');	 
	}
	
	
	public function berkala()
	{	 	
				$this->load->view('modul/inspeksi/inputinpeksiberkala');			
			
	}
	
	public function cari()
	{	 	
				$JENIS_INSPEKSI      = $_POST['jenis_inspeksi'] ;  
				$NOLERENG     		 = $_POST['NOLERENG'] ;  
			 
			 
			// ECHO $NOLERENG;
			// 
			// DIE;
				$d['JENIS_INSPEKSI'] = $_POST['jenis_inspeksi'] ; 
				$d['NOLERENG'] 		 = $_POST['NOLERENG'] ; 	
				
				
					   $this->load->model('inspeksi/minspeksi');   
					   $qpaket = $this->minspeksi->getDetail($NOLERENG);
						if($qpaket->num_rows()>0){
							$rspaket = $qpaket->row();
							$d['nmruas'] = $rspaket->nmruas;
							$d['nmpropinsi'] = $rspaket->nmpropinsi;
							
							$d['arahjalan1'] = $rspaket->arahjalan1;
							$d['arahjalan2'] = $rspaket->arahjalan2;
							$d['km1'] 		 = $rspaket->km1;
							$d['km2'] 		 = $rspaket->km2;
							
							$d['bagian_lereng'] = $rspaket->bagian_lereng;
							$d['status_jalan'] = $rspaket->status_jalan;
								$d['status_jalan'] = $rspaket->status_jalan;
							
						}	
							
				IF ($JENIS_INSPEKSI==1) {//berkala
					$this->load->view('modul/inspeksi/inputinpeksiberkala',$d);	
				}ELSEIF ($JENIS_INSPEKSI==2) {//rutin
					$this->load->view('modul/inspeksi/inputinpeksirutin',$d);	
				}ELSEIF ($JENIS_INSPEKSI==3) {//khusus
					$this->load->view('modul/inspeksi/inputinpeksikhusus',$d);	
				} 
				
				
				
	}
	
	
	
		
}
 