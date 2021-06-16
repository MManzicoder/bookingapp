<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('form');
        $this->load->model('select');
    }
	public function index()
	{
		$data['h']= $this->select->select();

		$this->load->view('HotelDisplayAll', $data);
	}
	public function updatehotel()
	{
		// $this->load->view('UpdateHotel');
		$this->load->model('HotelModel');

		$id= $this->input->get('hId');
		$result['data']=$this->HotelModel->displayRecordsById($id);

		$this->load->view('UpdateHotel', $result);

	}

	public function update_hot(){
		$this->load->model('HotelModel');
		$id= $this->input->post('hId');
		$name= $this->input->post('name');
		$manager= $this->input->post('manager');
		$sectorId= $this->input->post('sectorId');
		$provinceId= $this->input->post('provinceId');
		$location= $this->input->post('location');
		$description= $this->input->post('description');

		if($this->input->post('update')){
			$res= $this->HotelModel->update_records($name, $manager, $sectorId, $provinceId, $location, $description, $id);
				// $this->load->view('HotelDisplayAll');
				// if($res){
					$data['h']= $this->select->select();
					$this->load->view('HotelDisplayAll', $data);
				// }
		}
	}
	public function deletedata()
		{
		$this->load->model('HotelModel');
		$id=$this->input->get('id');
		$response=$this->HotelModel->deleterecords($id);
		if($response==true){
			// $this->load->view('HotelDiplayAll');
			redirect('Display/index','refresh');
		}
		else{
			echo "Error !";
	}
}
public function view(){
	$this->load->view("HotelView");
}
}



?>