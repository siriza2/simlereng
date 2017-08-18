<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inventarisasi extends CI_Controller { 

     

	public function tambah()
	{	 	
						$this->load->model('inventarisasi/minventarisasi');   
						$d['qlistmaster_propinsi'] = $this->minventarisasi->qlistmaster_propinsi();
						$d['qlistmaster_ruas'] = $this->minventarisasi->qlistmaster_ruas('7');
				
						$d['qlistmaster_bentang'] = $this->minventarisasi->qlistmaster_bentang(); 
						$d['qlistmaster_tataguna'] = $this->minventarisasi->qlistmaster_tataguna();
						$d['qlistmaster_vegetasi'] = $this->minventarisasi->qlistmaster_vegetasi(); 
						$d['qlistmaster_persen_vegetasi'] = $this->minventarisasi->qlistmaster_persen_vegetasi(); 
						$d['qlistmaster_hidrologi'] = $this->minventarisasi->qlistmaster_hidrologi();
						$d['qlistmaster_cuaca'] = $this->minventarisasi->qlistmaster_cuaca();
						$d['qlistmaster_bangunlereng'] = $this->minventarisasi->qlistmaster_bangunlereng();
						$d['qlistmaster_bangunataslereng'] = $this->minventarisasi->qlistmaster_bangunataslereng();
						$d['qlistmaster_bangunbawahlereng'] = $this->minventarisasi->qlistmaster_bangunbawahlereng();
						
						$d['qlistmaster_jenis'] = $this->minventarisasi->qlistmaster_jenis(); 
						$d['qlistmaster_material'] = $this->minventarisasi->qlistmaster_material();
						$d['qlistmaster_tingkat'] = $this->minventarisasi->qlistmaster_tingkat();
						
						$d['qlistmaster_setdiskon'] = $this->minventarisasi->qlistmaster_setdiskon();
						$d['qlistmaster_bangunan'] = $this->minventarisasi->qlistmaster_bangunan();
						$d['qlistmaster_luaslongsor'] = $this->minventarisasi->qlistmaster_luaslongsor();
						$d['qlistmaster_letaklongsor'] = $this->minventarisasi->qlistmaster_letaklongsor();
						$d['qlistmaster_materiallongsor'] = $this->minventarisasi->qlistmaster_materiallongsor(); 
						$d['qlistmaster_kondisilongsor'] = $this->minventarisasi->qlistmaster_kondisilongsor();
						
						 $d['qlistmaster_sebablongsor'] = $this->minventarisasi->qlistmaster_sebablongsor();
						 $d['qlistmaster_rusaklongsor'] = $this->minventarisasi->qlistmaster_rusaklongsor();
						 $d['qlistmaster_potensilongsor'] = $this->minventarisasi->qlistmaster_potensilongsor();
						 $d['qlistmaster_jenis_perkerasan'] = $this->minventarisasi->qlistmaster_jenis_perkerasan();
						 $d['qlistmaster_drainase'] = $this->minventarisasi->qlistmaster_drainase();
						
						
				$this->load->view('modul/inventarisasi/input_inventarisasi',$d);			
			
	}
	
	
	public function index()
	{	 	
				$this->load->view('modul/inventarisasi/listdata');			
			
	}
	
	
		
}
 