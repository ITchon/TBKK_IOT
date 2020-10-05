<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() { 
    
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_user');
        $this->model->CheckSession();
        // $this->model->button_show($this->session->userdata('su_id'),2);     
        $this->model->load_menu();

    }
    public function manage()
    {   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
       
        $data['data'] =  $this->model_user->get_user(); 
        $this->load->view('user/manage',$data);
        $this->load->view('user/rule_user');
        $this->load->view('script');
        
    }

    public function add()
    {   
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $sql='SELECT * FROM sys_users  INNER JOIN sys_user_groups ON sys_users.sug_id=sys_user_groups.sug_id;';

        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 

        $sqlSelG = "SELECT * FROM sys_user_groups WHERE sug_id <>'1' AND enable='1' AND delete_flag != 0;";
        $query = $this->db->query($sqlSelG); 
        $data['excLoadG'] = $query->result(); 

        $this->load->view('user/add',$data);
        $this->load->view('script');
    }

    public function insert()
    {

        $p['usr'] = $this->input->post('txt_usr');
        $p['pwd'] = base64_encode($this->input->post('txt_pwd'));
        $p['group'] = $this->input->post('sel_group');
        $p['fname'] = $this->input->post('txt_fname');
        $p['lname'] = $this->input->post('txt_lname');
        $p['sex'] = $this->input->post('rad_sex');
        $p['email'] = $this->input->post('txt_email');
       $result = $this->model_user->addUser($p);
   	    if($result!=FALSE){					

        $this->session->set_flashdata('msgResponse', '<div class="alert alert-success fade in">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อยค่ะ </strong><br />Success : Add data success.</div>');
        //redirect('user/edituser/rule/'.$result.'');
        redirect('user/manage');

    }else{

        $this->session->set_flashdata('msgResponse','<div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <i class="fa-fw fa fa-times"></i>
                    <strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ค่ะ <br />Error : Add data not found.</div>');
        redirect('user/add');	
    }	
       

    }
    public function enable($id){
        //  $id = base64_decode($uid);
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));
        $result = $this->model_user->enableUser($id);
        if($result!=FALSE){
            redirect('user/manage','refresh');
        }else{
        
            echo "<script>alert('Simting wrong')</script>";
       redirect('user/manage','refresh');
        }
    }
    public function mobile($uid){
        $id = base64_decode($uid);
       $result = $this->model_user->mobile($id);
       if($result!=FALSE){
           redirect('user/manage','refresh');
       }else{
       
           echo "<script>alert('Error')</script>";
      redirect('user/manage','refresh');
       }
   }


    public function delete()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));

        $id = $this->uri->segment('3');
        // $id = base64_decode($decrypted_id);
        $this->model_user->delete_user($id);
        $this->session->set_flashdata('msgResponse','<div class="alert alert-success hide-it">  
        <span>  Delete Success</span>
      </div> ');
        redirect('user/manage');
    }

    public function save_user_permission()
    {

        $su_id =  $this->input->post('su_id');
        $sp_id =  $this->input->post('sp_id');
        // $su_id = base64_decode($id);
           $this->model_user->deluser_permission($su_id);
           if($sp_id != ''){
            foreach ($sp_id as $sp) {
         $this->model_user->insertuser_permission($su_id,$sp);
     }
           }

     redirect('user/manage','refresh');
 
    }

    public function edit()
    {
        $this->model->CheckPermission($this->session->userdata('su_id'));
        $this->model->CheckPermissionGroup($this->session->userdata('sug_id'));

        $id = $this->uri->segment('3');
        // $id = base64_decode($decrypted_id);
        $sql="SELECT * FROM sys_users  INNER JOIN sys_user_groups ON sys_users.sug_id=sys_user_groups.sug_id where su_id = '$id';";
        //$sql =  'SELECT * FROM sys_users ';
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        if($query->result()==null){
         echo '<script language="javascript">';
         echo 'alert("Error");';
         echo 'history.go(-1);';
         echo '</script>';
         exit();
        }
        $gender = $data['result'][0]->gender;
        $g = $data['result'][0]->sug_id;


        $sqlSelG = "SELECT * FROM sys_user_groups WHERE sug_id<>'1' AND enable='1' AND delete_flag != 0 AND sug_id != $g;";
        $query = $this->db->query($sqlSelG); 
        $data['excLoadG'] = $query->result(); 

        $this->load->view('user/edit',$data);

  


    }

    public function save_edit()
    {
        $data = array(
            'su_id' =>    $this->input->post('su_id');
            'username' => $this->input->post('username');
            'password' => $this->input->post('password');
            'gender' =>   $this->input->post('gender');
            'fname' =>    $this->input->post('fname');
            'lname' =>    $this->input->post('lname');
            'email' =>    $this->input->post('email');
            'sug_id' =>   $this->input->post('sug_id');
        );

        $this->model_user->save_edit_u($data);
        redirect('User/manage');
    }

    
}

