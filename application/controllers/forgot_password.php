<?php
class Forgot_password extends CI_Controller {

    public function form(){
        $this -> load -> view("forgot");
    }

    public function index (){
        $this -> load -> library("session");
        $this -> load -> model("view_id");
        if($this -> view_id->getId($this -> input -> post("email"))){
            $userId = $this -> view_id -> getId($this -> input ->post("email"));
            // print_r($userId);
            $userId = $userId[0]["id"];
            
            $to_email = $this->input->post('email');
            $this->load->library('email');

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'mmanzicder@gmail.com';
            $config['smtp_pass']    = 'Muman123@!';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);

            $this->email->from('mmanzicder@gmail.com', 'Manzi');
            $this->email->to($to_email); 
            $this->email->subject('Email Test');
            $this->email->message("<a href='http://localhost/bookingapp/bookingapp/forgot_password/new_password/".$userId."'>change password</a>");
            if($this->email->send()){
                $this -> session -> set_flashdata("userId",$userId);
                echo("we have emailed you!! click to the link to verify it is you");
            };
            echo $this->email->print_debugger();
            
			// $this->load->library('email');+
			// $config = array(
			// 	'protocol' => 'smtp',
			// 	'smtp_host' => 'smtp.googlemail.com',
			// 	'smtp_port' => 587,
			// 	'smtp_user' => 'mpanoc6@gmail.com',
			// 	'smtp_pass' => '123gariredaff',
			// 	'mailtype' => 'html',
			// 	'charset' => 'iso-8859-1'
			// );
            // $this->load->library('email', $config);
			// $this->email->initialize($config);
			// $this->email->set_newline("\r\n");
			// $htmlContent = '<h1>Password Reset</h1>';
			// $htmlContent .= '<p>Click on the button below to change your password</p>';
			// $htmlContent .= "<p>If you don't know about us,simply ignore this.</p>";
            // $htmlContent .="<a href=''>Reset password</a>";
			// $this->email->to($to_email);
			// $this->email->from("mpanoc6@gmail.com", 'Hope blood');
			// $this->email->subject('Password Reset');
			// $this->email->message($htmlContent);
            // echo("email being setn");
            // if(!$this->email->send())
                // $this->session->se t_flashdata("email_sent", "Congragulation Email Send Successfully.");
				// $this->session->set_flashdata("email_sent", $htmlContent);
                // $this -> load -> view("changePassword");
                // echo("email sent");
            // else
                // echo ("unable to send email");


        
               
        }else{
            // $this -> load -> library("session");
            // $this -> session -> set_flashdata("error","email does not exist");
            // $this -> load -> view("forgot");
            echo("unable");
            }
        }
            public function change_password(){
                $this -> form_validation -> set_rules("password","password","trim|required");
                if($this -> form_validation->run()){
                    $this -> load -> model("change_password");
                    $this -> change_password->reset_password($this -> input -> post("password"),$this ->session->flashdata("userId"));
                    redirect(base_url()."Welcome/login");
                }else{
                    $data["error"] = "password is required";
                    $this -> load -> view("changePassword",$data);
                }
            }
            public function new_password(){
                $this -> load -> view("changePassword");
            }
        }
?>