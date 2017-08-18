<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class App extends CI_Controller { 

    function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
		 
	}

	public function index()
	{	 
			
				 
				$this->load->view('modul/app/login');			
						
 
	}
	
	
	
	public function login()
	{			 
                $this->load->view('home');
				//redirect('dashboard1');
	}
	
	public function sample()
	{			 
      
		$this->load->view('sample');
	}
	 
	public function logout()
	{
                redirect('app');
	}
	
}
 