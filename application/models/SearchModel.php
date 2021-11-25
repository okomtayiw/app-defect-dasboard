<?php

Class SearchModel extends CI_Model{


  public function __construct()
  {
    $this->load->database();
  }

  public function getsearchData($query){
  
    $query = $this->db->query("SELECT tbl_transaction.* FROM tbl_transaction 
    LEFT OUTER JOIN tbl_transaction_detail ON tbl_transaction_detail.id_transaction = tbl_transaction.id_transaction
    WHERE id_unit = '$query' GROUP BY id_unit ");
    return $query->result_array();

  }


}