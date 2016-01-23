<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function input()
	{
		$this->model_utama->cekSession();
		$this->model_init->view('pelanggan/input', 'Input Pelanggan');		
	}

	public function list_pelanggan()
	{
		$this->model_utama->cekSession();
		$query = 'select * from pelanggan';
		$this->model_init->view('pelanggan/list', 'List Pelanggan', $query);
	}

	public function post_input($value='')
	{
		$kode_pelanggan = $this->input->post('kode_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		
		if ($kode_pelanggan != '' && $nama_pelanggan !='') {
			$cek = $this->model_utama->querySatuHasil("select * from pelanggan where kode_pelanggan = '$kode_pelanggan'");
			if($cek != null){
				return $this->list_pelanggan();
			}else{
				$exec = $this->model_utama->queryinsert("insert into pelanggan (kode_pelanggan, nama_pelanggan)  value ('$kode_pelanggan', '$nama_pelanggan')");
			}
		}

		if($exec){
			return $this->list_pelanggan();
		}
		return $this->list_pelanggan();
	}

	public function delete_input()
	{
		$kode_pelanggan = $this->input->get('kode_pelanggan');

		if ($kode_pelanggan != '') {
			$exec = $this->model_utama->queryinsert("DELETE FROM pelanggan WHERE kode_pelanggan = '$kode_pelanggan'");
		}

		if($exec){
			return $this->input();
		}
		return $this->input();
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */