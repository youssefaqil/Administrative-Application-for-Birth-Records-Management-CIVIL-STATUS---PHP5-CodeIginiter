<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class test_pdf extends CI_Controller {
    
  /*function __construct()
  {
    parent::__construct();
     $this->load->model('registre_model');
    $this->load->library('m_pdf'); // Load library
   // $this->pdf->fontpath = 'font/'; // Specify font folder
  }*/
 
  public function index()
  {
    $data['page_title'] = 'Hello world'; // pass data to the view
     
//load the view and saved it into $html variable
$html=$this->load->view('pdf_report', $data, true);
  $html = iconv("UTF-8","UTF-8",html_entity_decode($html));
//this the the PDF filename that user will get to download
$pdfFilePath = "output_pdf_name.pdf";

//load mPDF library
$this->load->library('m_pdf');
 $this->pdf = $this->m_pdf->load();
//generate the PDF from the given html   $mpdf=new mPDF('utf-8','A4','','',0,0,0,0,0,0);
$this->pdf->WriteHTML($html);
 
//download it.
$this->pdf->Output($pdfFilePath, "D");

 



  }
  

}
?>