<?php
class View_id extends CI_Model {
    public function getId($email){
        // $this -> db -> where("email",$email);
        // $query = $this -> db -> get("users");
        $query = $this->db->query("SELECT * FROM users WHERE email ='$email'");
        if($query){
            $row = $query -> result_array();
            return $row;
        }else {
            return false;
        }
    }
}
?>