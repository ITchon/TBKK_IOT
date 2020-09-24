<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usergroup extends CI_Controller {

    function __construct() { 
    
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_usergroup');
        $this->model->CheckSession();
        $this->model->load_menu();
        
    }
	public function index()
  {	

	}

    
	public function manage()
    {	
        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $sql =  'SELECT * FROM sys_user_groups ';
        $query = $this->db->query($sql); 
        $data['result'] = $query->result();
        $this->load->view('user_group/manage',$data); 

        if ($this->uri->segment('3')!=null){
            $id = $this->uri->segment('3');
            $sql =  "SELECT * FROM sys_user_groups WHERE delete_flag != 0 AND sug_id != 1
            and sug_id = $id";
            $query = $this->db->query($sql); 
           $data['res_edit'] = $query->result()[0];
        }
        
        $this->load->view('user_group/form',$data); 
        $this->load->view('user_group/rule_usergroup');
        $this->load->view('script');
        
    }


    public function add()
    {   
        //$this->model->CheckPermission($this->session->userdata('su_id'));

        $this->load->view('user_group/add'); 
        $this->load->view('footer');
    }


    public function insert()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $gname =  $this->input->post('gname');
        $result = $this->model_usergroup->insert_group($gname);
       if($result == true){
        redirect('usergroup/manage','refresh');
       }
       if($result == false){
        echo "<script>alert('Name already exist')</script>";
        redirect('usergroup/add','refresh'); 
       }
       if($result == 3){
        echo "<script>alert('Error')</script>";
        redirect('usergroup/add','refresh'); 
       }

    }

    public function enable($uid){

        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $result = $this->model_usergroup->enableGroup($uid);

        if($result!=FALSE){
            redirect('Usergroup/manage','refresh');

        }else{
        
            echo "<script>alert('Simting wrong')</script>";
       redirect('Usergroup/manage','refresh');
        }
    }

    public function disable($uid){

        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $result = $this->model_usergroup->disableGroup($uid);

        if($result!=FALSE){
            redirect('Usergroup/manage','refresh');
            

        }else{
            echo "<script>alert('Simting wrong')</script>";
            redirect('Usergroup/manage','refresh');

        }
    }

    public function deletegroup()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $this->model_usergroup->delete_group($this->uri->segment('3'));
        redirect('Usergroup/manage');
    }

    public function save_userg_permission()
    {

        $sug_id =  $this->input->post('sug_id');
  
        $spg_id =  $this->input->post('spg_id');
           $this->model_usergroup->deluserg_permission($sug_id);
           if($spg_id != ''){
            foreach ($spg_id as $spg) {
         $this->model_usergroup->insertuserg_permission($sug_id,$spg);
     }
           }

     redirect('Usergroup/manage','refresh');
 
    }

    public function edit_ug()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
         $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $id = $this->uri->segment('3');
        $sql =  "SELECT sug.sug_id, sug.name as sug_name from sys_user_groups as sug
          where sug.sug_id = $id";

        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 

        $this->load->view('user_group/edit',$data);
        $this->load->view('footer');
  
    }

    public function save_edit()
    {
        $sug_id =  $this->input->post('sug_id');
        $sug_name =  $this->input->post('sug_name');

        $this->model_usergroup->save_edit_ug($sug_id, $sug_name);
        redirect('Usergroup/manage');
    }




}

