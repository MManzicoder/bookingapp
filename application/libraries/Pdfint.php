<?php defined('BASEPATH') OR exit('No direct script access allowed');   

class Pdfint {
    public function __construct()
    {
        require_once APPPATH.'third_party/fpdf/fpdf.php';

        $pdf = new FPDF();
        // $pdf->header();
        $pdf->SetFillColor(0,30,100);
        $pdf->AddPage('L', 'A4', 0);
        // $pdf->AliasNbPages();
        // $pdf->Output();
        $CI = get_instance();
        $CI->fpdf=$pdf;


    }

}
?>