<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Crud extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->model('model');
        $this->load->model('model_user');
        $this->load->model('model_ajax');
    }
    
    public function rule_user()
    {
        
      $id = $this->input->post('id');
      $data['result'] =  $this->model_user->get_user(); 
      $sql =  'select * from sys_users_permissions where su_id = '.$id.' ';
      $query = $this->db->query($sql); 
      $result_user= $query->result(); 

      $sql = "SELECT su.su_id,su.sug_id, su.firstname as su_name from sys_users as su where su.su_id = $id";
      $query = $this->db->query($sql); 
      $result_name= $query->result(); 
      $sug_id = $result_name[0]->sug_id;
    
      $sql = "SELECT sp.sp_id,sp.name as p_name , spg.name as g_name ,sugp.spg_id ,sp.controller FROM sys_permissions sp 
      inner join sys_users_groups_permissions sugp ON sugp.spg_id = sp.spg_id 
      inner join sys_permission_groups spg on spg.spg_id = sp.spg_id 
      inner join sys_menu_groups smg on smg.spg_id = spg.spg_id
      where sugp.sug_id= $sug_id and sp.delete_flag != 0 ORDER BY smg.order_no ASC , sp.name";
      $query = $this->db->query($sql); 
      $result_group= $query->result();
     
        $i = 0;
        
        echo '<button value='.$result_name[0]->su_name.' id="su_name" hidden></button>';
        echo ' <input type="text" name="su_id"  value='.$id.' hidden>';
      foreach($result_group as $r){     
        if($i !=  $r->spg_id){
            echo "<div class='col-xs-12'>
            <hr>
            <label style='cursor:pointer' for='".$r->spg_id."'  class='text-primary'>".$r->g_name."</label>
            <input value ='.$r->spg_id.' type='checkbox' name='pg' id=".$r->spg_id."> 
            </div>";
          }
         echo '<div class="col-xs-6" style="padding-top: 20px;">';
      ?>

        <input type="checkbox"  value="<?php echo $r->sp_id ?>" name="sp_id[]" id="<?php echo $r->controller ?>" class="<?php echo $r->spg_id ?>"
          <?php foreach($result_user as $rs ){ if($r ->sp_id == $rs->sp_id){
            echo 'checked';
            }
            } ?> 
         > 
        <label for="<?php echo $r->controller ?>" style="cursor: pointer;color:#5b6572"> <?php echo $r->p_name ?></label>
      </div>
      <?php
      $i = $r->spg_id;  
    }
     
     

    }
    public function rule_usergroup()
    {
      $id = $this->input->post('id');
        
      $sql1 =  "SELECT * from sys_users_groups_permissions where sug_id = $id";
            $query = $this->db->query($sql1); 
            $result_user= $query->result(); 

            $sql2 =  "SELECT sug.sug_id, sug.enable, sug.name, sug.name as sug_name from sys_user_groups as sug where sug.sug_id = $id and sug.enable != 0 and sug.delete_flag != 0";
            $query = $this->db->query($sql2); 
            $result= $query->result(); 

            $sql2 =  "SELECT * from sys_user_groups where delete_flag != 0 ";
            $query = $this->db->query($sql2); 
            $result_all = $query->result(); 

            $sql3 =  "SELECT * from sys_permission_groups where enable != 0 and delete_flag != 0 ";
            $query = $this->db->query($sql3); 
            $result_group= $query->result(); 
?>
            <input type="text" name="sug_id"  value="<?php echo $id ?> " hidden>
            <input type="text"  value="<?php echo $id ?> " hidden>
            <?php
        echo '<button value='.$result[0]->sug_name.' id="sug_name" hidden></button>';

                 foreach($result_group as $r){          
          ?>

                <div class="col-xs-6" style="padding-top: 20px;">
              <input type="checkbox" value="<?php echo $r->spg_id ?>" name="spg_id[]" id="<?php echo $r->spg_id ?>" <?php
              foreach($result_user as $rs ){
                    if($r ->spg_id == $rs->spg_id){
                    echo 'checked';
                  }
                  }?>  > 
        <label for="<?php echo $r->spg_id ?>" style="cursor: pointer;color:#5b6572">  <?php echo $r->name ?></label>
        
              
        </div>
            <?php
            
          }
         
     
     

    }
    public function fetch_part_drw()
    {
     if($this->input->post('d_id'))
     
     {
      echo $this->model_ajax->fetch_part_drw($this->input->post('d_id'));
     }
    }

    
    
   
    public function delete_user()
    {
     if($this->input->post('id'))
     {
        $this->model_ajax->delete_part_drw($this->input->post('id'));	
        echo json_encode(array(
            "statusCode"=>200
        ));
     }
    }
    public function delete_part_drw()
    {
     if($this->input->post('id'))
     {
        $this->model_ajax->delete_part_drw($this->input->post('id'));	
        echo json_encode(array(
            "statusCode"=>200
        ));
     }
    }


    public function fetch_folder()
    {
     if($this->input->post('cus_id'))
     {
      echo $this->model_ajax->fetch_folder($this->input->post('cus_id'),$this->input->post('chkf'));
     }
    }
 


 
 
}