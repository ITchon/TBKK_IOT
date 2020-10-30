<?php

class Model_machine extends CI_Model
{
    function insert_machine($mach_name, $mach_no)
    {
     $sql ="INSERT INTO machine (machine_name,machine_no,date_created,delete_flag) VALUES ( '$mach_name', '$mach_no',CURRENT_TIMESTAMP,'1' );";
       $query = $this->db->query($sql);  
      if($query){
        return true;
      }
      else{
        return false;
      }
    }

    public function delete_machine($id) {
        $sql ="UPDATE machine SET delete_flag = '0' , date_deleted=CURRENT_TIMESTAMP WHERE machine_id = '$id'";
        $query = $this->db->query($sql);
           if ($query) { 
              return true; 
           } 
           else{
           return false;
          }
        }

    
    public function save_edit($id,$mach_name, $mach_no)
    {
      $sql1 ="UPDATE machine SET machine_name = '$mach_name',machine_no = '$mach_no',date_updated = CURRENT_TIMESTAMP WHERE machine_id = '$id'";
      $exc = $this->db->query($sql1);
      if ($exc ){ return true; }else{ return false; }
    }       
    public function get_mach_no($mach_name)
    {
      $sql ="SELECT * FROM machine where machine_name = '$mach_name'";
      $query = $this->db->query($sql);
      $result = $query->result();
      if($result){
        return $result[0]->machine_no;
      }else{
        return false;
      }



    }       
    
    public function get_machine($mach_no,$zone)
    {
      $db1 = $this->load->database('smart_fac',TRUE);
      switch($zone){
        case 1 : $sql ="select * from Table_Line1_Zone1_Muratech where MachineNo = '$mach_no'";
        break;
        case 4 : $sql ="select * from Table_Line1_Zone4_Mitsu_Muratech where MachineNo = '$mach_no'";
        break;
        case 5 : $sql ="select * from Table_Line1_Zone5_LeakTest where MachineNo = '$mach_no'";
        break;
      } 
      $query = $db1->query($sql);
      $data = $query->result();
      return $data;
    }            
    public function machine_data_zone1($mach_no)
    {
      $db1 = $this->load->database('smart_fac',TRUE); 
      $sql = "select * FROM Table_Line1_Zone1_Muratech WHERE [MachineNo] = '$mach_no' AND [Index]=(SELECT max([Index]) FROM Table_Line1_Zone1_Muratech)";
      $query = $db1->query($sql);
      $data= $query->result();
      return $data;
    }       
    public function machine_data_zone4($mach_no)
    {
      $db1 = $this->load->database('smart_fac',TRUE); 
      $sql = "select * FROM Table_Line1_Zone4_Mitsu_Muratech WHERE [MachineNo] = '$mach_no' AND [Index]=(SELECT max([Index]) FROM Table_Line1_Zone4_Mitsu_Muratech)";
      $query = $db1->query($sql);
      $data= $query->result();
      return $data;
    }       
    public function machine_data_zone5($mach_no)
    {
      $db1 = $this->load->database('smart_fac',TRUE); 
      $sql = "select * FROM Table_Line1_Zone5_LeakTest WHERE [MachineNo] = '$mach_no' AND [Index]=(SELECT max([Index]) FROM Table_Line1_Zone5_LeakTest)";
      $query = $db1->query($sql);
      $data= $query->result();
      return $data;
    }       
}

?>