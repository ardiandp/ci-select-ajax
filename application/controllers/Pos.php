<?php
class Pos extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pos');
	}
	function index(){
		
		$data['barang']= $this->m_pos->barang()->result();
		$this->load->view('v_pos',$data);	
	}

	function get_barang(){
		$kode=$this->input->post('kode');
		$data=$this->m_pos->get_data_barang_bykode($kode);
		echo json_encode($data);
	}
}