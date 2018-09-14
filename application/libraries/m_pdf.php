<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class m_pdf {
    
    function m_pdf()
    {
        $CI = & get_instance();
     }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
            $param = '"utf-8","A4","","",32,25,27,25,16,13';    //$mpdf=new mPDF('utf-8','A4','','',0,0,0,0,0,0);
            
        }
         
        return new mPDF($param);
    }
}