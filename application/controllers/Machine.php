<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machine extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_machine');
        $this->load->helper('url'); 
        $this->model->CheckSession();
        $this->model->load_menu(); 
    }

	public function manage()
    {	
        $sql =  'select * from machine where delete_flag != 0';
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $this->load->view('machine/manage',$data);
        $this->load->view('script');
    }
	public function add()
    {	
 
        $this->load->view('machine/add');

    }
	public function edit()
    {	
        $id = $this->uri->segment('3');
        $sql="SELECT * FROM machine  where machine_id = '$id';";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $this->load->view('machine/edit',$data);
        $this->load->view('script');

    }
	public function insert()
    {	
        $mach_name =  $this->input->post('mach_name');
        $mach_no =  $this->input->post('mach_no');
        $result = $this->model_machine->insert_machine($mach_name,$mach_no);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Insert Successfully</span>
         </div> ');
        redirect('machine/add');
    }
    public function save_edit()
    {
        $mach_id =  $this->input->post('mach_id');
        $mach_name =  $this->input->post('mach_name');
        $mach_no =  $this->input->post('mach_no');
        $this->model_machine->save_edit($mach_id,$mach_name,$mach_no);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Edit Successfully</span>
         </div> ');
        redirect('machine/manage');
    }
    public function delete()
    {
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Delete Successfully</span>
         </div> ');
        $this->model_machine->delete_machine($this->uri->segment('3'));
        redirect('machine/manage');
    }


}

