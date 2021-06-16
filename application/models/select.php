<?php
class select extends CI_Model 
{
  public function __construct()
  {
    parent::__construct();
  }
  public function select()
  {
    $query= $this->db->query('SELECT h.hId, h.name, h.manager, s.sectorName, p.provinceName, location, description FROM hotels h, sectors s, provinces p WHERE h.sectorId= s.sectorId AND h.provinceId= p.provinceId');
    return $query;
  }
	
} 
?>