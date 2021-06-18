<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller{
    public function index(){
        $this->load->view('another');
    }
    public function signup(){
        // $this -> load -> view('form_view');
        redirect(base_url()."Welcome");
    }
    public function bookForm($id){
        if($this->session->userdata('loggedIn')){
            $this->load->model("bookModel");
            $hl= $this->bookModel->getHotel($id);
            // $id= $this->session->userdata['user']['id'];
            $model = $this->bookModel->getRooms();
            $user=$this->bookModel->getUser($id);
            $this->session->set_userdata("hId", $id);
            $data["data"] = array(
                "model"=>$model,
                "user_data"=>$user,
                "hotel"=>$hl
            );
            $this->load->view('book',$data);    
        }else{
            redirect("Welcome/login");
        }
        // $id=$this->session->user('id');
        // $user['data']=$this->bookModel->getUser($id);
        // $this->load->view('book', $user);
    }
    public function save(){
 print_r($this->input->post()); 
        $this->form_validation->set_rules('checkin', 'checkin Date', 'required');
        $this->form_validation->set_rules('checkout', 'checkout Date', 'required');
        $this->form_validation->set_rules('guests', 'number of guests', 'required');
        $this->form_validation->set_rules('roomId', 'Room', 'required');
        $this->form_validation->set_rules('pickup', 'pickup', 'required');
        // $this->form->validation->set_rules('special_request','special offer','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if ($this->form_validation->run()) {
            $this->load->model('bookModel');
            // $data=$this->input->post();
            $id = $this->session->userdata['user']['id'];
            $hId = $this->session->userdata("hId");
            $data = array(
                "roomId"=>$this->input->post("roomId"),
                "userId"=>$id,
                "checkIn"=> $this->input->post("checkin"),
                "checkOut"=> $this->input->post("checkout"),
                "hotelId"=>$hId,
                "special_request"=> $this->input->post("special_request"),
                "pickup"=> $this->input->post("pickup"),    
                "guests"=> $this->input->post("guests")
            );
            if ($this->bookModel->book($data)) {
                $config['sess_expiration'] = 7200;
                // $this->session->set_flashdata('response', 'You have succesfully booked your room');
                return redirect('user/dashboard');
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