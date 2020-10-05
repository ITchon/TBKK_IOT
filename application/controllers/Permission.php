<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller {

    function __construct() { 
    
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_permission');
        $this->load->helper('url'); 
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
        $sql =  'select sp.sp_id ,sp.name,spg.name as spg_name ,sp.enable from sys_permissions sp inner join sys_permission_groups spg on spg.spg_id = sp.spg_id where sp.delete_flag !=0';
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $sql = "SELECT * FROM sys_permission_groups where delete_flag != 0 and enable != 0";
        $query = $this->db->query($sql);
        $data['excLoadG'] = $query->result(); 
        $this->load->view('permission/manage',$data);//bring $data 
        if($this->uri->segment('3')!=null){//   ----------------   EDIT  -------------        //
        $id = $this->uri->segment('3');
        $sql = "SELECT sp.sp_id, sp.name as sp_name, spg.spg_id, spg.name as spg_name, sp.controller ,sp.enable from sys_permissions as sp
        inner join sys_permission_groups as spg on spg.spg_id = sp.spg_id
        where sp.sp_id = $id ";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $group = $data['result'][0]->spg_id;
        $sql = "SELECT * from sys_permission_groups where delete_flag !=0 AND spg_id != $group  and enable != 0";
        $query = $this->db->query($sql); 
        $data['result_g'] = $query->result(); 
        }                               //  ------------------------------------------   //
		$this->load->view('permission/form',$data);
		$this->load->view('script');
    }
    public function insert()
    {
        $sp_name =  $this->input->post('txt_name');
        $controller = $this->input->post('txt_cont');
        $spg_id =  $this->input->post('sel_group');
		$status = trim($this->input->post('rad_status'));
        $result = $this->model_permission->insert_permission($sp_name, $controller, $spg_id,$status);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Insert Successfully</span>
        </div> ');
        redirect('permission/manage');
    }

    public function delete()
    {
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model_permission->delete_permission($this->uri->segment('3'));
        redirect('permission/manage');
    }

    public function save_edit()
    {
        $sp_id =  $this->input->post('sp_id');
        $sp_name =  $this->input->post('txt_name');
        $controller = $this->input->post('txt_cont');
        $spg_id =  $this->input->post('sel_group');
		$status = trim($this->input->post('rad_status'));
        $this->model_permission->save_edit($sp_id, $sp_name,$controller, $spg_id,$status);
        redirect('permission/manage');
    }

}

