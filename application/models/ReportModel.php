<?php

Class ReportModel extends CI_Model{


  public function __construct()
  {
    $this->load->database();
  }



  public function getAllDataProject(){
  
    $query = $this->db->query("SELECT * FROM tbl_project ORDER BY id_project DESC");
    return $query->result_array();

  }

  public function getDataProject($idProject){
  
    $this->db->select('name_project');
    $this->db->from('tbl_project');
    $this->db->where('id_project', $idProject);
    return $this->db->get()->row()->name_project;

  }


  public function getDataImages($numberDefect){
  
    $query = $this->db->query("SELECT * FROM tbl_images_defect WHERE number_defect = '$numberDefect'");
    return $query->result_array();
  }



  public function getDataSubProject($idProject){
  
    $query = $this->db->query("SELECT * FROM tbl_sub_project WHERE id_project = '$idProject'");
    return $query->result_array();

  }

 public function getDataUnit($idProject,$idSubProject){
    $nameProject =  $this->getDataProject($idProject);
    $query = $this->db->query("SELECT * FROM tbl_unit WHERE name_project = '$nameProject' AND name_tower = '$idSubProject'");
    return $query->result_array();
 }



 

 function totDataProject(){
    return $this->db->count_all("tbl_project");
 }

 public function getItemDefectList($nameLocation){
    $query = $this->db->query("SELECT * FROM tbl_transaction_defect as a   
    LEFT OUTER JOIN tbl_location b ON a.id_location =  b.number_location
    LEFT OUTER JOIN tbl_users c ON a.id_user = c.id
    WHERE b.name_location = '$nameLocation'");
    return $query->result_array();
 }

 public function getItemDefectListPdf($nameLocation){
  $query = $this->db->query("SELECT *, GROUP_CONCAT(d.name_images) as name_images FROM tbl_transaction_defect as a   
  LEFT OUTER JOIN tbl_location b ON a.id_location =  b.number_location
  LEFT OUTER JOIN tbl_users c ON a.id_user = c.id
  LEFT OUTER JOIN tbl_images_defect d ON a.number_defect = d.number_defect
  WHERE b.name_location = '$nameLocation'
  GROUP BY a.number_defect");
  return $query->result_array();
}


public function getItemDefect($idTransactionDefect){
  $query = $this->db->query("SELECT * FROM tbl_transaction_defect as a   
  LEFT OUTER JOIN tbl_location b ON a.id_location =  b.number_location
  LEFT OUTER JOIN tbl_users c ON a.id_user = c.id
  WHERE a.id_transaction_defect = '$idTransactionDefect'");
  return $query->result_array();
}

public function saveDataUpdate($idTransactionDefect,$areaDefect,$dateDefect,$description,$element){
  $data = array(
    'id_transaction_defect' => $idTransactionDefect,
    'area_defect' => $areaDefect,
    'date_defect' => $dateDefect,
    'element' => $element,
    'description' => $description
);

  $this->db->where('id_transaction_defect', $idTransactionDefect);
  $this->db->update('tbl_transaction_defect', $data);
 
}

        



    // public function get_current_page_records_users() 
    // {
       
    //     $query = $this->db->query("SELECT * FROM tb_ ORDER BY id_users DESC");
    //     return $query->result_array();
  
  
    //     if ($query->num_rows() > 0)
    //       {
    //           foreach ($query->result() as $row)
    //           {
    //               $data[] = $row;
    //           }
              
    //           return $data;
    //       }
    
    //     return false;
  
      
    // }

   


}