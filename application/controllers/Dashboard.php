<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
   public function __construct()
   {
     parent::__construct();
     $this->load->model("hotel_model");
     $this->load->library("encryption");
   }
   function index(){
        if($this -> session -> userdata("loggedIn")){
          $this->load->model("hotel_model");
          $hotels['hotels'] = $this->hotel_model->load_hotels();
          $this->load->view("dashboard", $hotels);
        }else{
          redirect(base_url()."Welcome/login");
        }
    }
  public function viewHotel($hId){
    // $this->load->library("encryption");
    // $hId = $this->encryption->decrypt($hId);
    if($this -> session -> userdata("loggedIn")){
      $hotel["hotel"] = $this->hotel_model->getHotel($hId);
      $this->load->view("hotel", $hotel);
    }else{
      redirect(base_url()."Welcome/login");
    }
  }
  public function viewMore(){
    if($this -> session -> userdata("loggedIn")){
      $hotels["hotels"] = $this->hotel_model->load_morehotels();
      $this->load->view("dashboard", $hotels);
    }else{
      redirect(base_url()."Welcome/login");
    }
  }
  function orders(){
      $this -> load -> model("orders");
      $this -> load -> view("orders");
    }
  function notifications(){

    }
    function settings(){
        
    }
    public function logout(){
      if($this -> session -> userdata("loggedIn")){
        $this->session->sess_destroy();
        redirect("default_controller");
      }else{
        redirect(base_url()."Welcome/login");
      }
    }
    public function book(){
      if($this -> session -> userdata("loggedIn")){
        $this -> load -> view("book");
      }else{
        redirect(base_url()."Welcome/login");
      }
    }
}

?>