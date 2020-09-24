<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


		 
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
        $this->load->model('model');
		$this->model->load_menu();
	}
	public function home(){
        $this->load->view('dashboard');
	}
}
