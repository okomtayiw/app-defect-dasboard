<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportTransaksi extends CI_Controller {
	public function __construct()
	{
	
        parent:: __construct();	
        $models = array(
            'ModelReportTransaksi' => 'ModelReportTransaksi',
            'AlltowerModel' => 'AlltowerModel'
         );
        $this->load->model($models);  
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
		
	}

	public function index()
	{


        $data['user'] = $this->db->get_where('tb_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
            
         
            $data['report'] = $this->ModelReportTransaksi->getReport();
            $data['menutower'] = $this->AlltowerModel->dataMenuTower();
            $data['title'] = 'Report Transaksi';
            $this->load->view('templates/header', $data);
            $this->load->view('report/index', $data);
            $this->load->view('templates/footer');

        } 
    }


  
	
}
