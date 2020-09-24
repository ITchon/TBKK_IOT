<?php

class Model_permission extends CI_Model
{
    function insert_permission($gname, $controller, $spg_id ,$status)
    {
     $sql ="INSERT INTO sys_permissions (spg_id,name,controller,enable,date_created,delete_flag) VALUES ( '$spg_id', '$gname', '$controller', '$status', CURRENT_TIMESTAMP,  '1' );";
       $query = $this->db->query($sql);  
      if($query){
        return true;
      }
      else{
        return false;
      }
    }

    public function delete_permission($id) {
        $sql ="UPDATE sys_permissions SET delete_flag = '0' , date_deleted=CURRENT_TIMESTAMP WHERE sp_id = '$id'";
        $query = $this->db->query($sql);
           if ($query) { 
              return true; 
           } 
           else{
           return false;
          }
        }

    
    public function save_edit($sp_id, $sp_name,$controller, $spg_id,$status)
    {
      $sql1 ="UPDATE sys_permissions SET name = '$sp_name',controller = '$controller', spg_id = '$spg_id', enable = $status, date_updated = CURRENT_TIMESTAMP WHERE sp_id = '$sp_id'";
      $exc_user = $this->db->query($sql1);
      if ($exc_user ){ return true; }else{ return false; }
    }       
}

?>