<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('tfpdf.php');
class Pdf extends tFPDF
{
  // Extend FPDF using this class
  // More at fpdf.org -> Tutorials
  function __construct($orientation='P', $unit='mm', $size='A4')
  {
    // Call parent constructor
    parent::__construct($orientation,$unit,$size);
  }
}
?>