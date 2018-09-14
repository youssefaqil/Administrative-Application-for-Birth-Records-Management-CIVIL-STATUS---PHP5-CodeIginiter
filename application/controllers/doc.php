<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc extends CI_Controller {
    
  function __construct()
  {
    parent::__construct();
     
     $this->load->model('enfant_model');
    $this->load->library('Pdf'); // Load library
   // $this->pdf->fontpath = 'font/'; // Specify font folder
  }
 
  public function index()
  {
       $data['title']='Extrait_de_Naissance';
        
        
   $this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  
$this->pdf->setFooterData(array(0,64,0), array(0,64,128));
$this->pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

$this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$this->pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
  $this->pdf->SetFont('aealarabiya', '', 10);
// Add a page
$this->pdf->AddPage();

    $data['id']=$this->uri->segment(3);
    $data['enfants']=$this->enfant_model->getwhereP($this->uri->segment(3));
    $data['allParent']=$this->enfant_model->getParent();
    $data['AllRegistre']=$this->enfant_model->getRegistre();
    $data['enf_reg']=$this->enfant_model->getanneR();
    $data['allDeclar']=$this->enfant_model->getDeclar();
$html=$this->load->view('enfant/imprimer_enfant',$data,true);
//$html=$this->load->view('table.php',$data,true);

$html = iconv("UTF-8","UTF-8",$html);
$this->pdf->writeHTML($html, true, false, true, true, '');
// reset pointer to the last page
//$this->pdf->lastPage();
/*____________important
$js = <<<EOD
app.alert('Etat Civil', 3, 0, 'Welcome');
EOD;

// force print dialog
$js .= 'print(true);';
*/

$this->pdf->Output('Extrait_de_Naissance', 'I');

}
}
?>