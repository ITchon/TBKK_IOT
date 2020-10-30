<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smf_detail extends CI_Controller {

    function __construct() { 
    
        parent::__construct(); 
        $this->load->view('header');
        $this->load->model('model_machine');

    }
	public function Mc_name()
    {	
        
        $mach_name =  $this->uri->segment('3');
        $mach_no = $this->model_machine->get_mach_no($mach_name);
        $zone =  substr($mach_no,5,1)."<br>";
        if($mach_no == false ){
            echo '<script language="javascript">';
            echo 'alert("No data");';
            echo 'history.go(-1);';
            echo '</script>';
            exit();
            
        }
        $result = $this->model_machine->get_machine($mach_no,$zone);
        $data['result_mach'] = $result;
        $this->load->view('smf_detail/view',$data);

	}

    


}

