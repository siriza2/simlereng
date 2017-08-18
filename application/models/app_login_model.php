<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Login_Model extends CI_Model {

	/*
		***	Model : app_login_model.php		 
	*/

	public function getLoginData($data)
	{
			 $login['id_user'] = $data['id_user'];
			 $login['user_password'] = base64_encode($data['user_password']);

			  $id_user = $data['id_user'];
			 $user_password = base64_encode($data['user_password']);


			// $login['status_online'] ='1';

		$string_query="SELECT * FROM tbl_sys_master_user WHERE id_user='$id_user' AND user_password='$user_password'  AND user_active_status=1 ";
	//	 VAR_DUMP($string_query);
	//	 DIE;
		$cek = $this->db->query($string_query);
 
		if($cek->num_rows()>0)
		{
					foreach($cek->result() as $qad)
					{
						$sess_data['logged_in'] = 'yesGetMeLoginBaby';
						$sess_data['id_user'] = $qad->id_user;
						$sess_data['kode_user'] = $qad->kode_user;
						$sess_data['username'] = $qad->id_user;
						$sess_data['nama'] = $qad->user_first_name;
						$sess_data['stts'] = $qad->id_jenis_user;
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'');
		}
		else
		{
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.");
			header('location:'.base_url().'');
		}
	}
}

/* End of file app_login_model.php */
/* Location: ./application/models/app_login_model.php */