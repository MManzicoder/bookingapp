<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class HotelController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('HotelModel');
		$this->load->model("select");
		$this->load->helper('form') ;
	}
	public function index()
	{
		$data['h']= $this->select->select();

		$this->load->view('HotelDisplayAll', $data);
	}

	function add_hotel(){
		$this->load->view('HotelView');

		if($this->input->post('submit')){
			$values['name']=$this->input->post('name');
			$values['manager']=$this->input->post('manager');
			$values['sectorId']=$this->input->post('sectorId');
			$values['provinceId']=$this->input->post('provinceId');
			$values['location']=$this->input->post('location');
			$values['description']=$this->input->post('description');
			$result= $this->HotelModel->add_record($values);
			if($result == true)
		{
			redirect('Display/index');
		}
		else
		{
			echo "failed to add Hotel...don't worry,try again!:)";
		}
		}
	}

	
	
}


?>