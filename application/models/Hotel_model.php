<?php
 class Hotel_model extends CI_Model{
    function __construct()
    {
        $this->table_name = "hotels";
        $this->load->database();
    }
    public function load_hotels(){
 
        $hotels = $this->db->query("SELECT * FROM hotels LIMIT 3");
        $hotels =  $hotels->result_array();
        return $hotels;
    }
    public function load_morehotels(){
        $hotels = $this->db->query("SELECT * FROM hotels");
        $hotels =  $hotels->result_array();
        return $hotels;
    }
    public function getHotel($id){
        $hotel = $this->db->query("SELECT * FROM hotels WHERE hId = $id");
        $hotel = $hotel->result_array();
        return $hotel;
    }
 }
?>