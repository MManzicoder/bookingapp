<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
   public function __construct()
   {
     parent::__construct();
     $this->load->model("orders_model");
     $this->load->library("pdfint");
   }
  public function orders(){
       // $this->fpdf->SetY(-15);
       $this->fpdf->SetFont('Arial', 'B', 15);
       $this->fpdf->SetTextColor(3,80,153);
       $this->fpdf->Cell(280, 5, "All orders sent by clients", 0, 0, 'C');
       $this->fpdf->Ln();
       $this->fpdf->SetFont('Times', '', 12);
       $this->fpdf->Ln(20);
        $this->fpdf->SetFont('Arial', '', 8);
        $this->fpdf->SetFont('Times', 'B', 13);  
        $this->fpdf->Cell(30, 10, 'Order ID', 1, 0, 'C');
        $this->fpdf->Cell(40,10, 'Booker firstname', 1, 0, 'C');
        $this->fpdf->Cell(40,10,'Booker lastname', 1,0,'C');
        $this->fpdf->Cell(40,10,'Email', 1,0,'C');
        $this->fpdf->Cell(40,10,'Confirming Email', 1,0,'C');
        $this->fpdf->Cell(40,10,'Booker', 1,0,'C');
        $this->fpdf->Cell(40,10,'Room', 1,0,'C');
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Times', '', 12);
        $orders = $this->orders_model->getOrders();
        foreach($orders as $order){
         $this->fpdf->Cell(30, 10, $order->work, 1, 0, 'C');
         $this->fpdf->Cell(40,10, $order->firstname, 1, 0, 'C');
         $this->fpdf->Cell(40,10, $order->lastname, 1,0,'C');
         $this->fpdf->Cell(40,10, $order->email, 1,0,'C');
         $this->fpdf->Cell(40,10, $order->comfemail, 1,0,'C');
         $this->fpdf->Cell(40,10, $order->booker, 1,0,'C');
         $this->fpdf->Cell(40,10, $order->room, 1,0,'C');
         $this->fpdf->Ln();
        }
         $this->fpdf->AliasNbPages();
         $this->fpdf->output();
 
  }   

}

?>
