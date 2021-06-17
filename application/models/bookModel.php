<?php
class bookModel extends CI_Model{
    public function book($data){
        return $this->db->insert('book', $data);
    }
    public function getUser($id){
        $this->db->where('id',$id);
        return $this->db->get('users')->result_array();
    }
    public function getHotel($id){
        $this->db->where("hId", $id);
        return $this->db->get("hotels")->result_array();
    }
}

