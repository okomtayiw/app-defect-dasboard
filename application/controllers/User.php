<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function __construct()
	{
	
		parent:: __construct();	
		$models = array(
            'UserModel' => 'UserModel'
        );
        $this->load->model($models);  
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
		
		
	}
    
	public function index()
	{

		
		$data['user'] = $this->db->get_where('tbl_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
		$data['title'] = 'Halaman User';
		$data['dataUsers'] = $this->UserModel->getAllDataUser();
     
	
		$this->load->view('templates/header', $data);
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');

	
		} else {

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

		}

	}

    public function updateUser($idUser){

        $data['user'] = $this->db->get_where('tb_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
		$data['title'] = 'Halaman User';
		$data['dataUsers'] = $this->UserModel->getDataUserUpdate($idUser);
	
		$this->load->view('templates/header', $data);
		$this->load->view('users/updateusers', $data);
		$this->load->view('templates/footer');

	
		} else {

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

		}
        
    }


    public function saveupdateuser(){

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $status = $this->input->post('status');
        $idUser = $this->input->post('idUsers');


        
        $this->UserModel->saveUpdateDataUser($username,$email,$status, $idUser);

        redirect('user');
    }

    public function deleteuser($iduser){

        $this->db->where_in('id_users', $iduser);
        $this->db->delete('tb_users');	
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        Success delete data users.
        </div>');   

        redirect('user');
    }



}

?>