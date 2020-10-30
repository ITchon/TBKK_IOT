<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone1 extends CI_Controller {

    function __construct() { 
    
         parent::__construct(); 

         $this->load->model('model');
         $this->model->CheckSession();
         $this->model->load_menu();

    }

	public function manage()
    {	
        $db1 = $this->load->database('smart_fac',TRUE); 
        $query = $db1->query('select * from table_Line1_zone1_muratech');
        $data['result'] = $query->result();
        $this->load->view('smart_fac/table_zone1_muratech',$data);
        $this->load->view('smart_fac/modal');
        $this->load->view('smart_fac/script');


    }



}

