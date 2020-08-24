<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bpjs');
	}

	public function index()
	{
		$data['bpjs']=$this->M_bpjs->peserta()->result();
		$this->load->view('v_peserta', $data, FALSE);
	}

	public function get_peserta()
	{
		$nik=$this->input->post('nik');
		$data=$this->M_bpjs->get_data_peserta_bynik($nik);
		echo json_encode($data);
	}

}

/* End of file Bpjs.php */
/* Location: ./application/controllers/Bpjs.php */