<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone3 extends CI_Controller {

    function __construct() { 
    
         parent::__construct(); 

         $this->load->model('model');
         $this->model->load_menu();
    }

	public function manage()
    {	
        $db1 = $this->load->database('smart_fac',TRUE); 
        $query = $db1->query('select * from Table_Zone3_Brother');
        $data['result'] = $query->result();
        $this->load->view('smart_fac/table_zone3_brother',$data);

 
    }



}
