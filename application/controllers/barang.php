<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function masuk()
	{
		$this->model_utama->cekSession();
		$query = 'select * from barang';
		$this->model_init->view('barang/barang-masuk', 'Input Barang Masuk', $query);
	}

	public function post_input()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$harga_satuan = $this->input->post('harga_satuan');

		if ($kode_barang != '' && $nama_barang != '' && $jumlah_barang != '' && $harga_satuan != '') {
			$cek = $this->model_utama->querySatuHasil("select * from barang where kode_barang = '$kode_barang'");
			if($cek != null){
				$jumlah_barang = $jumlah_barang + $cek->jumlah_barang;
				$exec = $this->model_utama->queryinsert("update barang SET jumlah_barang = '$jumlah_barang' WHERE kode_barang = '$kode_barang'");
			}else{
				$exec = $this->model_utama->queryinsert("insert into barang (kode_barang, nama_barang, jumlah_barang, harga_satuan)  value ('$kode_barang', '$nama_barang', '$jumlah_barang', '$harga_satuan')");
			}
		}

		if($exec){
			return $this->list_barang();
		}
		return $this->masuk();
	}

	public function delete_input()
	{
		$kode_barang = $this->input->get('kode_barang');

		if ($kode_barang != '') {
			$exec = $this->model_utama->queryinsert("DELETE FROM barang WHERE kode_barang = '$kode_barang'");
		}

		if($exec){
			return $this->list_barang();
		}
		return $this->list_barang();
	}

	public function list_barang()
	{
		$this->model_utama->cekSession();
		$query = 'select barang.nama_barang, barang.kode_barang, barang.jumlah_barang, barang.harga_satuan, sum(jumlah) as jumlah_terjual from barang left join transaksi on transaksi.kode_barang = barang.kode_barang group by barang.kode_barang';
		$this->model_init->view('barang/barang-list', 'List Barang', $query);
	}

	public function keluar()
	{
		$this->model_utama->cekSession();
		$query = "select * from barang";
		$query2 = "select * from pelanggan";
		$this->model_init->view('barang/barang-keluar', 'Barang Keluar', $query, $query2);
	}

	public function ajax($value='')
	{
		$kode_barang = $this->input->post('data');
		$query = "select * from barang where kode_barang = '".$kode_barang."'";
		$barang = $this->model_utama->queryToJson($query);
		echo $barang;
	}

	public function post_keluar()
	{
		$this->model_utama->cekSession();
		$barang_id = $this->input->post('barang_id');
		$jumlah = $this->input->post('jumlah');
		$total_harga = $this->input->post('total_harga');
		$kode_pelanggan = $this->input->post('kode_pelanggan');

		$tanggal = date('Y-m-d');
		$sisa = $this->input->post('jumlah_barang') - $jumlah;

		$query = "insert into transaksi (kode_barang, jumlah, total_harga, kode_pelanggan, tanggal) value ('".$barang_id."','".$jumlah."','".$total_harga."','".$kode_pelanggan."','".$tanggal."')";
		$update = "update barang SET jumlah_barang = '".$sisa."' WHERE kode_barang = '".$barang_id."'";
		$this->model_utama->queryinsert($update);
		$this->model_utama->queryinsert($query);
		return $this->list_barang();
	}

	public function laporan_transaksi($value='')
	{
		$this->model_utama->cekSession();
		$query = 'select * from transaksi, barang where transaksi.kode_barang = barang.kode_barang';
		$this->model_init->view('barang/transaksi-list', 'List transaksi', $query);
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */