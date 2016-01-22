<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_perkiraan extends CI_Controller {

	public function index()
	{
		$this->model_utama->cekSession();
		$query = 'select * from ci_sia.perkiraan';
		$this->model_init->view('input/perkiraan', 'Input Perkiraan Akuntansi', $query);
	}

	public function postPerkiraan($value='')
	{
		$kode = $this->input->post('kode');
		$perkiraan = $this->input->post('perkiraan');
		$saldoNormal = $this->input->post('saldoNormal');

		$exec = $this->model_utama->queryinsert("insert into ci_sia.perkiraan value ('$kode', '$perkiraan', '$saldoNormal')");

		if ($exec) {
			# code...
			$this->index();
		}
	}



}

/* End of file input.php */
/* Location: ./application/controllers/input.php */