<?php
class User_model extends CI_Model{
    public function user(){
    $this->load->database();
    $users = $this->db->query("SELECT firstname, lastname, username, email, roleId FROM stk_users");


    $users =  $users->result_array();
    // print_r($users);
    return $users;
}
}
?>