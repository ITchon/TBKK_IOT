<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone5 extends CI_Controller {

    function __construct() { 
    
         parent::__construct(); 

         $this->load->model('model');
         $this->model->load_menu();
    }

	public function manage()
    {	
        $db1 = $this->load->database('smart_fac',TRUE); 
        $query = $db1->query('select * from Table_Zone5_LeakTest');
        $data['result'] = $query->result();
        $this->load->view('smart_fac/table_zone5_leaktest',$data);


    }
	public function edit()
    {	
        $db1 = $this->load->database('smart_fac',TRUE); 
        $query = $db1->query('select * from Table_Zone5_LeakTest');
        $data['result'] = $query->result();
        $this->load->view('smart_fac/zone5/edit');
    }



}

