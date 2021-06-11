<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Register extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            //  $this->load->library("form_validation");
            //  $this->load->library("encrypt");
            //  $this->load->model("register_model");  
            //  $this->load->helper('url');
        }

        function index(){
            $this->load->view("register"); 

        }
        function getUsers(){
            $this->load->model("user_model");
            $users['users'] = $this->user_model->user();
            $this->load->view("users", $users);
            
        }
    }


?>