<?php
class Transfer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_transfer');
	}
	function index(){
		
		$data['rekening']= $this->M_transfer->rekening()->result();
		$this->load->view('v_transfer',$data);	
	}

	function get_rekening(){
		$kode=$this->input->post('kode');
		$data=$this->M_transfer->get_data_rekening_bykode($kode);
		echo json_encode($data);
	}
}