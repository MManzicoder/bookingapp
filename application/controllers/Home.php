<?php
class home extends CI_Controller{
    public function index(){
        $this->load->view('home');
    }
    public function signup(){
        echo 'we are there';
    }
    public function bookForm(){
        $this->load->view('book');
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
                $this->session->set_flashdata('response', 'records updated successfully');
                return redirect('home');
            } else {
                $this->session->set_flashdata('response', 'records failed to save');
                return redirect('home');
            }
        } else {
            // echo validation_errors();
            $this->load->view('book');
        }
    }
}