<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bpjs extends CI_Model {

	function get_data_peserta_bynik($nik)
	{
		$hsl=$this->db->query("select *from bpjs_mandiri where nik='$nik'");
		if($hsl->num_rows()>0){
			foreach ($$hsl->result() as $data ) {
				$hasil=array(
					'nik' => $data->nik,
					'no_akun'=> $data->no_akun,
					'nama'=>$data->nama,
				);
			}
		}
		return $hasil;
	}

	public function peserta()
	{
		return $this->db->get('bpjs_mandiri');
	}

	

}

/* End of file M_bpjs.php */
/* Location: ./application/models/M_bpjs.php */