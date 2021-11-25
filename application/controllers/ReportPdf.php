<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportPdf  extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('Pdf');
        $this->load->model('ReportModel');  
        $this->load->helper('url');
    }


    
    
    
    
    function index(){

        $pdf = new column();
        // $title = 'Report Defect';
        // $pdf->SetTitle($title);
        // $pdf->SetAuthor('Jules Verne');
        $nmLocation  = $this->uri->segment(2);
        $nmLocation2  = $this->uri->segment(3);

        $nmLocation1 = urldecode($nmLocation);
        $nmLocation2 = urldecode($nmLocation2);

        $namelocation = $nmLocation1.'/'.$nmLocation2;
	
        
        $exportpdf = null ;
        if($namelocation != null ) {
           $exportpdf = $this->ReportModel->getItemDefectListPdf($namelocation);
        }
     
        
        if ($exportpdf > null ) {
        foreach ($exportpdf as $row){
        
            $pdf->PrintChapter($row['name_project'],$row['name_sub_project'],$row['area_defect'],$row['element'],$row['description'],$row['date_defect'],$row['first_name'],$row['name_location'],$row['name_images']);
            
	    }
        
        $pdf->Output();
    } else {

        $this->session->set_flashdata('messExportpdf','<div class="alert alert-danger" role="alert">
        Data belum ada</div>');

        redirect('index');
        }

    
    }

}