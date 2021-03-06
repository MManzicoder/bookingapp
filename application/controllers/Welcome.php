<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if(!$this -> session -> userdata("username")){
			$this -> load -> model("locations");
			
			$query["district"] = $this -> locations -> getDistricts();
			$query["sector"] = $this -> locations -> getSectors();
			$this->load->view('form_view',$query);
		}else{
			redirect(base_url()."Dashboard");
		}
	}
	public function login () {
		$this->load->library('session');
		if(!$this -> session -> userdata("username")){
			$this -> load ->view("login");
		}else{
			redirect(base_url()."Dashboard");
		}
	}
	public function validate_form(){
		$this->load->library('session');
        $this -> load -> library("form_validation");
		$this -> load -> model("login");
        $this -> form_validation -> set_rules("username","username","trim|alpha|required");
        $this -> form_validation -> set_rules("password","password","trim|required");
        if($this -> form_validation -> run()){
            $result = $this -> login -> can_login($this -> input -> post("username"),$this -> input ->post("password"));
            if($result == ''){
				$this -> session -> set_userdata("loggedIn",true);
				$this -> session -> set_userdata("username",$this -> input -> post("username"));
                redirect(base_url()."Welcome/home");
            }else {
                $this -> session -> set_flashdata('message',$result);
                redirect(base_url()."Welcome/login");
            }
        }else{
            $this -> login();
        }
    }
	private function hash_password($password){
		return password_hash($password,PASSWORD_DEFAULT);
	}
	public function validateform()
	{
		$this -> load -> library("encrypt");
		$this -> load -> library("form_validation");
		$this -> form_validation ->set_message('is_unique','%s was already taken. choose another');
		$this -> form_validation->set_rules("first_name","First Name","trim|required|alpha");
		$this -> form_validation ->set_rules("last_name","Last Name","trim|required|alpha");
		$this -> form_validation ->set_rules("username","username","trim|required|alpha|is_unique[users.username]");
		$this -> form_validation ->set_rules("email","email","trim|required|valid_email|is_unique[users.email]");
		$this -> form_validation ->set_rules("password","password","trim|required");
		$this -> form_validation ->set_rules("confirmPassword","Confirm password","trim|required|matches[password]");
		
		if($this -> form_validation -> run()){
			$this -> load -> model("signup");
			$data = array(
				"firstName"=>$this ->input -> post("first_name"),
				"lastName" =>$this ->input -> post("last_name"),
				"email" =>$this ->input ->post("email"),
				"username" =>$this ->input -> post("username"),
				"password" =>$this->hash_password($this ->input -> post("password")),
				"districtId" =>$this -> input -> post("district"),
				"sectorId" => $this -> input -> post("sector")
			);
			$this -> signup ->insert_data($data);
			$this -> session -> set_userdata("loggedIn",true);
			$this -> session -> set_userdata("username",$this -> input -> post("username"));
			redirect(base_url()."Dashboard");
		}else{
			$this -> index();
		}
	}
	public function home(){
		redirect(base_url()."Dashboard");
	}
}