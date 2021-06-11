<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

   function index(){
        $this->load->model("hotel_model");
        $hotels['hotels'] = $this->hotel_model->load_hotels();
        $this->load->helper("url");
        $this->load->view("sidebar");
        $this->load->view("dashboard", $hotels);
    }
  function orders(){

    }
  function notifications(){

    }
    function settings(){
        
    }
}

?>