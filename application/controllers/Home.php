<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller{
    public function index(){
        $this->load->view('home');
    }
    public function signup(){
        // $this -> load -> view('form_view');
        redirect(base_url()."Welcome");
    }
    public function bookForm($id){
        if($this->session->user_data('loggedIn')){
            $this->load->model("bookModel");
            $hl["hotel"] = $this->bookModel->getHotel($id);
            $this->load->view('book', $hl);
        }
    }
    public function save(){
        $this->form_validation->set_rules('firstname', 'first Name', 'required');
        $this->form_validation->set_rules('lastname', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('comfemail', 'Comfirm email', 'required');
        $this->form_validation->set_rules('booker', 'booker', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run()) {
            $this->load->model('bookModel');
            $data = $this->input->post();
            if ($this->bookModel->book($data)) {
                $this->session->set_flashdata('response', 'You have succesfully booked your room');
                return redirect('home/bookForm');
            } else {
                $this->session->set_flashdata('response', 'records failed to save');
                return redirect('book');
            }
        } else {
            // echo validation_errors();
            $this->load->view('book');
        }
    }
}