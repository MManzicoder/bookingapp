<?php
class HotelModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function add_record($values){
        $result= $this->db->insert('hotels', $values);
        return true;
    }
    function displayRecordsById($id)
	{
	$query=$this->db->query("select * from hotels where hId = '$id'");
	return $query->result();
	}
    // update
    function update_records($name,$manager,$sectorId,$provinceId, $location, $description, $id)
	{
	// $query=$this->db->query("update hotels SET name='$name',manager='$manager',sectorId='$sectorId', provinceId='$provinceId', location= '$location', description= '$description' where hId=$id");
        $query= "UPDATE hotels SET name='$name',manager='$manager',sectorId='$sectorId', provinceId='$provinceId', location= '$location', description= '$description' WHERE hId='$id'";
        $this->db->query($query);
	}
    function deleterecords($id)
  {
    // $this->db->where("hId", $id);
    // $this->db->delete("hotels");
    $this->db->query("DELETE FROM hotels WHERE hId=$id"); 
    return true;
  }
}
?>