<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permissiongroup extends CI_Controller {

    function __construct() { 
    
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_permission_group');
        $this->model->CheckSession();
        $this->model->load_menu();

    }
	public function index()
    {	
    
	}

    
	public function manage()
    {	
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $sql =  'select * from sys_permission_groups where delete_flag != 0';
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $this->load->view('permission_group/manage',$data);
        if ($this->uri->segment('3')!=null){
            $id = $this->uri->segment('3');
            $sql =  "SELECT * from sys_permission_groups where spg_id = $id";
            $query = $this->db->query($sql); 
           $data['res_edit'] = $query->result()[0];
        }
        $this->load->view('permission_group/form',$data);
		$this->load->view('script');
	}

    // public function add()
    // {   
    //    $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
    //     $this->model->CheckPermission($this->session->userdata('su_id'));

    //     $this->load->view('permission_group/add');
    //     $this->load->view('footer');
    // }

     public function enable($uid){

       $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));

        $result = $this->model_permission_group->enablePermission_Group($uid);

        if($result!=FALSE){
            redirect('permissiongroup/manage','refresh');

        }else{
        
            echo "<script>alert('Simting wrong')</script>";
            redirect('permissiongroup/manage','refresh');
        }
    }


    public function disable($uid){

        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));

        $result = $this->model_permission_group->disablePermission_Group($uid);

        if($result!=FALSE){
            redirect('permissiongroup/manage','refresh');
            

        }else{
            echo "<script>alert('Simting wrong')</script>";
            redirect('permissiongroup/manage','refresh');

        }
    }

    public function insert()
    {
        $gname =  $this->input->post('txt_name');
        $status =  $this->input->post('rad_status');
        $result = $this->model_permission_group->insert_permissiongroup($gname,$status);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Insert Successfully</span>
         </div> ');
        redirect('permissiongroup/manage');
    }

    public function delete()
    {
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Delete Successfully</span>
         </div> ');
        $this->model_permission_group->delete_permissiongroup($this->uri->segment('3'));
        redirect('permissiongroup/manage');
    }

    public function edit_pg()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $id = $this->uri->segment('3');
        $sql =  "SELECT * from sys_permission_groups where spg_id = $id";

        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 

        $this->load->view('permission_group/edit',$data);
        $this->load->view('footer');
  
    }

    public function save_edit()
    {
        $spg_id =  $this->input->post('spg_id');
        $spg_name =  $this->input->post('spg_name');
        $rad_status =  $this->input->post('rad_status');

        $this->model_permission_group->save_edit_pg($spg_id, $spg_name ,$rad_status);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Edit Successfully</span>
         </div> ');
        redirect('permissiongroup/manage');


  
    }


}

