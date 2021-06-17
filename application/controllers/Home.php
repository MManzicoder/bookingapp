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
        $id=$this->session->user('id');
        $user['data']=$this->bookModel->getUser($id);
        $this->load->view('book', $user);
    }
    public function save(){
        $this->form_validation->set_rules('checkin', 'checkin Date', 'required');
        $this->form_validation->set_rules('checkout', 'checkout Date', 'required');
        $this->form_validation->set_rules('guests', 'number of guests', 'required');
        $this->form_validation->set_rules('room', 'Room', 'required');
        $this->form_validation->set_rules('pickup', 'pickup', 'required');
        $this->form->validation->set_rules('special','special offer','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if ($this->form_validation->run()) {
            $this->load->model('bookModel');
            $data=$this->input->post();
            print_r($data);
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