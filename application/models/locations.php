<?php
class Locations extends CI_Model {
    public function getDistricts(){
        $query = $this -> db -> get("district");
        return $query;
    }
    public function getSectors(){
        $query = $this -> db -> get("sector");
        return $query;
    }
}
?>