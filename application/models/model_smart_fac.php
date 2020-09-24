<?php

class Model_smart_fac extends CI_Model
{
    
    function insert_permissiongroup($gname,$status)
    {
     $sql ="INSERT INTO sys_permission_groups (name,enable,date_created,delete_flag) VALUES ( '$gname', '$status', CURRENT_TIMESTAMP,  '1' );";
       $query = $this->db->query($sql);  
      if($query){
        return true;
      }
      else{
        return false;
      }
    }

      public function disablePermission_Group($key=''){

        $sqlEdt = "UPDATE sys_permission_groups SET enable='0', date_updated=CURRENT_TIMESTAMP WHERE spg_id={$key};";
        $exc_user = $this->db->query($sqlEdt);
        if ($exc_user){
          return TRUE;   
        }else{  
          return FALSE; 
        }
      }


}

?>