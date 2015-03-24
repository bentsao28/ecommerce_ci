<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function cart()
	{
		$this->load->view('cart');
	}
	public function product_category()
	{
		$this->load->view('product_category');
	}
	public function product_view()
	{
		$this->load->view('product_view');
	}
	public function login()
	{
		$this->load->view('login');
	}
}

//end of main controller