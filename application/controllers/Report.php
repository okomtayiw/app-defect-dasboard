<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$models = array(
			'ReportModel' => 'ReportModel'
		);
		$this->load->model($models);
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->helper('date');

		header('Cache-Control: no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-check=0, pre-check=0', false);
		header('Pragma: no-cache');
	}

	public function index()
	{


		$data['user'] = $this->db->get_where('tbl_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null) {
			$data['title'] = 'Halaman Home';
			$data['project'] = $this->ReportModel->getAllDataProject();

			$this->load->view('templates/header', $data);
			$this->load->view('report/index', $data);
			$this->load->view('templates/footer');
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Please register to login</div>');

			redirect('auth');
		}
	}

	public function updateItemDefect($idItemDefectTransaction)
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null) {
			$data['title'] = 'Halaman Update Item Defect';
			$data['itemDefect'] = $this->ReportModel->getItemDefect($idItemDefectTransaction);

			$itemDefect = $this->ReportModel->getItemDefect($idItemDefectTransaction);
			$numberDefect = null;
			foreach ($itemDefect as $item) : {

					$numberDefect = $item['number_defect'];
				}
			endforeach;
			if ($numberDefect != null) {
				$data['images'] = $this->ReportModel->getDataImages($numberDefect);
			}



			$this->load->view('templates/header', $data);
			$this->load->view('report/updateItemDefect', $data);
			$this->load->view('templates/footer');
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Please register to login</div>');

			redirect('auth');
		}
	}

	public function saveUpdate()
	{
		$idTransactionDefect = $this->input->post('idTransactionDefect');
		$areaDefect = $this->input->post('areaDefect');
		$dateDefect = $this->input->post('dateDefect');
		$description = $this->input->post('description');
		$element = $this->input->post('element');
		$this->ReportModel->saveDataUpdate($idTransactionDefect, $areaDefect, $dateDefect, $description, $element);
	}

	public function deleteFileImage()
	{
		$idFileImages = $this->input->post('idFileImages');
		$this->db->where_in('id_images_defect', $idFileImages);
		$this->db->delete('tbl_images_defect');
	}


	public function deleteItemDefect()
	{
		$idTransactionDefect = $this->input->post('idTransactionDefect');
		$this->db->where_in('id_transaction_defect', $idTransactionDefect);
		$this->db->delete('tbl_transaction_defect');
	}


	public function getsubproject()
	{
		$idProject = $this->input->post('idProject');
		$data = $this->ReportModel->getDataSubProject($idProject);
		echo json_encode($data);
	}


	public function getunit()
	{
		$idProject = $this->input->post('idProject');
		$idSubProject = $this->input->post('idSubProject');
		$data = $this->ReportModel->getDataUnit($idProject, $idSubProject);
		echo json_encode($data);
	}



	public function itemdefect()
	{


		$data['user'] = $this->db->get_where('tbl_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null) {
			$data['title'] = 'Halaman List Defect';
			$nameLocation = $this->input->post('nmLocation');
			$nameProject = $this->input->post('nmProject');
			$data['itemdefect'] = $this->ReportModel->getItemDefectList($nameLocation);
			$data['nameProject'] = $this->ReportModel->getDataProject($nameProject);
			$data['nameTower'] = $this->input->post('nmSubProject');
			$data['nameLocation'] = $this->input->post('nmLocation');



			$this->load->view('templates/header', $data);
			$this->load->view('report/itemdefect', $data);
			$this->load->view('templates/footer');
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Please register to login</div>');

			redirect('auth');
		}
	}
}
