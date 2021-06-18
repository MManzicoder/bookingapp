<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Provinces_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        // $db = \Config\Database::connect();
    }
     
    function get_province(){
        $query = $this->db->query('SELECT * FROM provinces');
        
        return $query->result();  
    }
    function getSectors(){
        $query= $this->db->query('SELECT * FROM sectors');
        return $query->result();

    }
    // function get_sub_category($province_id){
    //     $query = $this->db->get_where('sub_category', array('subcategory_category_id' => $province_id));
    //     return $query;
    // }
}
     