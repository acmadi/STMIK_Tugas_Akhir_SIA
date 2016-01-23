<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_kelompok extends CI_Controller {

	public function index()
	{
		$this->model_utama->cekSession();
		$this->model_init->view('about/anggota', 'Anggota Kelompok SIA');
	}

}

/* End of file anggota_kelompok.php */
/* Location: ./application/controllers/anggota_kelompok.php */