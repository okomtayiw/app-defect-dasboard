<?php

class SyncroniseData extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $models = array(
            'AlltowerModel' => 'AlltowerModel',
            'TowerOneModel' => 'TowerOneModel',
            'TowerTwoModel' => 'TowerTwoModel',
            'TowerTreeModel' => 'TowerTreeModel',
            'TowerFourModel' => 'TowerFourModel',
            'TowerFiveModel' => 'TowerFiveModel',
            'TowerSixModel' => 'TowerSixModel'
         );
        $this->load->model($models); 
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');  
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->helper('tgl_indo');
        $this->load->helper('date');
        $this->load->library('session');
        require APPPATH.'controllers/SendEmail.php';
    }

    // tower A
    public function updateSyncroniseDataTowerOne(){

            $data  = $this->TowerOneModel->syncroniseData();

            foreach($data as $row) {

                $unit = $row['unit'];
                $penerimaan = $row['penerimaan'];
                $this->TowerOneModel->updateSyncroniseTowerA($unit,$penerimaan);

            }
    }

    public function insertDataTowerA(){

       
        $data['user'] = $this->db->get_where('tb_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
		$data['title'] = 'Halaman Home';
        $data['menutower'] = $this->AlltowerModel->dataMenuTower();

        $dataUnit  = $this->TowerOneModel->dataTowerA();
        
       
           
        foreach($dataUnit as $row) {

            $unit = $row['name_unit'];
            $pemilik = $row['name_owner'];
            $datetransakasi = $row['date_transaction'];
            $dateserahterima = $row['date_hand_over'];
            $gracePeriode = $row['date_grace_periode'];
            $penerimaan = $row['payment'];
            $denda = $row['denda'];
            $tunggakan = $row['tunggakan'];
            $date1 = str_replace('/', '-', $datetransakasi);
            $newDate1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('/', '-', $dateserahterima);
            $newDate2 = date('Y-m-d', strtotime($date2));
            $date3 = str_replace('/', '-', $gracePeriode);
            $newDate3 = date('Y-m-d', strtotime($date3));
            $data['printunit'] = $dataUnit;
            $this->TowerOneModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
            

        }


        $this->load->view('templates/header', $data);
        $this->load->view('syncronise/index', $data);
		$this->load->view('templates/footer');


		
	
	
		} else {

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

		}

    }

    /* tower B */

    public function updateSyncroniseDataTowerTwo(){

        $data  = $this->TowerTwoModel->syncroniseData();

        foreach($data as $row) {

            $unit = $row['unit'];
            $penerimaan = $row['penerimaan'];
            $this->TowerTwoModel->updateSyncroniseTowerB($unit,$penerimaan);

        }


    
    }


    public function insertDataTowerB(){
        $data['user'] = $this->db->get_where('tb_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
		$data['title'] = 'Halaman Home';
        $data['menutower'] = $this->AlltowerModel->dataMenuTower();

        $dataUnit  = $this->TowerTwoModel->dataTowerB();
        
       
           
        foreach($dataUnit as $row) {

            $unit = $row['name_unit'];
            $pemilik = $row['name_owner'];
            $datetransakasi = $row['date_transaction'];
            $dateserahterima = $row['date_hand_over'];
            $gracePeriode = $row['date_grace_periode'];
            $penerimaan = $row['payment'];
            $denda = $row['denda'];
            $tunggakan = $row['tunggakan'];
            $date1 = str_replace('/', '-', $datetransakasi);
            $newDate1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('/', '-', $dateserahterima);
            $newDate2 = date('Y-m-d', strtotime($date2));
            $date3 = str_replace('/', '-', $gracePeriode);
            $newDate3 = date('Y-m-d', strtotime($date3));
            $data['printunit'] = $dataUnit;
            $this->TowerTwoModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
            

        }


        $this->load->view('templates/header', $data);
        $this->load->view('syncronise/index', $data);
		$this->load->view('templates/footer');


		
	
	
		} else {

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

		}
    }

    /* Tower C */

    public function updateSyncroniseDataTowerTree(){

        $data  = $this->TowerTreeModel->syncroniseData();

        foreach($data as $row) {

            $unit = $row['unit'];
            $penerimaan = $row['penerimaan'];
            $this->TowerTreeModel->updateSyncroniseTowerC($unit,$penerimaan);

        }
    
    }


    


    public function insertDataTowerC(){
        $data['user'] = $this->db->get_where('tb_users', ['email' =>
		$this->session->userdata('email')])->row_array();
		if ($data['user'] != null){
		$data['title'] = 'Halaman Home';
        $data['menutower'] = $this->AlltowerModel->dataMenuTower();

        $dataUnit  = $this->TowerTreeModel->dataTowerC();
        
       
           
        foreach($dataUnit as $row) {

            $unit = $row['nameUnit'];
            $pemilik = $row['nameOwner'];
            $datetransakasi = $row['dateTransaksi'];
            $dateserahterima = $row['dateHoSeharusnya'];
            $gracePeriode = $row['gracePeriode'];
            $penerimaan = $row['penerimaan'];
            $denda = $row['denda'];
            $tunggakan = $row['tunggakan'];
            $date1 = str_replace('/', '-', $datetransakasi);
            $newDate1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('/', '-', $dateserahterima);
            $newDate2 = date('Y-m-d', strtotime($date2));
            $date3 = str_replace('/', '-', $gracePeriode);
            $newDate3 = date('Y-m-d', strtotime($date3));
            $data['printunit'] = $dataUnit;
            $this->TowerTreeModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
            

        }


        $this->load->view('templates/header', $data);
        $this->load->view('syncronise/index', $data);
		$this->load->view('templates/footer');


		
	
	
		} else {

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

		}
    }


      /* Tower D */

      public function updateSyncroniseDataTowerFour(){

        $data  = $this->TowerFourModel->syncroniseData();

            foreach($data as $row) {

                $unit = $row['unit'];
                $penerimaan = $row['penerimaan'];
                $this->TowerFourModel->updateSyncroniseTowerD($unit,$penerimaan);

            }
        
        }

        public function insertDataTowerD(){
            $data['user'] = $this->db->get_where('tb_users', ['email' =>
            $this->session->userdata('email')])->row_array();
            if ($data['user'] != null){
            $data['title'] = 'Halaman Home';
    
            $dataUnit  = $this->TowerFourModel->dataTowerD();
            
           
               
            foreach($dataUnit as $row) {
    
                $unit = $row['nameUnit'];
                $pemilik = $row['nameOwner'];
                $datetransakasi = $row['dateTransaksi'];
                $dateserahterima = $row['dateHoSeharusnya'];
                $gracePeriode = $row['gracePeriode'];
                $penerimaan = $row['penerimaan'];
                $denda = $row['denda'];
                $tunggakan = $row['tunggakan'];
                $date1 = str_replace('/', '-', $datetransakasi);
                $newDate1 = date('Y-m-d', strtotime($date1));
                $date2 = str_replace('/', '-', $dateserahterima);
                $newDate2 = date('Y-m-d', strtotime($date2));
                $date3 = str_replace('/', '-', $gracePeriode);
                $newDate3 = date('Y-m-d', strtotime($date3));
                $data['printunit'] = $dataUnit;
                $this->TowerFourModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
                
    
            }
    
    
            $this->load->view('templates/header', $data);
            $this->load->view('syncronise/index', $data);
            $this->load->view('templates/footer');
    
    
            
        
        
            } else {
    
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                Please register to login</div>');
    
                redirect('auth');
    
            }
        }


     /* Tower E */

     public function updateSyncroniseDataTowerFive(){

        $data  = $this->TowerFiveModel->syncroniseData();

        foreach($data as $row) {

            $unit = $row['unit'];
            $penerimaan = $row['penerimaan'];
            $this->TowerFiveModel->updateSyncroniseTowerE($unit,$penerimaan);

        }
    
    }


    public function insertDataTowerE(){
        $data['user'] = $this->db->get_where('tb_users', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user'] != null){
        $data['title'] = 'Halaman Home';
        $data['menutower'] = $this->AlltowerModel->dataMenuTower();

        $dataUnit  = $this->TowerFiveModel->dataTowerE();
        
       
           
        foreach($dataUnit as $row) {

            $unit = $row['nameUnit'];
            $pemilik = $row['nameOwner'];
            $datetransakasi = $row['dateTransaksi'];
            $dateserahterima = $row['dateHoSeharusnya'];
            $gracePeriode = $row['gracePeriode'];
            $penerimaan = $row['penerimaan'];
            $denda = $row['denda'];
            $tunggakan = $row['tunggakan'];
            $date1 = str_replace('/', '-', $datetransakasi);
            $newDate1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('/', '-', $dateserahterima);
            $newDate2 = date('Y-m-d', strtotime($date2));
            $date3 = str_replace('/', '-', $gracePeriode);
            $newDate3 = date('Y-m-d', strtotime($date3));
            $data['printunit'] = $dataUnit;
            $this->TowerFiveModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
            

            

        }


        $this->load->view('templates/header', $data);
        $this->load->view('syncronise/index', $data);
        $this->load->view('templates/footer');


        
    
    
        } else {

            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

        }
    }


     /* Tower F */

     public function updateSyncroniseDataTowerSix(){

        $data  = $this->TowerSixModel->syncroniseData();

        foreach($data as $row) {

            $unit = $row['unit'];
            $penerimaan = $row['penerimaan'];
            $this->TowerSixModel->updateSyncroniseTowerF($unit,$penerimaan);

        }
    
    }


    public function insertDataTowerF(){
        $data['user'] = $this->db->get_where('tb_users', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user'] != null){
        $data['title'] = 'Halaman Home';
        $data['menutower'] = $this->AlltowerModel->dataMenuTower();

        $dataUnit  = $this->TowerSixModel->dataTowerF();
        
       
           
        foreach($dataUnit as $row) {

            $unit = $row['nameUnit'];
            $pemilik = $row['nameOwner'];
            $datetransakasi = $row['dateTransaksi'];
            $dateserahterima = $row['dateHoSeharusnya'];
            $gracePeriode = $row['gracePeriode'];
            $penerimaan = $row['penerimaan'];
            $denda = $row['denda'];
            $tunggakan = $row['tunggakan'];
            $date1 = str_replace('/', '-', $datetransakasi);
            $newDate1 = date('Y-m-d', strtotime($date1));
            $date2 = str_replace('/', '-', $dateserahterima);
            $newDate2 = date('Y-m-d', strtotime($date2));
            $date3 = str_replace('/', '-', $gracePeriode);
            $newDate3 = date('Y-m-d', strtotime($date3));
            $data['printunit'] = $dataUnit;
            $this->TowerSixModel->inserData($unit,$pemilik,$newDate1,$newDate2,$newDate3,$penerimaan,$denda,$tunggakan);
            

            

        }


        $this->load->view('templates/header', $data);
        $this->load->view('syncronise/index', $data);
        $this->load->view('templates/footer');


        
    
    
        } else {

            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Please register to login</div>');

            redirect('auth');

        }
    }


    public function updateSyncroniseFromMarketing(){


        $data['user'] = $this->db->get_where('tb_users', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user'] != null){
            $data  = $this->AlltowerModel->allDataUnitFromMarketing();
            foreach($data as $row) {
    
                $unit  = $row['unit'];
                $pemilik = $row['pemilik'];
                $dateTransaction = $row['date_transaction'];
                $dateSerahTerima = $row['date_serah_terima'];
                $dateGracePeriode = $row['date_grace_periode'];
                $date1 = str_replace('/', '-', $dateTransaction);
                $newDate1 = date('Y-m-d', strtotime($date1));
                $date2 = str_replace('/', '-', $dateSerahTerima);
                $newDate2 = date('Y-m-d', strtotime($date2));
                $date3 = str_replace('/', '-', $dateGracePeriode);
                $newDate3 = date('Y-m-d', strtotime($date3));
           
    
                $this->AlltowerModel->inputDataTower($unit,$pemilik,$newDate1,$newDate2,$newDate3);
            }    
    
            $this->load->view('templates/header', $data);
            $this->load->view('towerone/index', $data);
            $this->load->view('templates/footer');
              
        } else {

        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Please register to login</div>');

        redirect('auth');
        }
    
    }


    public function updateSyncronisePeymentWithMarketing(){


        $data['user'] = $this->db->get_where('tb_users', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user'] != null){
            $data  = $this->AlltowerModel->allDataUnitFromPayment();

            foreach($data as $row) {
    
                $unit  = $row['unit'];
                $penerimaan = $row['penerimaan'];
                $this->AlltowerModel->inputDataUnitDifferent($unit, $penerimaan);
                          
            }    
    
            $this->load->view('templates/header', $data);
            $this->load->view('towerone/index', $data);
            $this->load->view('templates/footer');
              
        } else {

        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Please register to login</div>');

        redirect('auth');
        }
    
    }


    public function updateSyncronisePeymentMonth(){


        $data['user'] = $this->db->get_where('tb_users', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($data['user'] != null){
            $data  = $this->AlltowerModel->allDataUnitFromPaymentMonth();

            foreach($data as $row) {
    
                $unit  = $row['unit'];
                $this->AlltowerModel->inputDataUnitDifferentPenerimaan($unit);
                          
            }    
    
            $this->load->view('templates/header', $data);
            $this->load->view('towerone/index', $data);
            $this->load->view('templates/footer');
              
        } else {

        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        Please register to login</div>');

        redirect('auth');
        }
    
    }



}