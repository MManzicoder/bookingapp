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
//   public function allUsers(){
//     // $this->load->library('pagination');
//     // $config['base_url']=site_url()"user/allUsers/admin";
//     // $config['per_page']=2;
//     // $config['num_links']=5;
//     // $config['total_rows']=$this->db->get('users')->num_rows();
//     // $this->pagination->initialize($config);
//     // $data['query']=$this->db->get('users',$config['per_page'],$this->uri->segment(3));
//     // $this->load->view('allUsers',$data);
//     $this->load->library('pagination');
//     $config=[
//       'base_url'=> site_url("user/allUsers/admin"),
//       'per_page'=>1,
//       'total_rows'=>$this->db->get('users')->num_rows()
//     ];
//     $this->pagination->initialize($config);
//     $data['query']=$this->db->get('users',$config['per_page'],$this->uri->segment(4));
//     $this->load->view('allUsers',$data);
//   }
// }
    function index()
    {
        $this->load->view("paginatedUsers");
    }
    function pagination()
    {
        $this->load->model("paginatedModel");
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = "http://localhost/bookingapp/Admin/Pagination";
        $config["total_rows"] = $this->paginatedModel->count_all();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];
        $output = array(
            'pagination_link'  => $this->pagination->create_links(),
            'user_table'   => $this->paginatedModel->fetch_details($config["per_page"], $start)
        );
        echo json_encode($output);
    }
}

?>
