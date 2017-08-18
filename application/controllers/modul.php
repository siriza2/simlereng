<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {


	function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
		 
	}

	public function index()
	{
		$this->load->view('modul/inventarisasi');
	}
	
	public function inspeksiberkala()
	{
		$this->load->view('modul/inpeksiberkala');
	}
	
	public function inspeksirutin()
	{
		$this->load->view('modul/inspeksirutin');
	}
	
	public function inspeksikhusus()
	{
		$this->load->view('modul/inspeksikhusus');
	}
	
	
	
	
	
}
