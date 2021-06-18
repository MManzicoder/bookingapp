<?php
class bookModel extends CI_Model{
    public function book($data){
        return $this->db->insert('orders', $data);
    }
    public function getUser($id){  
        $this->db->where('id',$id);
        return $this->db->get('users')->result_array();
    }
    public function getHotel($id){
        $this->db->where("hId", $id);
        return $this->db->get("hotels")->result_array();
    }
    public function getRooms(){
            return $this->db->get("rooms")->result_array();
    }
    // public function getRoom($id){
    //     $this->db->query('select ',)
    // }
}

