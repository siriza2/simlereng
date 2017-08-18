<?php
 class Minventarisasi extends CI_Model{

		function _construct()
		{
			 // Call the Model constructor
			 parent::_construct();
			 $this->load->helper('url');    
		}
		   
		function qlistmaster_propinsi() { 
			$string_query='SELECT * FROM public."tbl_mst_propinsi"  ORDER BY "nmpropinsi" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			}
		 }
		 
		 function qlistmaster_ruas($KDPROPINSI) { 
			$string_query='SELECT * FROM public."tbl_mst_propinsi"  WHERE "kdpropinsi"='.$KDPROPINSI.' ORDER BY "nmpropinsi" '; 
			//VAR_DUMP($string_query);
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			}
			
			
		 }
		 
		 function qlistmaster_bentang() { 
			$string_query='SELECT * FROM public."tbl_mst_bentang" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			}
		 }
		  function qlistmaster_tataguna() { 
			$string_query='SELECT * FROM public."tbl_mst_tatagunalahan" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			}
		 }
		 
		 
		   function qlistmaster_vegetasi() { 
			$string_query='SELECT * FROM public."tbl_mst_vegetasi" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			}
		 }
		 
		 
		    function qlistmaster_persen_vegetasi() { 
			$string_query='SELECT * FROM public."tbl_mst_vegetasi_persen" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
			}
			
		     function qlistmaster_hidrologi() { 
			$string_query='SELECT * FROM public."tbl_mst_hidrologi" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
			}
		 
			function qlistmaster_cuaca() { 
			$string_query='SELECT * FROM public."tbl_mst_cuaca" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
			}
		 
			function qlistmaster_bangunlereng() { 
			$string_query='SELECT * FROM public."tbl_mst_bangun_lereng" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
			}
		 
		 
		 	function qlistmaster_bangunataslereng() { 
			$string_query='SELECT * FROM public."tbl_mst_bangun_lereng" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		 }
		 
		function qlistmaster_bangunbawahlereng() { 
			$string_query='SELECT * FROM public."tbl_mst_bangun_bawah_lereng" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		 }
		  	function qlistmaster_jenis() { 
			$string_query='SELECT * FROM public."tbl_mst_jenis_lereng" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		 }
		   	function qlistmaster_material() { 
			$string_query='SELECT * FROM public."tbl_mst_material" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
			}
		 
		  	function qlistmaster_tingkat() { 
			$string_query='SELECT * FROM public."tbl_mst_tingkatlapuk" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
		 	function qlistmaster_setdiskon() { 
			$string_query='SELECT * FROM public."tbl_mst_set_diskon" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
		 function qlistmaster_bangunan() { 
			$string_query='SELECT * FROM public."tbl_mst_bangunan" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			
				 function qlistmaster_luaslongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_luaslongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			
			
				 function qlistmaster_letaklongsor() { 
			$string_query='SELECT * FROM public."tbl_letaklongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			function qlistmaster_materiallongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_materiallongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			 
			
			
			function qlistmaster_kondisilongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_kondisilongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			
			
			
			
			function qlistmaster_sebablongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_sebablongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			function qlistmaster_rusaklongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_kerusakanlongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			function qlistmaster_potensilongsor() { 
			$string_query='SELECT * FROM public."tbl_mst_potensiallongsor" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
				function qlistmaster_jenis_perkerasan() { 
			$string_query='SELECT * FROM public."tbl_mst_jns_perkerasan" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			
			function qlistmaster_drainase() { 
			$string_query='SELECT * FROM public."tbl_mst_drainase" '; 
			$q =  $this->db->query($string_query);
			if($q->num_rows()>0){
			return $q->result();
			} 
		    }
			
			
			
}

?>
