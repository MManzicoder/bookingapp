<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinces extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Provinces_model');
    }
    function index(){
        $data['provinces'] = $this->Provinces_model->get_province();
        $data['sectors'] = $this->Provinces_model->getSectors();
        $this->load->view('HotelView', $data);
    }
}
?>
