<?php
class bookModel extends CI_Model{
    public function book($data){
        return $this->db->insert('book', $data);
    }
}