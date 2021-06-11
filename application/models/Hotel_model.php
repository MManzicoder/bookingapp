<?php
 class Hotel_model extends CI_Model{

    public function load_hotels(){
        $this->load->database();
        $hotels = $this->db->query("SELECT * FROM hotels LIMIT 3");
        $hotels =  $hotels->result_array();
        return $hotels;
    }
    public function load_all_hotels(){

    }
 }
?>