<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->model_utama->cekSession();
		$this->model_init->view('home/home', 'Aplikasi Pencatatan Akuntasi');		
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */