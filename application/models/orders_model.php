<?php
 class Orders_model extends CI_Model{
    function __construct()
    {
        $this->table_name = "hotels";
        $this->load->database();
    }
    function getOrders(){
        return $this->db->get("book")->result();
    }
   }
?>