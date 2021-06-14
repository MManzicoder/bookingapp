<?php
class Login extends CI_model {
    public function can_login($username,$password){
        $this -> db -> where('username',$username);
        $query = $this -> db -> get('users');
        if($query -> num_rows() > 0){
            foreach($query -> result() as $row){
                $store_password = $row -> password;
                if(password_verify($password,$store_password)){
                    $this ->session ->set_userdata('id',$row ->id);
                }else{
                    return 'wrong password';
                }
            }
        }else {
            return 'wrong username';
        }
    }
    
}

?>