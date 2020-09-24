<?php

class Model_ajax extends CI_Model
{
    function fetch_drawing($pd_id)
    {
      $sql ="SELECT  pd.p_id,pd.pd_id,p.p_no,p.p_name,d.d_no,d.d_name from part_drawing pd
      inner join part p on p.p_id = pd.p_id 
      inner join drawing d on d.d_id = pd.d_id where pd.p_id != $pd_id and pd.delete_flag != 0";
     $query = $this->db->query($sql); 

     $output = '<optgroup  label="P/NO|DWG/NO" >';
     foreach($query->result() as $row)
     {
       
      $output .= '<option value="'.$row->pd_id.'">'.$row->p_no." | ".$row->d_no.'</option>';
     }

     return $output;
    }

    
    function fetch_part_drw($d_id)
    {

      // <a href='".base_url()."drawing/deletedrawing/".$r->d_id ."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-default no-border fa fa-trash'></i></a>
      $sql ="SELECT * from part_drawing  as pd
      left join part as p on p.p_id = pd.p_id
      where pd.d_id = $d_id and p.delete_flag != 0 and pd.delete_flag != 0";
     $query = $this->db->query($sql); 
     $output='';
     
     foreach($query->result() as $r){
        $output .= '<tr >
        <td>Part No</td>
        <td>'.$r->p_no.'</td>
        <td><a   data-id='.$r->pd_id.' class="btn btn-danger fa fa-trash delete "></a></td>
        </tr>';
        }
  

     return $output;
    }

    function fetch_pd_edit($rev,$d_id)
    {
     
      $sql = "SELECT * FROM version where rd_id = $d_id";
      $query = $this->db->query($sql); 
      $res = $query->result()[0];
      $sql ="SELECT rd.p_no,rd.rd_id,rd.rev FROM version v inner join revision_drawing rd on rd.rd_id = v.rd_id where rd.rev = $rev and rd.delete_flag != 0 and v.d_id = $res->d_id";
     
     $query = $this->db->query($sql); 
     $output='';
     
     foreach($query->result() as $r){
        $output .= '<tr><td>Part No</td><td>'.$r->p_no.'</td>
         <td><a data-id='.$r->rd_id.' class="btn btn-danger fa fa-trash delete "></a></td>
        </tr>';
        }
     return $output;
    }

    function fetch_folder($cus_id,$f_id)
    {
      $sql ="SELECT fg.fg_id,f.f_id,f.name as folname from customers as cus
      inner join folder_group as fg on fg.fg_id = cus.fg_id
      inner join folder as f on f.fg_id = fg.fg_id
      where cus.cus_id = $cus_id";
     $query = $this->db->query($sql); 

     $output = '<optgroup label="" >';
     foreach($query->result() as $row)
     {       
      $selected = '';
       if($f_id == $row->f_id){
        $selected = 'selected';
      }
         $output .= '<option '.$selected.' value="'.$row->f_id.'">'.$row->folname.'</option>.';
       
     }

     return $output;
    }
    function delete_part_drw($id)
	{
      $sql ="UPDATE part_drawing SET delete_flag = '0' , date_deleted=CURRENT_TIMESTAMP WHERE pd_id = '$id'";
      $query = $this->db->query($sql);
         if ($query) { 
            return true; 
         } 
         else{
        return false;
      }
	}
 


}

?>