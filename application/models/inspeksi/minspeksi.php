<?php
 class Minspeksi extends CI_Model{

			function _construct()
			{
				 // Call the Model constructor
				 parent::_construct();
				 $this->load->helper('url');    
			}
		   
			function qlistmaster_lereng() { 
				$string_query='SELECT * FROM public."tbl_inventarisasi"  ORDER BY "idinvent" '; 
				$q =  $this->db->query($string_query);
				if($q->num_rows()>0){
				return $q->result();
				}
			 }
		  
		  
			function getDetail($NOLERENG) { 
			 
  
					$string_query="select  tbl_inventarisasi .* ,  tbl_mst_ruas . nmruas   ,  nmpropinsi  from public. tbl_inventarisasi    left join  tbl_mst_ruas  on   tbl_mst_ruas . kdruas  =  tbl_inventarisasi . kdruas  left join  tbl_mst_propinsi  on  tbl_mst_propinsi . kdpropinsi  =  tbl_inventarisasi . kdpropinsi  where no_lereng= '$NOLERENG'"; 
  
				    return $this->db->query($string_query);
  
						//	VAR_DUMP($string_query);
						//	DIE;
		 
			 }
			 
}

?>
