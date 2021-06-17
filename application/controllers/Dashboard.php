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
        if($this->session->userdata("loggedIn")){
          $this->load->model("hotel_model");
          $hotels['hotels'] = $this->hotel_model->load_hotels();
          $this->load->view("dashboard", $hotels);
        }else{
          redirect(base_url()."Welcome/login");
        }
    }
  public function viewHotel($hId){
    if($this->session->userdata("loggedIn")){
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
    }
  function notifications(){
    }
    function settings(){
    }
    public function logout(){
      $this->session->sess_destroy();
      redirect(site_url()."Welcome/login");
    }
    // public function book(){
    //   $this -> load -> view("book");
    // }
}

?>