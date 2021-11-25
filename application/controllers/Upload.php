<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('TransactionModel');  
        }

        // public function index()
        // {
        //         $this->load->view('', array('error' => ' ' ));
        // }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                // $config['max_size']             = 10000;
                // $config['max_width']            = 1080;
                // $config['max_height']           = 1000;
         
                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file")){ //upload file
                    

                    $nounit = $this->input->post('nmUnit');
                    $title = $this->input->post('nmTitle');
                    $image = $this->upload->data('file_name');  
                    $filesize = $this->upload->data('file_size');

                    $result = $this->TransactionModel->saveUpload($title,$nounit,$image,$filesize);
                    echo json_decode($result);
                }
        }
}
?>