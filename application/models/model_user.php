<?php

class Model_user extends CI_Model
{

  
      public function get_user()
      {
        $sql =  "SELECT su.su_id,su.password,su.username, su.firstname ,su.lastname, su.gender,su.email,su.enable,su.delete_flag, sug.name as g_name,su.mobile,su.date_created
        FROM
        sys_users  AS su 
        INNER JOIN sys_user_groups AS sug ON sug.sug_id = su.sug_id where su.delete_flag != 0 ";
        $query = $this->db->query($sql); 
        $result =  $query->result();
        return  $result;
      }

      public function addUser($p){


        $sqlIns = "INSERT INTO sys_users (sug_id, username, password, firstname, lastname, gender, email, enable, date_created, date_updated,delete_flag) VALUES ( '{$p['group']}', '{$p['usr']}', '{$p['pwd']}', '{$p['fname']}', '{$p['lname']}', '{$p['sex']}', '{$p['email']}', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP,1 );";
        $excIns = $this->db->query($sqlIns);
    
        $sqlSel = "SELECT MAX(su_id) AS su_id FROM sys_users ;";
        $query = $this->db->query($sqlSel);
        $get_id = $query->result_array();
          
        $lastId = $get_id[0]['su_id'];
                 
        ## User Permission // with controller like  manage  only
        $sqlSelPerm = "SELECT
          sp.sp_id,
          sp.name
          FROM
          sys_users_groups_permissions AS sugp
          LEFT JOIN sys_permission_groups AS spg ON spg.spg_id = sugp.spg_id
          LEFT JOIN sys_permissions AS sp ON sp.spg_id = spg.spg_id
          WHERE spg.enable='1' AND sp.enable='1'  AND sp.controller like '%manage%' AND sugp.sug_id='{$p['group']}';";
        $excSelPerm = $this->db->query($sqlSelPerm);
        
        foreach($excSelPerm->result() AS $p){
    
    
          $sqlIns = "INSERT INTO sys_users_permissions (su_id, sp_id, date_created) VALUES ( '$lastId', '$p->sp_id', CURRENT_TIMESTAMP );";
          $excInsPerm = $this->db->query($sqlIns);
    
        }
    
          
        if($excIns && $excInsPerm){ return $lastId; }else{ return FALSE; }
        
      }
      
      function insert($fname,$lname,$username,$password,$gender,$email,$sug_id)
      {
     
     $password = base64_encode(trim($password));
       $num= $this->db->query("SELECT * FROM sys_users where username = '$username'"); 
       $chk= $num->result();
     
      if($chk==null){
         $sql1 ="INSERT INTO sys_users (sug_id, username, password, firstname, lastname, gender, email, enable, date_created, date_updated,delete_flag) VALUES ( '$sug_id', '$username', '$password', '$fname', '$lname', '$gender', '$email', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '1' )";
         $query= $this->db->query($sql1); 
       if($query){
           return true;
        }else{
         return 3;
        }
      }
      return false;      
      }

      public function enableUser($key){
        $query = $this->db->query("SELECT * from sys_users WHERE su_id = $key "); 
        $result = $query->result();
        if( $result[0]->enable==0){
        $sqlEdt = "UPDATE sys_users SET enable='1' , date_updated=CURRENT_TIMESTAMP WHERE su_id={$key};";
        $exc_user = $this->db->query($sqlEdt);
        }
        else{
          $sqlEdt = "UPDATE sys_users SET enable='0' , date_updated=CURRENT_TIMESTAMP WHERE su_id={$key};";
          $exc_user = $this->db->query($sqlEdt);
        }
      
        if ($exc_user){
          
          return TRUE;    
          
        }else{    return FALSE;   }
        
      }

      public function mobile($key){
   
        if ($key){
          $query = $this->db->query("SELECT * from sys_users WHERE su_id = $key "); 
          $result = $query->result();
          if( $result[0]->mobile==0 ){
          $sqlEdt = "UPDATE sys_users SET mobile='1' , date_updated=CURRENT_TIMESTAMP WHERE su_id={$key};";
          $exc_user = $this->db->query($sqlEdt);
          }
          else{
            $sqlEdt = "UPDATE sys_users SET mobile='0' , date_updated=CURRENT_TIMESTAMP WHERE su_id={$key};";
            $exc_user = $this->db->query($sqlEdt);
          }
      
          return TRUE;    
       
        }
       
        else{    return FALSE;   }
      }

      public function delete_user($id) {
        $sql ="UPDATE sys_users SET delete_flag = '0' , date_deleted=CURRENT_TIMESTAMP WHERE su_id = '$id'";
        $query = $this->db->query($sql);
           if ($query) { 
              return true; 
           } 
           else{
          return false;
        }
        }      
        public function deluser_permission($su_id)
        {
          $sql  =  "DELETE FROM sys_users_permissions WHERE su_id = $su_id";
          $query = $this->db->query($sql); 
          if ($query) { 
            return true; 
          } 
          else{
             return false;
          } 
        }

        public function insertuser_permission($su_id,$sp)
        {
           $sql  = "INSERT INTO sys_users_permissions(su_id, sp_id, date_created) VALUES  ('$su_id','$sp',CURRENT_TIMESTAMP)";
           $query = $this->db->query($sql);
          if ($query) { 
            return true; 
          } 
          else{
             return false;
          }
        }  

        public function save_edit_u($data)
        {
          $password = base64_encode(trim($data['password']));
           $sql ="UPDATE sys_users SET sug_id = '$data[sug_id]', username = '$data[username]', password = '$password', firstname = '$data[fname]', lastname = '$data[lname]',
            gender = '$data[gender]', email = '$data[email]', date_updated = CURRENT_TIMESTAMP WHERE su_id = '$data[su_id]'";
          $exc_user = $this->db->query($sql);
          if ($exc_user ){ return true; }else{ return false; }
        }

        public function delete_group($id) {
            $sql ="UPDATE sys_user_groups SET delete_flag = '0' , date_deleted=CURRENT_TIMESTAMP WHERE sug_id = '$id'";
            $query = $this->db->query($sql);
               if ($query) { 
                  return true; 
               } 
               else{
              return false;
            }
            } 
            
        public function deluserg_permission($sug_id)
        {
              $sql  =  "DELETE FROM sys_users_groups_permissions WHERE sug_id = '$sug_id'";
              $query = $this->db->query($sql); 
              if ($query) { 
                return true; 
              } 
              else{
                 return false;
              } 
        } 

        public function insertuserg_permission($sug_id,$spg)
        {
           $sql  = "INSERT INTO sys_users_groups_permissions(sug_id, spg_id, date_created) VALUES  ('$sug_id','$spg',CURRENT_TIMESTAMP)";
           $query = $this->db->query($sql);
          if ($query) { 
            return true; 
          } 
          else{
             return false;
          }
        }

        public function save_edit_ug($sug_id, $sug_name,$status)
        {
           $sql1 ="UPDATE sys_user_groups SET name = '$sug_name', enable = '$status' date_updated = CURRENT_TIMESTAMP WHERE sug_id = '$sug_id'";
          $exc_user = $this->db->query($sql1);
          if ($exc_user ){ return true; }else{ return false; }
        }                           
}

?>