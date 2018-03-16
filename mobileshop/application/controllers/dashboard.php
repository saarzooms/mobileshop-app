<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct() 
    {      
	
         parent:: __construct();
		 $this->load->helper('url');

    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
	}
	public function category()
	{
		$this->load->view('header');
		$this->load->view('category');
	}
	public function brand()
	{
		$this->load->view('header');
		$this->load->view('brand');
	}
	public function supplier()
	{
		$this->load->view('header');
		$this->load->view('supplier');
	}
	public function user()
	{
		$this->load->view('header');
		$this->load->view('user');
	}
	public function purchase()
	{
		$this->load->view('header');
		$this->load->view('purchase');
	}
	public function changepassword()
	{
		$this->load->view('header');
		$this->load->view('changepassword');
	}
}
