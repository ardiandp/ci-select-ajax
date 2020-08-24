<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transfer extends CI_Model {

	function get_data_rekening_bykode($kode){
		$hsl=$this->db->query("SELECT * FROM no_rekening WHERE kode='$kode'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kode' => $data->kode,
					'atas_nama' => $data->atas_nama,
					'alias' => $data->alias,
					'norek' => $data->norek,
					);
			}
		}
		return $hasil;
	}

	function rekening()
	{
		return $this->db->get('no_rekening');
	}

	

}

/* End of file M_transfer.php */
/* Location: ./application/models/M_transfer.php */