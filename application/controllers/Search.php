<?php

class Search extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $models = array(
            'SearchModel' => 'SearchModel'
        );
        $this->load->model($models);   
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');  
        $this->load->library('pagination');
        $this->load->helper('tgl_indo');
        $this->load->helper('date');
        $this->load->library('session');
    
    }
    public function index(){
    
      
    
            $data['user'] = $this->db->get_where('tb_users', ['email' =>
            $this->session->userdata('email')])->row_array();
            if ($data['user'] != null){
            $query = $this->input->post('query');
            $data ['title'] = 'Search data';
            $data ['result'] = $this->SearchModel->getsearchData($query);
            
        
         
    
            $this->load->view('templates/header', $data);
            $this->load->view('search/index', $data);
            $this->load->view('templates/footer');
                  
            } else {
    
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');
    
            redirect('auth');
            }
        
    
    }




}